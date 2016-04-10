<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Search</title>
    </head>
	<body>
		<div id='headernav'>
			<a class='navlink' href='main.php'>Main</a>
			<a class='navlink' href='search.php'>Search</a>
			<a class='navlink' href='movie.php'>Movies</a>
			<a class='navlink' href='actor.php'>Actors</a>
			<?php
				session_start();
				if(array_key_exists('username', $_SESSION))
				{
					echo " <a class='navlink' href='profile.php'>Profile </a>";
					echo " <a class='navlink' href='logout.php'>Log out</a> ";
				} 
				else
				{
					echo " <a class='navlink' href='login.php'>Log in</a> ";
				}
			?>
		</div>
		<div id='body_title'>
		<h2> Search </h2>
		</div>
		<div id='info_section'>
		<form id='searchform' name='searchform' method='post' action=''>
			<p> 
				<span style='padding: 20px';>
				<label for='movie'>Movie:</label>
				<input name='movie' type='text' id='movie'/>
				<input type='submit' name='search' value='Search Movies' class='regbutton'/>
				</span>
				<span style='padding: 20px;'>
				<label for='actor'>Actor:</label>
				<input name='actor' type='text' id='actor'/>
				<input type='submit' name='search' value='Search Actors' class='regbutton'/>
				</span>
			</p>
		</form>
		<?php
			if (array_key_exists('search',$_POST) && $_POST['search'] == 'Search Movies' && array_key_exists('movie',$_POST))
			{
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				$movie = "%".$_POST['movie']."%";
				$query = 'SELECT * FROM "CSI2132 Project".Movie WHERE lower(name) LIKE lower($1)';
				
				$stmt = pg_prepare($dbconn, "mquery", $query);
				$result = pg_execute($dbconn, "mquery", array($movie));
				if (!$result){
					echo "<p>Sorry, there are no movies with that name.</p>";
					die(pg_last_error());
				}
				else{
					$row_count = pg_num_rows($result);
					if ($row_count == 1){
						$row = pg_fetch_array($result);
						$mid = $row[0];
						header("location: movie.php?mid=".$mid);
					}else{
						while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
							printf("<p><a class='movielink' href=movie.php?mid=%s>%s</a></p>",$row["movie_id"],$row["name"]);
						}
					}
				}
				pg_free_result($result);
				pg_close($dbconn);
			} 
			else if (array_key_exists('search',$_POST) && $_POST['search'] == 'Search Actors' && array_key_exists('actor',$_POST)){
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				$actor = "%".$_POST['actor']."%";
				$query = 'SELECT * FROM "CSI2132 Project".Actor WHERE lower(first_name) LIKE lower($1) OR lower(last_name) LIKE lower($1)';
				
				$stmt = pg_prepare($dbconn, "aquery", $query);
				$result = pg_execute($dbconn, "aquery", array($actor));
				if (!$result){
					echo "<p>Sorry, there are no actors with that name.</p>";
					die(pg_last_error());
				}
				else{
					$row_count = pg_num_rows($result);
					if ($row_count == 1){
						$row = pg_fetch_array($result);
						$aid = $row[0];
						header("location: actor.php?aid=".$aid);
					}else{
						while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
							printf("<p><a class='movielink' href=actor.php?aid=%s>%s %s</a></p>",$row["actor_id"],$row["first_name"],$row["last_name"]);
						}
					}
				}
				pg_free_result($result);
				pg_close($dbconn); 
			}
		?>
		</div>
	</body>
</html>