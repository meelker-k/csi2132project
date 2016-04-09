<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Log out</title>
    </head>
	<body>
		<div id='headernav'>
			<a class='navlink' href='main.php'>Main</a>
			<a class='navlink' href='login.php'>Login</a>
		</div>
		<div id='body_title'>
		<h2> Goodbye </h2>
		</div>
		<div id='info_section'>
		<?php
			session_start(); 
			if (array_key_exists('username', $_SESSION))
			{
				unset($_SESSION['username']);
				header("Refresh:3; url=main.php");
			}
		?>
		</div>
	</body>
</html>