 <?php
	
/*Handle interconnection between server and eventProfile(editMode) page*/
	
	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	
 	$orgname = $_POST['orgname']; 	
 
 	
	if (!empty($_POST['eventname'])) {
 			
 			
 		$SQLupdate = "UPDATE event SET Eventname = '".$_POST['eventname']."' WHERE OrganizationName = '$orgname'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 	}
 		
 	if (!empty($_POST['detail'])) {
 		
 		$SQLupdate = "UPDATE event SET Detail = '".$_POST['detail']."' WHERE OrganizationName = '$orgname'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 	}
 		
 	if (!empty($_POST['price'])) {
 		
 		$SQLupdate = "UPDATE event SET Price = '".$_POST['lastname']."' WHERE OrganizationName = '$orgname'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);

 	}
 	
 	if (!empty($_POST['location'])) {
 		
 		$SQLupdate = "UPDATE event SET Location = '".$_POST['location']."' WHERE OrganizationName = '$orgname'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);

 	}
 	
 	if (!empty($_POST['remainingtickets'])) {
 		
 		$SQLupdate = "UPDATE event SET RemainingTickets = '".$_POST['remainingtickets']."' WHERE OrganizationName = '$orgname'" ;
 
 		$result_update = mysqli_query($dbhandle, $SQLupdate);

 	}
 				
 	header("Location: success.php");
 	die();
 	
 	
 	/*print error*/
 	
 	function printErr ($_err) {
 
 		
 		echo '<html>
 				<head>
 					<meta http-equiv="refresh" content="3;url=profile(editMode).php" />
 				</head>
 				<body>';
     	echo "$_err";
 		die();
 	
 	}
 ?>