<?php

	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and sign up page*/

	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password_validate=$_POST['password_validate'];
		
	$result_username = mysqli_query($dbhandle, "SELECT * FROM account WHERE Username=$username");
	$result_email = mysqli_query($dbhandle, "SELECT * FROM account WHERE Email=$email");
		
	if (mysqli_num_rows($result_username) > 0) {
		
		hasDuplicateUsername ($username, $email);
	}
		
	else if (mysqli_num_rows($result_email) > 0) {
		
		hasDuplicateEmail ($username, $email);	
	}
	
	else {
		
		$hash=hash ('md5',$password);
		$SQLString = "INSERT INTO account (Username,Email,Password)
		VALUES( '$username','$email', '$hash')";
		mysqli_query($dbhandle, $SQLString);
		signup_email($email);
		session_start();
		$_SESSION['loginuser']=$username;
		
		header("Location: success.php");
		die();
	}
	
	
	/*print error*/
	
	function printErr ($_err, $username, $email) {

		
		echo '<html>
				<head>
					<meta http-equiv="refresh" content="3;url=signup.php" />
				</head>
				<body>';
    	echo "$_err";
    	
    	session_start();
    	
		$_SESSION['UN']=$username;
		$_SESSION['EM']=$email;
		
		die();
	
	}
	
	/*display duplicate username error*/
	
	function hasDuplicateUsername ($username, $email) {
	
		printErr('Username is duplicated', $username, $email);
	}
	
	/*display duplicate username error*/
	
	function hasDuplicateEmail ($username, $email) {
	
		printErr('Email is duplicated', $username, $email);
	}	
?>
