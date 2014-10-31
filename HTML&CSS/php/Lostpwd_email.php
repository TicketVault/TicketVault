<?php
	include('Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	$username=$_POST["username"];
	$context = sha1($username);
	//echo $context;
	$myfile = fopen("../".$context.'.php', "w")
	
?>
