<?php

	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and sign up page*/

	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");

	if ((!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['password_validate'])) && (!empty($_POST['email']))) {
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password_validate=$_POST['password_validate'];
		
		
		if ($password != $password_validate) {
			
			printErr('passwords do not match!');
		}

		$result = mysqli_query($dbhandle, "SELECT * FROM signup WHERE Username=$username");
		
		
	
		if(!(mysqli_num_rows($result) > 0)) {

			$SQLString = "INSERT INTO signup (Username,Email,Password)
			VALUES( '$username','$email', '$password')";
			mysqli_query($dbhandle, $SQLString);
		
			header("Location: success.html");
			die();
	
		}
		else {
			hasDuplicateAccount ();
		}
	}
	
	else {
		isIncomplete ();
	}
	
	
	/*print error*/
	
	function printErr ($_err) {

		
		echo '<html>
				<head>
					<meta http-equiv="refresh" content="3;url=signup.html" />
				</head>
				<body>';
    	echo "$_err";
		die();
	
	}
	
	/*display duplicate account error*/
	
	function hasDuplicateAccount () {
	
		printErr('Username is duplicates');
	}
	/*display incomplete sign up error*/
	
	function isIncomplete () {
		
		if (empty($_POST['username'])) {
		
			printErr('Username cannot be empty');
			
		}
		
		else if (empty($_POST['password'])) {
		
			printErr('Password cannot be empty');
			
		}
		
		else if (empty($_POST['email'])) {
			
			printErr('Email cannot be empty');
		}
		
		else if (empty($_POST['password_validate'])) {
			
			
			printErr('Please confirm your password');
		}
	}
	
	
	
	
	

		
	
?>
