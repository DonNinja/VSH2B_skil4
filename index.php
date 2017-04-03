<?php
		$servername = "tsuts.tskoli.is";
		$username = "2605993489";
		$password = "mypassword";
		$dbname = "2605993489_gamescom";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Það tókst ekki að connect-a við database-ið: " . $conn->connect_error);
		}
		session_start();
		?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="icon" href="http://www.gamescom-cologne.com/redaktionell/gamescom_1/img_32/layout_25/gamescom_favicon_32x32.jpg">
	<title>Skilaverkefni 4</title>
</head>
	<body>
	
	<div class="contallt">
		<h1 class="tit">gamescom-cologne 2017</h1>
	<div class="flexid">
		<div class="cont">
			<div class="cont3text">
				<span class="tital"><a href="https://en.wikipedia.org/wiki/Gamescom" target="blank">So what is gamescom?</a></span>
				<p>Gamescom is the world's largest gaming event, (measured by exhibition space and number of visitors) with 345,000 visitors, more than 6,000 journalists and 700 exhibitors from 88 countries attending the show in its sixth year.</p>
			</div>
			<div class="cont3text">
				<span class="tital"><a href="https://en.wikipedia.org/wiki/Gamescom" target="blank">When is it?</a></span>
				<p>Currently gamescom is set to take place from the 23rd until the 28th of August 2017</p>
			</div>
			<div class="cont3text">
				 <span class="tital">On the current line-up we have</span>
				 <ul>
				 	<li>Booths to try a few upcoming games.</li>
				 	<li>Booths to try a few hardware items(For example: VR and the next upcoming consoles)</li>
				 </ul>
			</div>
		</div>
			<div class="hlutir">
				<input type="checkbox" id="toggle">
				<label for="toggle" class="lable">&#9776;</label>
				<nav class="cont3">
					<div class="navv">
						<a href="index.php"><nav class="navi">Home</nav></a>
						<a href="sign_in.php"><nav class="navi">Sign in</nav></a>
						<a href="hlutir.php"><nav class="navi">Activities</nav></a>
						<a href="sign_up.php"><nav class="navi">Sign up</nav></a>
						<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo '<a href="log_out.php"><nav class="navi navi-4 navi-y">Sign out</nav></a>';} ?>
					</div>
				</nav>
			</div>
	</div>
		<div class="locat cont3text">
			<b>Location of the event, click on it to open Google maps for better information of the area.</b>
			<div class="mapp">				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.767957168168!2d6.981784689724872!3d50.946504228790914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bf25c3f081102f%3A0x734f38e5e1f044bb!2sKoelnmesse+GmbH!5e0!3m2!1sen!2sis!4v1490979568635"  frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</body>
</html>