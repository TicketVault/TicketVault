<?php
	//this is php commrnt
	//database connection
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$username=$_POST["username"];
	$password=$_POST["password"];

	
	$SQLString = "SELECT * FROM signup WHERE Username='$username' AND Password='$password'";
	$result = mysqli_query($dbhandle, $SQLString);
	$count=mysqli_num_rows($result);
	if($count==1){
		header("Location: home.html");
		die();
	}
	else{
		header("Location: login.html");
		die();
	}	
?>
