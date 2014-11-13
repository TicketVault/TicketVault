 <?php
	
/*Author: Chengkang Xu*/
/*Handle interconnection between server and profile(editMode) page*/
	
	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	
	
	
 	$eventname = $_GET['eventname']; 	
 	/*if (((!empty($_POST['original_password'])) || (!empty($_POST['new_password'])) || (!empty($_POST['confirm_password']))) && 
 	(!((!empty($_POST['original_password'])) && (!empty($_POST['new_password'])) && (!empty($_POST['confirm_password']))))) {
 		
 			printErr ("Passwords incomplete!");
 	}
 	
 	else if (((!empty($_POST['birthdayMonth'])) || (!empty($_POST['birthdayDay'])) || (!empty($_POST['birthdayYear']))) && 
 	(!((!empty($_POST['birthdayMonth'])) && (!empty($_POST['birthdayDay'])) && (!empty($_POST['birthdayYear']))))) {
 		
 			printErr ("Birthday incomplete!");
 	}*/
 	
 		if (!empty($_POST['eventname'])) {
 			
 			
 			$SQLupdate = "UPDATE event SET Eventname = '".$_POST['eventname']."' WHERE Eventname = '$eventname'" ;
 
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