<?php
	//this is php commrnt
	//database connection
	include('Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	$eventname_insert = $_POST['eventname'];
	$detail_insert = $_POST['detail'];
	$price_insert = $_POST['price'];
	$location_insert = $_POST['location'];
	$remainingtickets_insert = $_POST['remainingtickets'];
	$orgname_insert = $_POST['orgname'];
	$SQLString = "INSERT INTO event (OrganizationName,Eventname,Detail,Price,Location,RemainingTickets)
	VALUES( '$orgname_insert','$eventname_insert', '$detail_insert','$price_insert','$location_insert','$remainingtickets_insert')";
	mysqli_query($dbhandle, $SQLString);
	echo "done";
	header("Location: ../CreateEventSuccess.php");

?>