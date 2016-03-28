<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Main Project Page</title>
    </head>
	<body>
		<div id='headernav'>
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
		<?php
			//session_start();
			if(array_key_exists('username', $_SESSION))
			{
				$user = $_SESSION['username'];
				echo "<h3> Welcome ".$user."!</h3>";
			}
			else
			{
				echo "<h3> Welcome Guest!</h3>";
			}
		?>
	</body>
</html>