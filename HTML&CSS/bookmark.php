<?php

	/*Author: Chengkang Xu*/

	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	
	$eventID=$_POST['EVENTID'];
	session_start();
	$username=$_SESSION['loginuser'];
	
	$SQLString = "INSERT INTO favorite (Username,EventID)
		VALUES( '$username','$eventID')";
		
	$result = mysqli_query($dbhandle, $SQLString);
	
	header("Location: profile.php");
	die();
?>
