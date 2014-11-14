 <?php
	
/*Handle interconnection between server and reserveticket page*/
	
	include('php/Base.php');
	
	session_start();
	$username = $_SESSION['loginuser'];
	$dbhandle = database_connect();	
	
	$SQLString = "SELECT * FROM event WHERE Eventname = '".$_GET['eventName']."'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);

	
 	if ($row['RemainingTickets'] < 1) {
 			printErr ("No tickets available this time, please check back later.");
 	}
 		
 	else {
 		 	 
			$SQLupdate = "UPDATE account SET ReamainingTickets = '".$row['RemainingTickets']." - 1' WHERE eventName = '$eventName'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
			
			$ticketID = uniqid (rand(), true);
 
 			$SQLupdate2 = "UPDATE account SET TicketID = '".$ticketID."' WHERE eventName = '$eventName'" ;
			
			$result_update = mysqli_query($dbhandle, $SQLupdate2);
			
 	}
 	
 	header("Location: TicketSuccess.php");
 	die();
 	
 	
 	/*print error*/
 	
 	function printErr ($_err) {
 
 		
 		echo '<html>
 				<head>
 					<meta http-equiv="refresh" content="3;url=UpcomingEvent.php" />
 				</head>
 				<body>';
     	echo "$_err";
 		die();
 	
 	}
 ?>
