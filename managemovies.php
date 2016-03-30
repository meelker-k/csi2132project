<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Main Project Page</title>
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
				}
			?>
		</div>
		<h3>Movie Info</h3>
		<?php
			if (array_key_exists('movie', $_GET))
			{
				//load movie information for editting
				$name = $_GET['movie'];
				
				$conn_string = "host=web0.site.uottawa.ca port=15432 dbname=".$_SESSION['dbusername']." user=".$_SESSION['dbusername']." password=".$_SESSION['dbpassword'];
				
				$dbconn = pg_connect($conn_string) or die('Connection Failed');
				
				$query = "SELECT name, date_released FROM project.Movie WHERE lower(name) = lower($1)";
				
				$stmt = pg_prepare($dbconn, "ps", $query);
				$result = pg_execute($dbconn, "ps", array($name));
				
				$row_count = pg_num_rows($result);
				if ($row_count > 1) 
				{
					//show list of movies
				}
				else if ($row_count == 1)
				{
					//fill in details of movie
					$row = pg_fetch_array($result);
					echo "<p>
					<table>
						<tr>
							<th> Name </th>
							<th> Release Date </th>
						</tr>
						<tr>
							<td>".$row[0]."</td>
							<td>".$row[1]."</td>
						</tr>
					</table></p>";
				}
				pg_free_result($result);
				pg_close($dbconn);
			}
		?>
	</body>
</html>