<?php

	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");

	if ((!empty($_POST['original_password'])) || (!empty($_POST['new_password'])) || (!empty($_POST['confirm_password']))) {
		
			
	}
	
	else {
	
		if (!empty($_POST['email'])) {
			
		}
		
		if (!empty($_POST['firstname'])) {
			
		}
		if (!empty($_POST['lastname'])) {
			
		}
		
		if (!empty($_POST['gender'])) {
			
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
	}
	
	function update ($itemToBeUpdated, $updated_data, $username) {
		
		$SQLstring = "UPDATE account ".
       "SET $itemToBeUpdated = $updated_data ".
       "WHERE Username = $username" ;

	   mysqli_select_db('test_db');
	   mysqli_query($dbhandle, $SQLstring);
	  
	}
?>