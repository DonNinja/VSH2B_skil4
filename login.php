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
		//Start the Session
		session_start();
		//3. If the form is submitted or not.
		//3.1 If the form is submitted
		if (isset($_POST['username']) AND isset($_POST['password'])){
		//3.1.1 Assigning posted values to variables.
		$username2 = $_POST['username'];
		$password2 = $_POST['password'];
		//3.1.2 Checking the values are existing in the database or not
		$query = "SELECT 'username', 'password' FROM user WHERE username = '$username2' AND password = '$password2'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if (mysqli_num_rows($result) == 1)
		{
			$_SESSION['username'] = $username2;
			$_SESSION['password'] = $password2;
			echo '<script language="javascript">';
			echo 'alert("Welcome, ' . $username2 . '")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
			$_SESSION['loggedin'] = true;
		}
		else
		{
			//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			echo '<script language="javascript">';
			echo 'alert("Incorrect username and/or password")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'sign_in.php';\",1500);</script>";
			$_SESSION['loggedin'] = false;
		}
	}
?>