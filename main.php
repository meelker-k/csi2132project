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
			<a class='navlink' href='search.php'>Search</a>
			<a class='navlink' href='movie.php'>Movies</a>
			<a class='navlink' href='actor.php'>Actors</a>
			<a class='navlink' href='topic.php'>Topics</a>
			<?php
				session_start();
				if(array_key_exists('username', $_SESSION))
				{
					echo " <a class='navlink' href='profile.php'>Profile</a>";
					echo " <a class='navlink' href='logout.php'>Log out</a> ";
				} 
				else
				{
					echo " <a class='navlink' href='login.php'>Log in</a> ";
				}
			?>
		</div>
		<div id='body_title'>
		<?php
			if (!array_key_exists('connstring',$_SESSION)){
				$_SESSION['connstring'] = "host=localhost port=5432 dbname=postgres user=postgres password=kyle1988";
			}
			
			if(array_key_exists('username', $_SESSION))
			{
				$user = $_SESSION['username'];
				echo "<h2> Welcome ".$user."!</h2>";
			}
			else
			{
				echo "<h2> Welcome Guest!</h2>";
			}
		?>
		</div>
		<div id='info_section'>
			<?php 
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				
				$query = "select m.name, m.movie_id, avg(w.rating) as rating from \"CSI2132 Project\".Movie m, \"CSI2132 Project\".Watches w where m.movie_id = w.movie_id group by m.name, m.movie_id order by rating desc limit 10";
				
				$stmt = pg_prepare($dbconn, "ps", $query);
				$result = pg_execute($dbconn, "ps", array());
				
				if(!$result){
					die(pg_last_error());
				}
			?>
			<div id='top_movies'>
				<h3> Top 10 Highest Rated Movies </h3>
					<ol>
					<?php
					while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
						printf("<li><a href='movie.php?mid=%s'>%s</a></li>",$row["movie_id"],$row["name"]);
					}
					pg_free_result($result);
					?>
					</ol>
				<h3> Top 10 Most Popular Movies </h3>
				<?php 
					$query = "select m.name, m.movie_id, count(w.rating) as rating from \"CSI2132 Project\".Movie m, \"CSI2132 Project\".Watches w where m.movie_id = w.movie_id group by m.name, m.movie_id order by rating desc limit 10";
				
					$stmt = pg_prepare($dbconn, "qtwo", $query);
					$result = pg_execute($dbconn, "qtwo", array());
				
					if(!$result){
						die(pg_last_error());
					}				
				?>
				<ol>
					<?php
					while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
						printf("<li><a href='movie.php?mid=%s'>%s</a></li>",$row["movie_id"],$row["name"]);
					}
					pg_free_result($result);
					?>
				</ol>
				<h3> Top 10 Most Popular Categories </h3>
				<?php 
					$query = "select t.description, t.topic_id, count(mt.movie_id) as count from \"CSI2132 Project\".Topics t, \"CSI2132 Project\".MovieTopics mt where t.topic_id = mt.topic_id group by t.description, t.topic_id order by count desc, t.description limit 10";
				
					$stmt = pg_prepare($dbconn, "qthree", $query);
					$result = pg_execute($dbconn, "qthree", array());
				
					if(!$result){
						die(pg_last_error());
					}				
				?>
				<ol>
					<?php
					while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
						printf("<li><a href='topic.php?tid=%s'>%s</a></li>",$row["topic_id"],$row["description"]);
					}
					pg_free_result($result);
					?>
				</ol>
			</div>			
		</div>
	</body>
</html>