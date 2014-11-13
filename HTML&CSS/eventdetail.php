<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Event detail - TicketVault</title>
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


	<?php
		include('php/Base.php');
		sub_banner();
	?>


		<!-- Main -->
			<section id="main" class="container">
			</div>
				<div class="row">
					<div class="12u">
						<section class="box">
							<h3>Event Detail</h3>
                            <ul class="actions vertical small">
                            <?php
                            	
                            	session_start();
                            	if(isset($_SESSION['organizationuser']))
                            	echo "<li><a href=".'"'."eventProfile(editMode).php".'"'." >#Edit Event</a></li>";
                            	
                            ?>
     
                            </ul>
  
<?php
	
	
	session_start();
	$dbhandle = database_connect();
	$eventname = $_GET['event_name'];
	$SQLString = "SELECT * FROM event WHERE Eventname = '$eventname'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
	$username['eventname']=$row['Eventname'];
	$username['organizationname']=$row['OrganizationName'];
	$username['price']=$row['Price'];
	$username['detail']=$row['Detail'];

?> 

  <div id="right">
		<div class="us_contentBox">
        
        	<form method="post" action="eventdetail.php">
        	
			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Event name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="eventname" type="text" value="<?php echo $row['Eventname']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
			
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Organization Name： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="organizationname" type="text" value="<?php echo $row['Organization name']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                         
                <tr>
                  <td width="28%" align="right" bgcolor="#FFFFFF">Detail： </td>
                  <td width="72%" align="left" bgcolor="#FFFFFF">
                  <div class="row uniform">
                  <div class="6u">
				  	<input name="detail" type="text" value="<?php echo $row['Detail']; ?>" class="formBorder" readonly/>
                  </div>
                  </div>
                  </td>
                </tr>
                
                  <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Price： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="price" type="text" value="<?php echo $row['Price']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                
                 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Location： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="location" type="text" value="<?php echo $row['Location']; ?>" placeholder=""/ readonly>
                  </td>
                </tr>
                
                  <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Remaining tickets： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="remainingtickets" type="text" value="<?php echo $row['RemainingTickets']; ?>" class="formBorder" readonly/>
                  </td>
                </tr>
                
               </div>
  
		</div>

	</div>

	</body>
</html>