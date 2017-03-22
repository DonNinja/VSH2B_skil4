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
		if (isset($_POST['username']) and isset($_POST['password'])){
		//3.1.1 Assigning posted values to variables.
		$username = $_POST['username'];
		$password = $_POST['password'];
		//3.1.2 Checking the values are existing in the database or not
		$query = "SELECT * FROM 'user' WHERE username='$username' and password='$password'";
		
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1){
			$_SESSION['username'] = $username;
			echo '<script language="javascript">';
			echo 'alert("Welcome, $username")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>";
		}
		else{
			//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			echo '<script language="javascript">';
			echo 'alert("Incorrect username/password")';
			echo '</script>';
			echo "<script>setTimeout(\"location.href = 'sign_in.php';\",1500);</script>";
		}
	}
?>