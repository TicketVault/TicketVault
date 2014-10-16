<?php
	
	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and profile(editMode) page*/
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$username=$_POST["username"];
	$password=$_POST["password"];

	
	$SQLString = "SELECT * FROM account WHERE Username='$username'";
	$result = mysqli_query($dbhandle, $SQLString);
	$count=mysqli_num_rows($result);
	session_start();
	$_SESSION['loginuser']=$username;
	while($row = mysqli_fetch_array($result)) {
  		echo "<tr>";
  		echo "<td>" . $row['username'] . "</td>";
  		echo "<td>" . $row['lastName'] . "</td>";
  		echo "</tr>";
	}
?>