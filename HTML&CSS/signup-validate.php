<?php

	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and sign up page*/

	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");

	if ((!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['password_validate'])) && (!empty($_POST['email']))) {
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password_validate=$_POST['password_validate'];
		
		

		$result_username = mysqli_query($dbhandle, "SELECT * FROM account WHERE Username=$username");
		$result_email = mysqli_query($dbhandle, "SELECT * FROM account WHERE Email=$email");
		
		if (mysqli_num_rows($result_username) > 0) {
		
			hasDuplicateUsername ();
		}
		
		else if (mysqli_num_rows($result_email) > 0) {
		
			hasDuplicateEmail ();	
		}
	
		else {

			$SQLString = "INSERT INTO account (Username,Email,Password)
			VALUES( '$username','$email', '$password')";
			mysqli_query($dbhandle, $SQLString);
			
			session_start();
			$_SESSION['loginuser']=$username;
		
			header("Location: success.php");
			die();
	
		}
		
	}
	
	
	/*print error*/
	
	function printErr ($_err) {

		
		echo '<html>
				<head>
					<meta http-equiv="refresh" content="3;url=signup.php" />
				</head>
				<body>';
    	echo "$_err";
		die();
	
	}
	
	/*display duplicate username error*/
	
	function hasDuplicateUsername () {
	
		printErr('Username is duplicated');
	}
	
	/*display duplicate username error*/
	
	function hasDuplicateEmail () {
	
		printErr('Email is duplicated');
	}	
?>
