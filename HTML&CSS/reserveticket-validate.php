  <?php
	
/*Handle interconnection between server and reserveticket page*/
	
	include('php/Base.php');
	
	$dbhandle = database_connect();
	
	$eventname = $_POST['eventname'];
			
	$SQLString = "SELECT * FROM event WHERE Eventname = '$eventname'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
	//echo "Remaining Tickets";
	//echo $row['RemainingTickets'];
	//$eventName = $_POST['eventname'];
	
 	if ($row['RemainingTickets'] < 1) {
 			printErr ("No tickets available this time, please check back later.");
 	}
 		
 	else {
			$RemainingTickets = (int)$row['RemainingTickets'];
			$NRT = $RemainingTickets - 1;

			$SQLupdate = "UPDATE event SET RemainingTickets = '$NRT' WHERE Eventname = '$eventname'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
			
			
			$eventID = $row['EventID'];
			$ticketID = uniqid (rand(), true);
			session_start();
			$username = $_SESSION['loginuser'];
			
			$SQLString = "INSERT INTO ticket (TicketID,EventID,Username)
			VALUES( '$ticketID','$eventID', '$username')";
			mysqli_query($dbhandle, $SQLString);
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
