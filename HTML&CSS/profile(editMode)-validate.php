 <?php
	
/*Author: Chengkang Xu*/
/*Handle interconnection between server and profile(editMode) page*/
	
	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	
	
	
 	$username = $_POST['username']; 	
 	if (((!empty($_POST['original_password'])) || (!empty($_POST['new_password'])) || (!empty($_POST['confirm_password']))) && 
 	(!((!empty($_POST['original_password'])) && (!empty($_POST['new_password'])) && (!empty($_POST['confirm_password']))))) {
 		
 			printErr ("Passwords incomplete!");
 	}
 	
 	else if (((!empty($_POST['birthdayMonth'])) || (!empty($_POST['birthdayDay'])) || (!empty($_POST['birthdayYear']))) && 
 	(!((!empty($_POST['birthdayMonth'])) && (!empty($_POST['birthdayDay'])) && (!empty($_POST['birthdayYear']))))) {
 		
 			printErr ("Birthday incomplete!");
 	}
 	
 	else {
 	
 		if (!empty($_POST['email'])) {
 			
 			
 			$SQLupdate = "UPDATE account SET Email = '".$_POST['email']."' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 		}
 		
 		if (!empty($_POST['firstname'])) {
 		
 			$SQLupdate = "UPDATE account SET Firstname = '".$_POST['firstname']."' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 		}
 		
 		if (!empty($_POST['lastname'])) {
 		
 			$SQLupdate = "UPDATE account SET Lastname = '".$_POST['lastname']."' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
 
 		}
 		
 		
 		
 		/*birthday*/
 		
 		if ((!empty($_POST['birthdayMonth'])) && (!empty($_POST['birthdayDay'])) && (!empty($_POST['birthdayYear']))) {
 			
			$birthday = $_POST['birthdayMonth'] . "/" . $_POST['birthdayDay'] . "/" . $_POST['birthdayYear'];

			$SQLupdate = "UPDATE account SET Birthday = '$birthday' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);		
 		}
 		
 		
 		/*phone number*/
 		
 		if (!empty($_POST['phone'])) {
 		
 			$SQLupdate = "UPDATE account SET Phone = '".$_POST['phone']."' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
 		}
 		
 		/*address*/
 		
 		if (!empty($_POST['address'])) {
 		
 			$SQLupdate = "UPDATE account SET Address = '".$_POST['address']."' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 		}
 		
 		/*password*/
 		
 		if ((!empty($_POST['original_password'])) && (!empty($_POST['new_password'])) && (!empty($_POST['confirm_password']))) {
 			
 			$original_password = $_POST['original_password'];
 			$new_password = $_POST['new_password'];
 			$confirm_password = $_POST['confirm_password'];
 			
 			if ($original_password == $new_password) {
 				printErr ('New password cannot be the same as old one');
 			}
 			
 			if ($confirm_password != $new_password) {
 				printErr ('Passwords do not match');
 			}
 			
 			$result = mysqli_query($dbhandle, "SELECT * FROM account WHERE Username=$username");
 			
 			$result_password = mysqli_fetch_array($result);
 			
 			if ($original_password != $result_password['Password']) {
 		
 				printErr ('Password is incorrect');
 			}
 			
 			else {
 				$SQLupdate = "UPDATE account SET Password = '$new_password' WHERE Username = '$username'" ;
 
 				$result_update = mysqli_query($dbhandle, $SQLupdate);
 			}
 		}
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