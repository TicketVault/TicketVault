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
							<h3>Organization Profile</h3>  	
<?php
	session_start();
	$username = $_SESSION['loginuser'];
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u907917272_cs307");	
	
	
	$SQLString = "SELECT * FROM event";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
	$username['eventname']=$row['Eventname'];
	$username['organizationname']=$row['OrganizationName'];
	$username['price']=$row['Price'];
	$username['detail']=$row['Detail'];
?> 
  <div id="right">
  
		<div class="us_contentBox">
		
		<form method="post" action="eventProfile(editMode)-validate.php">

			<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

				 <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Eventname： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="EVENTNAME" type="text" value="<?php echo $row['Eventname']; ?>" placeholder="Please enter event name"/>
                  </td>
                </tr>
				
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Detail： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="detail" type="text" value="<?php echo $row['Detail']; ?>" placeholder="Please enter details"/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Price： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="price" type="text" value="<?php echo $row['Price']; ?>" placeholder="Please enter the rice"/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Location： </td>
                  <td width="80" align="left" bgcolor="#FFFFFF">
                  <input name="location" type="text" value="<?php echo $row['Location']; ?>" placeholder=""/>
                  </td>
                </tr>
                
                <tr>
                  <td width="20%" align="right" bgcolor="#FFFFFF">Remaining tickets： </td>
                  <td width="80%" align="left" bgcolor="#FFFFFF">
                  <input name="remainingtickets" type="text" value="<?php echo $row['RemainingTickets']; ?>" class="formBorder"/>
                  </td>
                </tr>
                
                
                 

		</table>
        		<tr>
      				<td colspan="2" align="center" bgcolor="#FFFFFF">
        			<input name="act" type="hidden" value="act_edit_password" />
        			<input type="submit" name = "submit" id="button" value="submit changes"/>
					</td>
				</tr>
			</table>
   
		</div>
		</form>
  
		</div>

	</div>

	</body>
</html>
