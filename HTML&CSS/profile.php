<?php
	
	session_start();
	$user = $_SESSION['loginuser'];
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$SQLString = "SELECT * FROM account WHERE Username='$user'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysql_fetch_assoc($sql);
		$user['username']=$row['username'];
		echo $row['username'];
	
?>