<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>My Site</title>
	<?php include_once('connection.php') ?>
</head>
<body>
	<?php if (!empty($_POST)) {
		$q = mysql_query("SELECT * FROM `users` WHERE `user_name`='" . $_POST['username'] . "' AND `password`='" . $_POST['password'] . "';");
		$username = $_POST['username'];
		if(mysql_num_rows($q) > 0){
			die('welcome ' . $username . ' please ' . '<a href="home.php">continue</a>');
		} else {
			echo "You don't have an account.";
		}
	} ?>
	<div id="login">
	  <form action="" method="POST">
	    <h1>Sign In</h1>
	    <input type="text" name="username" placeholder="Username">
	    <input type="password" name="password" placeholder="Password">
	    <button>Sign in</button>
	  </form>
	<div id="signUp">
		<p>
			If you dont have an account, please <br /> <a href="signup.php">Sign Up.</a>
		</p>
	</div>
	</div>
</body>
</html>

