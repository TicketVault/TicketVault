<?php
	include('php/Base.php');
	session_start();
	$dbhandle = database_connect();
	$eventname = $_GET['eventName'];
	$SQLString = "SELECT * FROM event WHERE Eventname = '$eventname'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
	
	$EventID = $row['EventID'];
	$UNE = $_SESSION['loginuser'];
	
	$SQLString = "DELETE FROM ticket WHERE EventID='$EventID' AND Username='$UNE'";
	$result = mysqli_query($dbhandle, $SQLString);
	
	if ($result === TRUE) {
    	
    	header("Location: success.php");
	} 	   

?>