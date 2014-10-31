 <?php	
	include('php/Base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");
	$username = $_POST['username']; 
	$password = $_POST['new_password'];
	if ($_POST['confirm_password'] != $_POST['new_password']) {
 				echo 'Passwords do not match';
 	}else{
		$SQLupdate = "UPDATE account SET Password = '$password' WHERE Username = '$username'" ;
		$result_update = mysqli_query($dbhandle, $SQLupdate);
		header("Location: change_pwd_ succeeds.html");
	}
?>
