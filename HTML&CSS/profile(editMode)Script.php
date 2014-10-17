<?php
	
	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and profile(editMode) page*/
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");
	
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
			
			update($dbhandle,"Email", $_POST['email'], $username);
			
		}
		
		if (!empty($_POST['firstname'])) {
		
			update($dbhandle, "Firstname", $_POST['firstname'], $username);
		}
		
		if (!empty($_POST['lastname'])) {
		
			update($dbhandle, "Lastname", $_POST['lastname'], $username);

		}
		
		
		
		/*birthday*/
		
		if ((!empty($_POST['birthdayMonth'])) && (!empty($_POST['birthdayDay'])) && (!empty($_POST['birthdayYear']))) {
			
			$birthday = $_POST['birthdayMonth'] . "/" . $_POST['birthdayDay'] . "/" . $_POST['birthdayYear'];
			update($dbhandle, "Birthday", $birthday, $username);
		}
		
		
		/*phone number*/
		
		if (!empty($_POST['phone'])) {
		
			update($dbhandle, "Phone", $_POST['phone'], $username);
		}
		
		/*address*/
		
		if (!empty($_POST['address'])) {
		
			update($dbhandle, "Address", $_POST['address'], $username);
			
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
			
			$result_password = mysqli_query($dbhandle, "SELECT * FROM account WHERE Username=$username AND Password=$original_password");
			
			if (mysqli_num_rows($result_password) < 0) {
		
				printErr ('Password is incorrect');
			}
			
			else {
				update ($dbhandle, "Password", $new_password, $username);
			}
		}
	}
		header("Location: success.html");
	die();
	
	/*query database and update data*/
	
	function update ($db, $itemToBeUpdated, $updated_data, $username) {
		
		$SQLupdate = "UPDATE account SET $itemToBeUpdated = '$updated_data' WHERE Username = $username" ;

	   $result_update = mysqli_query($db, $SQLupdate);
	   
	   if(! $result_update )
	   {
		   die('Could not update data: ' . mysql_error());
		}
	}
	
	/*print error*/
	
	function printErr ($_err) {

		
		echo '<html>
				<head>
					<meta http-equiv="refresh" content="3;url=signup.html" />
				</head>
				<body>';
    	echo "$_err";
		die();
	
	}
?>