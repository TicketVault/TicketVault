<?php

	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");
	
	$username = $_POST['username'];

	if ((!empty($_POST['original_password'])) || (!empty($_POST['new_password'])) || (!empty($_POST['confirm_password']))) {
		
			printErr ("Passwords incomplete!");
	}
	
	else {
	
		if (!empty($_POST['email'])) {
			
			update("Email", $_POST['email']), $username);
			
		}
		
		if (!empty($_POST['firstname'])) {
		
			update("Firstname", $_POST['firstname']), $username);
		}
		
		if (!empty($_POST['lastname'])) {
		
			update("Lastname", $_POST['lastname']), $username);

		}
		
		if (!empty($_POST['gender'])) {
			
			update("Gender", $_POST['gender']), $username);
		}
		
		/*phone number*/
		
		if (!empty($_POST['areacode'])) {
		
			
		}
		
		if (!empty($_POST['prefix'])) {
			
		}
		
		if (!empty($_POST['linenumber'])) {
			
		}
		
		/*birthday*/
		
		if (!empty($_POST['birthdayMonth'])) {
			
		}
		if (!empty($_POST['birthdayDay'])) {
			
		}
		if (!empty($_POST['birthdayYear'])) {
			
		}
		
		
		/*address*/
		
		if (!empty($_POST['street'])) {
			
		}
		if (!empty($_POST['city'])) {
			
		}
		if (!empty($_POST['state'])) {
			
		}
		if (!empty($_POST['zipcode'])) {
			
		}
		
		/*password*/
		
		if ((!empty($_POST['original_password'])) && (!empty($_POST['new_password'])) && (!empty($_POST['confirm_password']))) {
			
			
		}
	}
	
	header("Location: success.html");
	die();
	
	/*query database and update data*/
	
	function update ($itemToBeUpdated, $updated_data, $username) {
		
		$SQLstring = "UPDATE account ".
       "SET $itemToBeUpdated = $updated_data ".
       "WHERE Username = $username" ;

	   mysqli_select_db('test_db');
	   mysqli_query($dbhandle, $SQLstring);
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