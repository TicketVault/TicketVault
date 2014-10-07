<?php
	//this is php commrnt
	//database connection
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$username=$_POST["name"];
	$email=$_POST["email"];


	$SQLString = "INSERT INTO signup (Username,Email)
	VALUES( '$username','$email')";
	mysqli_query($dbhandle, $SQLString);
	header("Location: index.html");
	die();	
?>
