<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Login</title>
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
					echo " <a class='navlink' href='register.php'>Register</a> ";
				}
			?>
		</div>
		<h3> Login </h3>
		<br><br>		
		<form id='loginform' name='loginform' method='post' action=''>
			<p>	
				<label for='name'>Username:</label>
				<input name='iusername' type='text' id='iusername'/>
			</p>
			<p>	
				<label for='password'>Password:</label>
				<input name='ipassword' type='password' id='ipassword'/>
			</p>
			<p>
				<input type='submit' name='submit' value='Submit'/>
			</p>
		</form>
		<?php
			//session_start();
			if (array_key_exists('iusername', $_POST) && array_key_exists('ipassword', $_POST))
			{
				$id = $_POST['iusername'];
				$password = base64_encode($_POST['ipassword']);
				
				$conn_string = "host=web0.site.uottawa.ca port=15432 dbname=".$_SESSION['dbusername']." user=".$_SESSION['dbusername']." password=".$_SESSION['dbpassword'];
				
				$dbconn = pg_connect($conn_string) or die('Connection Failed');
				
				$query = "SELECT * FROM project.Account WHERE user_id = $1 AND password = $2";
				
				$stmt = pg_prepare($dbconn, "ps", $query);
				$result = pg_execute($dbconn, "ps", array($id, $password));
				
				$row_count = pg_num_rows($result);
				if ($row_count > 0)
				{
					$_SESSION['username'] = $id;
					header("location: main.php");
					exit;
				}
				echo "Data entered successfully". "<a href='main.php'>login now</a>";
				
				pg_free_result($result);
				pg_close($dbconn);
			}
		?>
		
	</body>
</html>