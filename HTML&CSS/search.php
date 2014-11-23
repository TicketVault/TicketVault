<?php

	$dbhandle = mysqli_connect("mysql.hostinger.co.uk","u907917272_cs307","CS307TEAM8","u907917272_table");
		if (mysqli_connect_errno())
		{	

  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

  		$selected_val = $_GET['item'];  // Storing Selected Value In Variable
		echo "You have selected :" .$selected_val;
		if($selected_val==1){

			echo "1";
		}
		else if ($selected_val==2){

			echo"2";
		}
		else if($selected_val==3){

			echo "3";
		}
		else if ($selected_val==4) {
			echo "4";
		}
		else{
			echo "5";
		}



?>
