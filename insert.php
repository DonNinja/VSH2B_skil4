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
		$query = "SELECT 'username' FROM user WHERE username = '$nofn' AND password = '$pass'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		if (mysqli_num_rows($result) == 1)
		{
			echo '<script language="javascript">';
			echo 'alert("This username is already taken")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'sign_up.php';\",1500);</script>";
		}

		else {
			$sql = "INSERT INTO user (username, password) VALUES ('$nofn', '$pass');";
			$conn -> query($sql);
			echo '<script language="javascript">';
			echo 'alert("You have been signed up")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
		}
		?>