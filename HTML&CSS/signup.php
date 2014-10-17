<!DOCTYPE HTML>
<!--
	Author:Chengkang Xu
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
				if (frm.email.value == "") {alert('Email is required.');frm.email.focus();return false;}
				if (frm.password.value == "") {alert('Password is required.');frm.password.focus();return false;}
				if (frm.password_validate.value != frm.password.value) {alert('Password does not match.');frm.password_validate.focus();return false;}
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
				<h1><a href="index.html">TicketVault</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="eventmanage.php" >Manage Event</a></li>
						<li><a href="UpcomingEvent.php" >Upcoming Event</a></li>
						<li><a href="signup.php" class="button">Sign Up</a></li>
						<li><a href="login.php" class="button">Login</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="container small">
				<header>
					<h2>Sign up</h2>
					
				</header>
				<div class="box">
					<form method="post" action="signup-validate.php" onsubmit="return ValidateForm(this);">
						<div class="row uniform half">
							<div class="12u">
								<input type="text" name="username" id="username" value="" placeholder="User Name" />
							</div>
						</div>
						<div class="row uniform half">
							<div class="12u">
								<input type="text" name="email" id="email" value="" placeholder="Email" />
								<h5>  </h5>
							</div>
						</div>
						<div class="row uniform half ">
							<div class="12u">
								<input type="password" name="password" id="password" value="" placeholder="Password",class="formBorder"/>
								<h5>  </h5>
							</div>
						</div>
						<div class="row uniform half ">
							<div class="12u">
								<input type="password" name="password_validate" id="password_validate" value="" placeholder="Enter password again", class="formBorder"/>
								
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
					<h6 class = "actions align-center"> Tips: please enter only alphabetic and numeric letters for username and password. </h6>
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
