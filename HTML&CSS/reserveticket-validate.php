 <?php
	
/*Handle interconnection between server and reserveticket page*/
	
	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	
	
	
 	$username = $_POST['username'];
	$eventID = $_POST['EventID']; 	
	
 	if ($_POST['RemainingTickets'] < 1) {
 		
 			printErr ("No tickets available this time, please check back later.");
 	}
 		
 	else {
 		 	 
			$SQLupdate = "UPDATE account SET ReamainingTickets = '".$_POST['RemainingTickets']." - 1' WHERE EventID = '$eventID'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
			
			$ticketID = uniqid (rand(), true);
 
 			$SQLupdate2 = "UPDATE account SET TicketID = 'ticketID' WHERE EventID = '$eventID'" ;
			
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
