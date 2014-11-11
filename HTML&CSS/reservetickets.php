<!DOCTYPE HTML>
<!--
	Created by CS307 Team8 
	Using HTML5UP as tamplate
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<html>
	<head>
		<title>TicketVault</title>
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
		<script src="js/dropdown.js"></script>
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
		
		session_start();
		$username = $_SESSION['loginuser'];
		$dbhandle = database_connect();
		mysqli_query($dbhandle,"USE u907917272_cs307");	
	
	
		$SQLString = "SELECT * FROM account WHERE Username='$username'";
		$result1 = mysqli_query($dbhandle, $SQLString);
		$row = mysqli_fetch_assoc($result1);
		$username['username']=$row['Username'];
		$username['email']=$row['Email'];
		$username['phone']=$row['Phone'];
		$result2 = mysqli_query($dbhandle, "SELECT * FROM event ORDER BY Eventname");
	?>
    
			<section id="main" class="container">
				<header>
					<h2>Reserve Tickets</h2>
				</header>
				
				<div class="row">
					<div class="12u">
							<section class="box">
								<h4>Please make sure all information below is correct before submitting your request!</h4>
								<h3>Ticket Information</h3>
								<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

               						<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">Eventname： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="username" type="text" value="<?php echo $row['Eventname']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
				
				 					<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">OrganizationName： </td>
                  					<td width="80" align="left" bgcolor="#FFFFFF">
                  					<input name="email" type="text" value="<?php echo $row['OrganizationName']; ?>" placeholder=""/ readonly>
                  					</td>
                					</tr>
                
                					<tr>
                 					<td width="20%" align="right" bgcolor="#FFFFFF">Event Description： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="first name" type="text" value="<?php echo $row['Detail']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
                
                					<tr>
                 	 				<td width="20%" align="right" bgcolor="#FFFFFF">Price： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="last name" type="text" value="<?php echo $row['Price']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
									
									                					<tr>
                 	 				<td width="20%" align="right" bgcolor="#FFFFFF">Tickets left： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="last name" type="text" value="<?php echo $row['TicketsNum']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
								</table>
                                
                                <h3>User Information</h3>
								<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">

               						<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">Username： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="username" type="text" value="<?php echo $row['Username']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
				
				 					<tr>
                  					<td width="20%" align="right" bgcolor="#FFFFFF">Email： </td>
                  					<td width="80" align="left" bgcolor="#FFFFFF">
                  					<input name="email" type="text" value="<?php echo $row['Email']; ?>" placeholder=""/ readonly>
                  					</td>
                					</tr>
                
                					<tr>
                 					<td width="20%" align="right" bgcolor="#FFFFFF">Phone： </td>
                  					<td width="80%" align="left" bgcolor="#FFFFFF">
                  					<input name="first name" type="text" value="<?php echo $row['Phone']; ?>" class="formBorder" readonly/>
                  					</td>
                					</tr>
               
								</table>


				
                                
                                <div class=”12u">
                                    <ul class="actions">
                                        <li>
        									<input type="submit" value="Confirm"/>
                                        </li>
                                        <li>
        									<input type="submit" value="Back to event details" class="alt"/>
                                        </li>
                                    </ul>
                                </div>
                                
							</section>

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<!-- Buttons -->
							

					</div>
				</div>
				
				
			</section>
    </body>
	
	<?php
		footer();
	?>

</html>