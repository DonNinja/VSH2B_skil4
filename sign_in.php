<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="icon" href="http://www.gamescom-cologne.com/redaktionell/gamescom_1/img_32/layout_25/gamescom_favicon_32x32.jpg">
	<title>Login</title>
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
				</div>
			</nav>
	<form method="post" action="">
		<p><h1>Sign in here</h1></p>
	    <p>
	        <label for="username">Username:</label>
	        <input type="text" name="username" id="username" required>
	        </p>
	    <p>
	        <label for="password">Password:</label>
	        <input type="password" name="password" id="password" required>
	    </p>
	    <p>
	        <input name="login" type="submit" value="Log in">
	    </p>
	</form>
</body>
</html>