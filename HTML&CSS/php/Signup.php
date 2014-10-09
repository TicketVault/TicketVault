<?php
	
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");

	// check if the inputs are empty
	if ((!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['email']))) {
	
	
		
			$username=$_POST['username'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$address=$_POST['address'];


			
			$result = mysqli_query($dbhandle,"SELECT * FROM signup s WHERE s.Username='$username'");
			$num_rows = mysqli_num_rows($result);

			if($num_rows != 0) {
		
				echo "failed";
				
			}

			else {

				$SQLString = "INSERT INTO signup (Username,Email,Password,Address) 
				VALUES( '$username','$email', '$password', '$address')";
				mysqli_query($dbhandle, $SQLString);
				header("Location: ../index.html");
				die();
			}
		
	}

	
?>
