<?php

	function remainInPage () {
		
		header("Location: signup.html");
		die();
	}
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");

	if ((!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['email']))) {
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$address=$_POST['address'];

		$result = mysqli_query($dbhandle, "SELECT * FROM signup WHERE Username=$username");
		
		if (!$result) {
	
			if(!(mysql_num_rows($result) > 0)) {

				$SQLString = "INSERT INTO signup (Username,Email,Password,Address)
				VALUES( '$username','$email', '$password', '$address')";
				mysqli_query($dbhandle, $SQLString);
		
				header("Location: success.html");
				die();
	
			}
			else {
				remainInPage ();
			}
		}
	
		else {
			remainInPage ();
		}
	}
		
	else {
		
		remainInPage ();
	}	
	
?>
