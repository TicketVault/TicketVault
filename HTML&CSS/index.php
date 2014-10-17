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
	
	
	
	<body class="landing">
		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="http://ticketvault.cu.cc">TicketVault</a></h1>
				<?php
					session_start();
					if(isset($_SESSION['loginuser'])){
						echo "<nav id="."nav".">";
						echo "<ul>";
						echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
						echo "<li><a href="."eventmanage.php"." >Manage Event</a></li>";	
						echo "<li><a href="."UpcomingEvent.php"." >Upcoming Event</a></li>";
						echo "<li><a href="."profile.php"." >Profile</a></li>";
						echo "<li><a href="."php/Logout.php"." class="."button".">logout</a></li>";
						echo "</ul>";
						echo "</nav>";

					}else{
						echo "<nav id="."nav".">";
						echo "<ul>";
						echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
						echo "<li><a href="."eventmanage.php"." >Manage Event</a></li>";
						echo "<li><a href="."UpcomingEvent.php"." >Upcoming Event</a></li>";
						echo "<li><a href="."signup.php"." class="."button".">Sign Up</a></li>";
						echo "<li><a href="."login.php"." class="."button".">login</a></li>";
						echo "</ul>";
						echo "</nav>";
					}
				?>
				</header>

				<!--
					<nav id="nav">
					<ul>
						<li><a href="index.html" >Home</a></li>
						<li><a href="index.html" >Manage Event</a></li>
						<li><a href="index.html" >Upcoming Event</a></li>
						<li><a href="signup.html" class="button">Sign Up</a></li>
						<li><a href="login.html" class="button">Login</a></li>
					</ul>
				</nav>
			</header>
			-->
			
			

			
		<!-- banner -->
			<section id="banner">
				
				<p>Search for Event or Organazation</p>				
				<form>
					<div class="row uniform half collapse-at-2">
						<div class="6u">
							<input type="text"  placeholder="Event Name" />
						</div>
						<div class="3u">
							<input type="submit" value="Search" class="fit" />
						</div>
					</div>
				</form>
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://github.com/TicketVault/TicketVault" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="https://www.cs.purdue.edu/homes/bxd/307/" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>

				<!--
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					-->
				</ul>
				<ul class="copyright">
					<li>&copy; CS307 Fall2014 Team8</li>
				</ul>
			</footer>
						
	</body>
</html>
