<?php
	//this is php commrnt
	//database connection
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];


	$SQLString = "INSERT INTO signup (user,email,password)
	VALUES( '$username','$email','$password')";
	mysqli_query($dbhandle, $SQLString);
	header("Location: home.html");
	die();	
?>
