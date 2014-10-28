<?php
	session_start();
	
	function index_banner(){
		echo "<body class=".'"'."landing".'"'.">";
		echo "<header id=".'"'."header".'"'." class=".'"'."alt".'"'.">";
		echo "<h1><a href=".'"'."http://ticketvault.cu.cc".'"'.">TicketVault</a></h1>";
			if(isset($_SESSION['loginuser'])){
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."eventmanage.php".'"'." >Manage Event</a></li>";	
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."profile.php".'"'." >Profile</a></li>";
				echo "<li><a href=".'"'."php/Logout.php".'"'." class=".'"'."button".'"'.">logout</a></li>";
				echo "</ul>";
				echo "</nav>";
			}else{
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."eventmanage.php".'"'." >Manage Event</a></li>";
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."signup.php".'"'." class=".'"'."button".'"'.">Sign Up</a></li>";
				echo "<li><a href=".'"'."login.php".'"'." class=".'"'."button".'"'.">login</a></li>";
				echo "</ul>";
				echo "</nav>";
			}
			echo "</header>";
	}
	
	
	function sub_banner(){
			echo "<header id=".'"'."header".'"'.">";
			echo "<h1><a href=".'"'."http://ticketvault.cu.cc".'"'.">TicketVault</a></h1>";
			if(isset($_SESSION['loginuser'])){
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."eventmanage.php".'"'." >Manage Event</a></li>";
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'." >Upcoming Event</a></li>";
				echo "<li><a href=".'"'."profile.php".'"'." >Profile</a></li>";
				echo "<li><a href=".'"'."php/Logout.php".'"'." class=".'"'."button".'"'.">logout</a></li>";
				echo "</ul>";
				echo "</nav>";

			}else{
				echo "<nav id=".'"'."nav".'"'.">";
				echo "<ul>";
				echo "<li><a href=".'"'."http://ticketvault.cu.cc".'"'." >Home</a></li>";
				echo "<li><a href=".'"'."eventmanage.php".'"'." >Manage Event</a></li>";
				echo "<li><a href=".'"'."UpcomingEvent.php".'"'.">Upcoming Event</a></li>";
				echo "<li><a href=".'"'."signup.php".'"'." class=".'"'."button".'"'.">Sign Up</a></li>";
				echo "<li><a href=".'"'."login.php".'"'." class=".'"'."button".'"'.">login</a></li>";
				echo "</ul>";
				echo "</nav>";
			}
			echo "</header>";
	}
	
	function footer(){
			echo "<footer id=".'"'."footer".'"'.">";
			echo "<ul class=".'"'."icons".'"'.">";
			echo "<li><a href=".'"'."https://github.com/TicketVault/TicketVault".'"'." class=".'"'."icon fa-github".'"'."><span class=".'"'."label".'"'.">Github</span></a></li>";
			echo "<li><a href=".'"'."https://www.cs.purdue.edu/homes/bxd/307/".'"'." class=".'"'."icon fa-dribbble".'"'."><span class=".'"'."label".'"'.">Dribbble</span></a></li>";
			echo "</ul>";
			echo "<ul class=".'"'."copyright".'"'.">";
			echo "<li>&copy; CS307 Fall2014 Team8</li>";
			echo "</ul>";
			echo "</footer>";
	}
	
	function database_connect(){
		$dbhandle = mysqli_connect("mysql.hostinger.co.uk","u907917272_cs307","CS307TEAM8","u907917272_table");
		if (mysqli_connect_errno())
		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		return $dbhandle; 
	}
	
	
?>