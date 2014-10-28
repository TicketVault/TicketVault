<?php
	//this is php commrnt
	//database connection
	$dbhandle = mysqli_connect("mysql.hostinger.co.uk","u907917272_cs307","CS307TEAM8","u907917272_table");
	if (mysqli_connect_errno())
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();

	$username=$_POST["username"];
	$password=$_POST["password"];

	
	$SQLString = "SELECT * FROM account WHERE Username='$username' AND Password='$password'";
	$result = mysqli_query($dbhandle, $SQLString);
	$count=mysqli_num_rows($result);
	if($count==1){
		session_start();
		$_SESSION['loginuser']=$username;
		header("Location: ../index.php");
		die();
	}
	else{
		header("Location: ../loginerror.html");
		die();
	}	
?>
