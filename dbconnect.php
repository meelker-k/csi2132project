<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
		<title>CSI 2132 Project</title>
	</head>
	<body>
		<form id="dbloginform" name="dbloginform" method="post" action="">
			<p>	
				<label for="name">Username:</label>
				<input name="idbusername" type="text" id="idbusername"/>
			</p>
			<p>	
				<label for="password">Password:</label>
				<input name="idbpassword" type="password" id="idbpassword"/>
			</p>
			<p>
				<input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<?php
			if (array_key_exists('idbusername', $_POST) && array_key_exists('idbpassword', $_POST))
			{
				$id = $_POST['idbusername'];
				$password = $_POST['idbpassword'];
				
				//$conn_string = "host=web0.site.uottawa.ca port=15432 dbname=".$id." user=".$id." password=".$password; //schools database
				$conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=kyle1988";//local database
				
				$dbconn = pg_connect($conn_string) or die('Connection Failed');
				echo "Connection Successful!";
				
				session_start();
				$_SESSION['connstring'] = $conn_string;
				
				pg_close($dbconn);
				
				header("location: main.php");
			}
		?>
	</body>
</html>