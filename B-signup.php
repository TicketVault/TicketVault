<?php
	function remainInPage() {

	}
	

	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");

	if ((!empty($_POST['username'])) && (!empty($_POST['password'])) && (!empty($_POST['email']))) {

		$pattern =  '/^[0-9A-Za-zÁ-Úá-úàÀÜü]+$/';

		if ((preg_match($pattern, $username) == 1) &&
			(preg_match($pattern, $password) == 1) &&
			(preg_match($pattern, $email) == 1)) {

			$username=$_POST['username'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$address=$_POST['address'];

			$result = mysql_query("SELECT * FROM signup WHERE Username='$username'");
			$num_rows = mysql_num_rows($result);

			if($num_rows == 0) {

				$SQLString = "INSERT INTO signup (Username,Email,Password,Address)
				VALUES( '$username','$email', '$password', '$address')";
				mysqli_query($dbhandle, $SQLString);
			}

			else {
				remainInPage();

			}
		}

		else {

			remainInPage();
		}
	}

	else {

		remainInPage();
	}
	
	header("Location: index.html");
	die();
?>
