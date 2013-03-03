<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>My Site</title>
	<?php include_once('connection.php') ?>
</head>
<body>
	<div id="login">
		<form action="" method="POST">
			<h1>Hello, and welcome!</h1>
			<input type="text" name="user" placeholder="Your Username" required="required"><br>
			<input type="password" name="pass" placeholder="Your Password" required="required"><br>
			<input type="email" placeholder="Your Email" name="email"><br>
			<input type="text" name="question" placeholder="Security Question" required="required"><br>
			<input type="text" name="answer" placeholder="Your Answer" required="required"><br>
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<?php 
	if (!empty($_POST)) {
		$q = mysql_query("INSERT INTO `users` (`user_name`, `password`, `useremail`, `question`, `answer`) VALUES ('" . $_POST['user'] . "', '" . $_POST['pass'] ."', '" . $_POST['email'] . "', '" . $_POST['question'] ."', '" . $_POST['answer'] ."');"); 
		if ( !mysql_error() ) {
			echo "Welcome " . $_POST['user'] . " please " . "<a href='home.php'>continue</a>";
		}else {
			echo("There has been an error: " . mysql_error());
		}
	}
	?>
</body>
</html>