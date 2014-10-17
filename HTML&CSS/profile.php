<?php
	
	session_start();
	$user = $_SESSION['loginuser'];
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$SQLString = "SELECT * FROM account WHERE Username='$user'";
	$result = mysqli_query($dbhandle, $SQLString);

	while($row = mysqli_fetch_assoc($result)) {
		$user['username']=$row['username'];
		$user['firstname']=$row['username'];
		$user['lastname']=$row['lastname'];
		$user['email']=$row['email'];
		$user['birthDay']=$row['birthDay'];
		$user['address']=$row['address'];
		$user['phone']=$row['phone'];
	}
	
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