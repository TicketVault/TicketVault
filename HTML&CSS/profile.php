<?php
	
	session_start();
	$username = $_SESSION['loginuser'];
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$SQLString = "SELECT * FROM account WHERE Username='$username'";
	$result = mysqli_query($dbhandle, $SQLString);

	while($row = mysqli_fetch_assoc($result)) {
		$username['username']=$row['username'];
		$username['firstname']=$row['username'];
		$username['lastname']=$row['lastname'];
		$username['email']=$row['email'];
		$username['birthDay']=$row['birthDay'];
		$username['address']=$row['address'];
		$username['phone']=$row['phone'];
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