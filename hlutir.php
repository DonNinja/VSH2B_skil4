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
	<title>Activities</title>
</head>
<body>
		<input type="checkbox" id="toggle">
			<label for="toggle" class="lable">&#9776;</label>
			<nav class="cont3">
				<div class="navv">
					<a href="index.php"><nav class="navi navi-1 navi-y">Home</nav></a>
					<a href="sign_in.php"><nav class="navi navi-2 navi-y">Sign in</nav></a>
					<a href="hlutir.php"><nav class="navi navi-2 navi-y">Activities</nav></a>
					<a href="sign_up.php"><nav class="navi navi-4 navi-y">Sign up</nav></a>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {echo '<a href="log_out.php"><nav class="navi navi-4 navi-y">Sign out</nav></a>';} ?>
				</div>
			</nav>

		<div class="cont">
			<form method="post" action="join_activity.php">
			    <p>
				    Check out Blizzard's new and upcoming games.
			        <button name="atburdur" id="atburdur-1" type="submit" value="1">Sign up</button>
			    </p>
			    <p>
			    	Check out Bethesda's new and upcoming games.
			        <button name="atburdur" id="atburdur-2" type="submit" value="2">Sign up</button>
			    </p>
			    <p>
			    	Get food (Payment is 25$)
			        <button name="atburdur" id="atburdur-3" type="submit" value="3">Sign up</button>
			    </p>
			</form>
		</div>
</body>
</html>