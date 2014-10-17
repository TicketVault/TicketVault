<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Alpha by HTML5 UP</title>
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
				<h1><a href="http://ticketvault.cu.cc">TicketValut</h1>
				<?php
					session_start();
					if(isset($_SESSION['loginuser'])){
						echo "<nav id="."nav".">";
						echo "<ul>";
						echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
						echo "<li><a href=".""." >Manage Event</a></li>";
						echo "<li><a href=".""." >Upcoming Event</a></li>";
						echo "<li><a href="."profile.php"." >Profile</a></li>";
						echo "<li><a href="."php/Logout.php"." class="."button".">logout</a></li>";
						echo "</ul>";
						echo "</nav>";

					}else{
						echo "<nav id="."nav".">";
						echo "<ul>";
						echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
						echo "<li><a href=".""." >Manage Event</a></li>";
						echo "<li><a href=".""." >Upcoming Event</a></li>";
						echo "<li><a href="."signup.php"." class="."button".">Sign Up</a></li>";
						echo "<li><a href="."login.php"." class="."button".">login</a></li>";
						echo "</ul>";
						echo "</nav>";
					}
				?>
			</header>

		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2>Tickets</h2>
					<p>All tickets are sorted by time.</p>
				</header>
				
				
				<div class="row">
					<div class="12u">
							<section class="box">
								<h3>Events Table</h3>
<?php	
	session_start();
	$username = $_SESSION['loginuser'];
	
	$dbhandle = mysqli_connect("sql3.freemysqlhosting.net","sql353761","bR7%eL9*");
	//choose the database you want to use or you can ignore this line and do DATABASE.table inside the mysqli_query();
	mysqli_query($dbhandle,"USE sql353761");

	$SQLString = "SELECT * FROM account WHERE Username='$username'";
	$result = mysqli_query($dbhandle, $SQLString);
	$row = mysqli_fetch_assoc($result);
		$username['username']=$row['Username'];
		$username['firstname']=$row['Firstname'];
		$username['lastname']=$row['Lastname'];
		$username['email']=$row['Email'];
		$username['birthDay']=$row['Birthday'];
		$username['address']=$row['Address'];
		$username['phone']=$row['Phone'];
?>
								<div class="table-wrapper">
                                
                               <form method="post" action="profile.php">
									<table>
									
										<thead>
											<tr>
												<th>Events</th>
												<th>Description</th>
												<th>Price</th>
											</tr>
										</thead>
									<html><head><title>MySQL Table Viewer</title></head><body>
									</body></html>
									<tbody>
                                  
										<tr>
											<td><?php echo $row['Username']; ?></td>
											<td>This is just a testing event.</td>
											<td>19.99</td>
										</tr>
										
									</tbody>
									</table>
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
			<footer id="footer">
				<ul class="icons">
					<li><a href="./Tickets_files/Tickets.html" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="./Tickets_files/Tickets.html" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="./Tickets_files/Tickets.html" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="./Tickets_files/Tickets.html" class="icon fa-github"><span class="label">Github</span></a></li>
					
					<li><a href="./Tickets_files/Tickets.html" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>© Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net/">HTML5 UP</a></li>
				</ul>
			</footer>

	
<ul class="dropotron level-0" style="-webkit-user-select: none; display: none; position: absolute; z-index: 1000;">
								<li style="white-space: nowrap;"><a href="file://localhost/Users/sunkai/Downloads/TicketVault-master/Tamplate/generic.html" style="display: block;">Generic</a></li>
								<li style="white-space: nowrap;"><a href="file://localhost/Users/sunkai/Downloads/TicketVault-master/Tamplate/contact.html" style="display: block;">Contact</a></li>
								<li style="white-space: nowrap;"><a href="file://localhost/Users/sunkai/Downloads/TicketVault-master/Tamplate/elements.html" style="display: block;">Elements</a></li>
								<li class="opener" style="-webkit-user-select: none; cursor: pointer; white-space: nowrap;">
									<a href="" style="display: block;">Submenu</a>
									<ul style="-webkit-user-select: none; display: none; position: absolute; z-index: 1001;" class="dropotron level-1">
										<li style="white-space: nowrap;"><a href="./Tickets_files/Tickets.html" style="display: block;">Option One</a></li>
										<li style="white-space: nowrap;"><a href="./Tickets_files/Tickets.html" style="display: block;">Option Two</a></li>
										<li style="white-space: nowrap;"><a href="./Tickets_files/Tickets.html" style="display: block;">Option Three</a></li>
										<li style="white-space: nowrap;"><a href="./Tickets_files/Tickets.html" style="display: block;">Option Four</a></li>
									</ul>
								</li>
							</ul></div><div id="skel-layers-hiddenWrapper" style="height: 100%;"></div><div id="skel-layers-visibleWrapper" style="position: relative;"></div></body></html>