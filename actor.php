<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	<title>Actors</title>
	<script>
		function showListAll(){
			var location = window.location.href,
				m_sub = "?aid=";
			
			if (location.indexOf(m_sub) > -1){
				document.getElementById('list_all').style.display="none";
				document.getElementById('specific_info').style.display="block";
			}
			else{
				document.getElementById('list_all').style.display="block";
				document.getElementById('specific_info').style.display="none";
			}
		}
	</script>
</head>
<body onload='showListAll()'>
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
		if (array_key_exists('aid', $_GET)){
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			
			$a_id = $_GET['aid'];
			
			$query = "SELECT * FROM \"CSI2132 Project\".Actor WHERE actor_id = $1";
			
			$stmt = pg_prepare($dbconn, "ps", $query);
			$result = pg_execute($dbconn, "ps", array($a_id));
			
			if (!$result)
			{
				die ("Something went wrong.");
			}
			while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
				echo "<h2>".$row['first_name']." ".$row['last_name']."</h2>";
			}
			pg_free_result($result);
			pg_close($dbconn);
		} else {
			echo "<h2>All Actors</h2>";
		}
	?>
	</div>
	<br>
	<div id='info_section'>
		<div id='list_all'>
		<?php
			if (!array_key_exists('aid', $_GET)){
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			$query = "SELECT * FROM \"CSI2132 Project\".Actor ORDER BY first_name";
			
			$stmt = pg_prepare($dbconn, "aquery", $query);
			$result = pg_execute($dbconn, "aquery", array());
			
			if (!$result){
				die("Something went wrong. ".pg_last_error());
			}
			
			while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
				printf("<p><a class='movielink' href=actor.php?aid=%s>%s %s</a></p>",$row["actor_id"],$row["first_name"],$row["last_name"]);
			}
			
			pg_free_result($result);
			pg_close($dbconn);
			}
		?>
		</div>
		<?php
			if (array_key_exists('aid', $_GET)) {
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			
				$a_id = $_GET['aid'];
				
				$dob = "SELECT date_of_birth FROM \"CSI2132 Project\".Actor WHERE actor_id = $1";
				$stmt = pg_prepare($dbconn, "dob", $dob);
				$dob = pg_execute($dbconn, "dob", array($a_id));
				
				$movies = "SELECT m.movie_id, m.name, r.name AS role
						  FROM \"CSI2132 Project\".Movie m, \"CSI2132 Project\".MovieRoles mr, \"CSI2132 Project\".Role r
						  WHERE r.actor_id = $1 AND mr.role_id = r.role_id AND mr.movie_id = m.movie_id";
				$stmt = pg_prepare($dbconn, "movies", $movies);
				$movies = pg_execute($dbconn, "movies", array($a_id));
				
				$dob_row = pg_fetch_array($dob, null, PGSQL_ASSOC);
				
				pg_close($dbconn);
			}
		?>
		<div id='specific_info'>
			<h4>Date of Birth: <?php printf("%s", $dob_row['date_of_birth']); ?></h4>
			<h4>Filmography</h4>
				<table style="width:50%"><?php
					while($movie_row = pg_fetch_array($movies, null, PGSQL_ASSOC)){
						printf("<tr><td><p><a class='movielink' href=movie.php?mid=%s>%s</a></p></td><td>%s</td></tr>", $movie_row['movie_id'], $movie_row['name'], $movie_row['role']);
					}
					pg_free_result($movies);
				?></table>
		</div>
	</div>
</body>

</html>