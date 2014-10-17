<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Profile - TicketVault</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
    
	<body>


		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">TicketVault</h1>
				<nav id="nav">
					<ul>
						<li><a href="http://ticketvault.cu.cc">Home</a></li>
						<li><a href="">Manage Events</a></li>
						<li><a href="">Upcoming Events</a></li>
						<li><a href="" class="button">Sign up</a></li>
								<li>
							<a href="" class="icon fa-angle-down">Login</a>
							<ul>
								<form>
									Username: <input type="text" name="firstname"><br>
									Password: <input type="password" name="pwd">
								</form>

							</ul>
						</li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container">
			</div>
				<div class="row">
					<div class="12u">
						<section class="box">
							<h3>User Profile</h3>
                            <ul class="actions vertical small">
                            	<li> <a href="profile(editMode).html">#Edit Your Profile</a></li>
                            </ul>
  
<?php
	
	session_start();
	$username = $_SESSION['loginuser'];
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$SQLString = "SELECT * FROM account WHERE Username='$username'";
	$result = mysqli_query($dbhandle, $SQLString);

	$row = mysqli_fetch_assoc($result);
	
		$username['username']=$row['username'];
		$username['firstname']=$row['username'];
		$username['lastname']=$row['lastname'];
		$username['email']=$row['email'];
		$username['birthDay']=$row['birthDay'];
		$username['address']=$row['address'];
		$username['phone']=$row['phone'];
		echo "debug";
		echo $username['username'];
		echo $row['username'];
		
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
<!--
  <div id="right">
		<div class="us_contentBox">
        
        	<form method="post" action="profile.php">
        	
			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Username： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="username" type="text" value="<?php echo $username['username']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
				
				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Email： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="email" type="text" value="<?php echo $username['email']; ?>" placeholder=""/ readonly>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">First Name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="first name" type="text" value="<?php echo $username['firstname']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Last name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="last name" type="text" value="<?php echo $username['lastname']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
              
                
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">Birthday： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF">
                  <div class="row uniform">
                  <div class="6u">
				  	<input name="birthday" type="text" value="<?php echo $username['birthDay']; ?>" class="formBorder" readonly/>
                  </div>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Phone number： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="phone" type="text" value="<?php echo $username['phone']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Mailing address： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="address" type="text" value="<?php echo $username['address']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Reserved Ticktets: </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="tickets" type="text" value=" " class="formBorder" readonly/>
                  </td>
                </tr> 
		</div>
  
		</div>

	</div>
	-->

	</body>
</html>