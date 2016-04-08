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
			<?php
				session_start();
				if(array_key_exists('username', $_SESSION))
				{
					echo " <a class='navlink' href='logout.php'>Log out</a> ";
				} 
				else
				{
					echo " <a class='navlink' href='login.php'>Log in</a> ";
					echo " <a class='navlink' href='register.php'>Register</a> ";
				}
			?>
		</div>
		<div id='body_title'>
		<h2> Goodbye </h2>
		</div>
		<?php
			//session_start(); 
			if (array_key_exists('username', $_SESSION))
			{
				unset($_SESSION['username']);
			}
		?>
	</body>
</html>