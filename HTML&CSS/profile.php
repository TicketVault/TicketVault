<?php

	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and profile page*/

	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	mysqli_query($dbhandle,"USE sql353761");

	if ((!empty($_POST['original_password'])) || (!empty($_POST['new_password'])) || (!empty($_POST['confirm_password']))) {
		
			
		}