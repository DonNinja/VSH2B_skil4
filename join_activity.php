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

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
		{
			$username2 = $_SESSION['username'];
			$password2 = $_SESSION['password'];
			$atburdur2 = $_POST['atburdur'];
			$thing1 = "SELECT id FROM user WHERE username = '$username2'";
			$result1 = $conn->query($thing1);
			if ($result1->num_rows > 0) {
			    // output data of each row
			    while($row = $result1->fetch_assoc()) {
					$thing1 = $username2;
				}
			}
			$thing2 = "SELECT ID FROM activity WHERE id = '$atburdur2'";
			$result2 = $conn->query($thing2);
			if ($result2->num_rows > 0) {
			    // output data of each row
			    while($row = $result2->fetch_assoc()) {
					$thing2 = $atburdur2;
				}
			}

			$query = "SELECT id_user, id_activity FROM skraning INNER JOIN user ON user.id = skraning.id_user INNER JOIN activity ON activity.ID = skraning.id_activity AND user.username = $username2 WHERE user.id = $thing1 AND activity.id = $thing2";
			$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if (mysqli_num_rows($result) >= 1) {
				echo '<script language="javascript">';
				echo 'alert("You have already been signed up for this activity")';
				echo '</script>';
				echo "<script>setTimeout(\"location.href = 'hlutir.php';\",1500);</script>";
			}
			else
			{
				$query2 = "INSERT INTO skraning(id_user, id_activity) VALUES ($thing1, $thing2)";
				$result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
				echo '<script language="javascript">';
				echo 'alert("You\'ve been signed up for this activity.")';
				echo '</script>';
				echo "<script>setTimeout(\"location.href = 'hlutir.php';\",1500);</script>";
			}
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("You need to be signed in first")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'sign_in.php';\",1500);</script>";
		}
?>