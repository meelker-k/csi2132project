<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	<title>Main Project Page</title>
	<script type="text/javascript">
		function showListAll(){
			var location = window.location.href,
				m_sub = "?tid=";
			
			if (location.indexOf(m_sub) > -1){
				document.getElementById('list_all').style.display="block";
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
		if (array_key_exists('tid', $_GET)){
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			
			$t_id = $_GET['tid'];
			
			$query = "SELECT * FROM \"CSI2132 Project\".Topics WHERE topic_id = $1";
			
			$stmt = pg_prepare($dbconn, "ps", $query);
			$result = pg_execute($dbconn, "ps", array($t_id));
			
			if (!$result)
			{
				die ("Something went wrong.");
			}
			$title = "";
			while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
				$title = $row['description'];
				echo "<h2>".$title."</h2>";
			}
			pg_free_result($result);
			pg_close($dbconn);
		}else{
			echo "<h2> Select a Topic </h2>";
		}
	?>
	</div>
	<div id='list_all'>
	<?php
		$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
		
		$query = "SELECT * FROM \"CSI2132 Project\".Topics";
		$stmt = pg_prepare($dbconn, "qtwo", $query);
		$result = pg_execute($dbconn, "qtwo", array());
		
		if(!$result){
			die(pg_last_error());
		}
	?>
	<div id='list_topics'>
		<?php
			while($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
				printf("<a href='topic.php?tid=%s'>%s</a>",$row["topic_id"],$row["description"]);
			}
			pg_free_result($result);
			pg_close($dbconn);
		?>
	</div>
	</div>
	<div id='specific_info'>
	<?php
		$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
		$t_id = $_GET['tid'];
		$query = "select m.name, m.movie_id, avg(w.rating) as rating from \"CSI2132 Project\".Movie m, \"CSI2132 Project\".Watches w, \"CSI2132 Project\".MovieTopics mt where m.movie_id = w.movie_id and m.movie_id = mt.movie_id and mt.topic_id = $1 group by m.name, m.movie_id order by rating desc";
		$stmt = pg_prepare($dbconn, "qthree", $query);
		$result = pg_execute($dbconn, "qthree", array($t_id));
		
		if(!$result){
			die(pg_last_error());
		}
	?>
	<div id='top_movies'>
		<h3> Highest Rated <?php echo $title; ?>s</h3>
			<ol>
			<?php
			while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
				printf("<li><a href='movie.php?mid=%s'>%s</a></li>",$row["movie_id"],$row["name"]);
			}
			pg_free_result($result);
			?>
			</ol>
		<h3> Most Popular <?php echo $title; ?>s</h3>
		<?php 
			$query = "select m.name, m.movie_id, count(w.rating) as count from \"CSI2132 Project\".Movie m, \"CSI2132 Project\".Watches w, \"CSI2132 Project\".MovieTopics mt where m.movie_id = w.movie_id and m.movie_id = mt.movie_id and mt.topic_id = $1 group by m.name, m.movie_id order by count desc";
		
			$stmt = pg_prepare($dbconn, "qfour", $query);
			$result = pg_execute($dbconn, "qfour", array($t_id));
		
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
		<h3> All <?php echo $title; ?>s</h3>
		<?php 
			$query = "select m.name, m.movie_id from \"CSI2132 Project\".Movie m,  \"CSI2132 Project\".MovieTopics mt where m.movie_id = mt.movie_id and mt.topic_id = $1 group by m.name, m.movie_id order by m.name";
		
			$stmt = pg_prepare($dbconn, "qfive", $query);
			$result = pg_execute($dbconn, "qfive", array($t_id));
		
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
	</div>
	</div>
</body>
</html>