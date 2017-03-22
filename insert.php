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

		$nofn = $_REQUEST['username'];
		$pass = $_REQUEST['password'];

		$sql = "INSERT INTO user (active, username, password) VALUES (0, '$nofn', '$pass');";
		$conn -> query($sql);

		sleep(1);
		header("Location: index.php");
		exit();
		?>