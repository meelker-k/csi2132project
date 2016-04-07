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
		<h3>Search</h3>
		<form id='searchmovieform' name='searchmovieform' method='post' action=''>
			<p>
				<label for='movie'>Movie name:</label>
				<input name='movie' type='text' id='movie'/>
				<input type='submit' name='search' value='Search'/>
			</p>
		</form>
		<?php
			if (array_key_exists('movie',$_POST))
			{
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				$movie = "%".$_POST['movie']."%";
				$query = 'SELECT * FROM "CSI2132 Project".Movie WHERE lower(name) LIKE lower($1)';
				
				$stmt = pg_prepare($dbconn, "sp", $query);
				$result = pg_execute($dbconn, "sp", array($movie));
				if (!$result){
					echo "<p>Sorry, there are no movies with that name.</p>";
					die(pg_last_error());
				}
				else{
					$row_count = pg_num_rows($result);
					if ($row_count == 1){
						$row = pg_fetch_array($result);
						$mid = $row[0];
						header("location: main.php?mid=".$mid);
					}else{
						while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
							printf("<p><a href=main.php?mid=%s>%s</a></p>",$row["movie_id"],$row["name"]);
						}
					}
				}
				pg_free_result($result);
				pg_close($dbconn);
				//echo "<p><a href='managemovies.php?mid=".$_POST['movieid']."'>".$_POST['movieid']."</a></p>";
			}
		?>
	</body>
</html>