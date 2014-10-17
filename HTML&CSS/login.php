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
		<title>Signup - TicketVault</title>
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
        <script type="text/javascript">
			function ValidateForm(frm) {
				if (frm.username.value == "") {alert('Username is required.');frm.username.focus();return false;}
				if (frm.pwd.value == "") {alert('Password is required.');frm.pwd.focus();return false;}
			return true; 
		}
		</script>

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
				<h1><a href="http://ticketvault.cu.cc">TicketVault</h1>
				<?php
					session_start();
					if(isset($_SESSION['loginuser'])){
						echo "<nav id="."nav".">";
						echo "<ul>";
						echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
<<<<<<< HEAD
						echo "<li><a href="."eventmanage.php"." >Manage Event</a></li>";
=======
						echo "<li><a href=".""." >Manage Event</a></li>";
>>>>>>> ec546b17d8bb8aec08ef0465c154775118d5cdf5
						echo "<li><a href="."UpcomingEvent.php"." >Upcoming Event</a></li>";
						echo "<li><a href="."profile.html"." >Profile</a></li>";
						echo "<li><a href="."php/Logout.php"." class="."button".">logout</a></li>";
						echo "</ul>";
						echo "</nav>";

					}else{
						echo "<nav id="."nav".">";
						echo "<ul>";
						echo "<li><a href="."http://ticketvault.cu.cc"." >Home</a></li>";
<<<<<<< HEAD
						echo "<li><a href="."eventmanage.php"." >Manage Event</a></li>";
=======
						echo "<li><a href=".""." >Manage Event</a></li>";
>>>>>>> ec546b17d8bb8aec08ef0465c154775118d5cdf5
						echo "<li><a href="."UpcomingEvent.php"." >Upcoming Event</a></li>";
						echo "<li><a href="."signup.php"." class="."button".">Sign Up</a></li>";
						echo "<li><a href="."login.php"." class="."button".">login</a></li>";
						echo "</ul>";
						echo "</nav>";
					}
				?>
				<!--
				<nav id="nav">
					<ul>
						<li><a href="index.html" >Home</a></li>
						<li><a href="index.html" >Manage Event</a></li>
						<li><a href="index.html" >Upcoming Event</a></li>
						<li><a href="signup.html" class="button">Sign Up</a></li>
						<li><a href="profile.html" >Profile</a></li>
						<li><a href="login.html" class="button">Login</a></li>
					</ul>
						</li>
					</ul>
				</nav>-->
			</header>

		<!-- Main -->
			<section id="main" class="container small">
				<header>
					<h2>Login</h2>
					
				</header>
				<div class="box">
					<form method="post" action="php/Login.php" onsubmit="return ValidateForm(this);">
						<div class="row uniform half">
							<div class="12u">
								<input type="text" name="username" id="username" value="" placeholder="User Name" />
							</div>
						</div>
						<div class="row uniform half">
							<div class="12u">
								<input type="password" name="password" id="pwd" value="" placeholder="Password" />
								<h5>  </h5>
							</div>
							</div>

						<div class="row uniform">
							<div class="12u">
								<ul class="actions align-center">
									
									<input type="submit" name = "submit" id="button" value="submit"/>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>
			
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
				<li><a href="https://github.com/TicketVault/TicketVault" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="https://www.cs.purdue.edu/homes/bxd/307/" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>

				</ul>
				<ul class="copyright">
					<li>&copy; CS307 Fall2014 Team8.</li>
				</ul>
			</footer>

	</body>
</html>
