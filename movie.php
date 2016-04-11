<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style.css'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>Movies</title>
	<script>
		function show(){
			document.getElementById('newcomment').style.visibility="visible";
		}		
	</script>
	<script>
		function showComments(){
			var location = window.location.href,
				m_sub = "?mid=";
			
			if (location.indexOf(m_sub) > -1){
				document.getElementById('comment_section').style.display="block";
				document.getElementById('list_all').style.display="none";
				document.getElementById('specific_info').style.display="block";
			}
			else{
				document.getElementById('comment_section').style.display="none";
				document.getElementById('list_all').style.display="block";
				document.getElementById('specific_info').style.display="none";
			}
			
		}
	</script>
</head>
<body onload='showComments()'>
		<div id='headernav'>
			<a class='navlink' href='main.php'>Main</a>
			<a class='navlink' href='search.php'>Search</a>
			<a class='navlink' href='movie.php'>Movies</a>
			<a class='navlink' href='actor.php'>Actors</a>
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
			if (array_key_exists('mid', $_GET)){
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				
				$m_id = $_GET['mid'];
				
				$query = "SELECT * FROM \"CSI2132 Project\".Movie WHERE movie_id = $1";
				
				$stmt = pg_prepare($dbconn, "ps", $query);
				$result = pg_execute($dbconn, "ps", array($m_id));
				
				if (!$result)
				{
					die ("Something went wrong.");
				}
				while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
					echo "<h2>".$row['name']."</h2>";
				}
				pg_free_result($result);
				pg_close($dbconn);
			}else{
				echo "<h2> All Movies </h2>";
			}
		?>
		</div>
		<br>
		<div id='info_section'>
			<div id='list_all'>
			<?php
				if (!array_key_exists('mid', $_GET)){
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				$query = "SELECT * FROM \"CSI2132 Project\".Movie ORDER BY name";
				
				$stmt = pg_prepare($dbconn, "mquery", $query);
				$result = pg_execute($dbconn, "mquery", array());
				
				if (!$result){
					die("Something went wrong. ".pg_last_error());
				}
				
				while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
					printf("<p><a class='movielink' href=movie.php?mid=%s>%s</a></p>",$row["movie_id"],$row["name"]);
				}
				
				pg_free_result($result);
				pg_close($dbconn);
			}
			?>
			</div>
			<?php
				if (array_key_exists('mid', $_GET)) {
					$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
					
					$m_id = $_GET['mid'];
					
					$rating = "SELECT AVG(w.rating) AS rating FROM \"CSI2132 Project\".Watches w WHERE w.movie_id = $1";		  
					$stmt = pg_prepare($dbconn, "details", $rating);
					$result = pg_execute($dbconn, "details", array($m_id));
					
					$release = "SELECT m.date_released FROM \"CSI2132 Project\".Movie m WHERE m.movie_id = $1";
					$stmt = pg_prepare($dbconn, "release", $release);
					$release = pg_execute($dbconn, "release", array($m_id));
					
					$directors = "SELECT d.first_name, d.last_name
								  FROM \"CSI2132 Project\".Director d, \"CSI2132 Project\".Directs ds
								  WHERE ds.movie_id = $1 AND ds.director_id = d.director_id";
					$stmt = pg_prepare($dbconn, "director", $directors);
					$directors = pg_execute($dbconn, "director", array($m_id));
					
					$studio = "SELECT s.name FROM \"CSI2132 Project\".Studio s,\"CSI2132 Project\".Sponsors sp WHERE sp.movie_id = $1 AND sp.studio_id = s.studio_id";
					$stmt = pg_prepare($dbconn, "studio", $studio);
					$studio = pg_execute($dbconn, "studio", array($m_id));
					
					$tags = "SELECT t.description FROM \"CSI2132 Project\".Topics t,\"CSI2132 Project\".MovieTopics mt WHERE mt.movie_id = $1 AND mt.topic_id = t.topic_id";
					$stmt = pg_prepare($dbconn, "tags", $tags);
					$tags = pg_execute($dbconn, "tags", array($m_id));
					
					$cast = "SELECT a.first_name, a.last_name
							 FROM \"CSI2132 Project\".Actor a,\"CSI2132 Project\".Role r,\"CSI2132 Project\".MovieRoles mr
							 WHERE mr.movie_id = $1 AND mr.role_id = r.role_id AND r.actor_id = a.actor_id";
					$stmt = pg_prepare($dbconn, "cast", $cast);
					$cast = pg_execute($dbconn, "cast", array($m_id));
					
					if (!$result) {
						die ("Something went wrong.".pg_last_error());
					}
					if (!$release) {
						die ("Something went wrong.".pg_last_error());
					}
					if (!$directors) {
						die ("Something went wrong.".pg_last_error());
					}
					if (!$studio) {
						die ("Something went wrong.".pg_last_error());
					}
					if (!$tags) {
						die ("Something went wrong.".pg_last_error());
					}
					if (!$cast) {
						die ("Something went wrong.".pg_last_error());
					}
					
					$rate_row = pg_fetch_array($result, null, PGSQL_ASSOC);
					$rel_row = pg_fetch_array($release, null, PGSQL_ASSOC);
					
					pg_free_result($result);
					pg_free_result($release);
					pg_close($dbconn);
				}
			?>
			<div id='specific_info'>
				<h4>Details</h4>
				<p>Rating: <?php printf("%s",round($rate_row['rating'], 1)); ?></p>
				<p>Release Date: <?php printf("%s",$rel_row['date_released']); ?></p>
				<p>Director: <ul><?php while ($dir_row = pg_fetch_array($directors, null, PGSQL_ASSOC)){ printf("<li>%s %s</li>",$dir_row["first_name"],$dir_row["last_name"]); }
									   pg_free_result($directors);
									   printf("<li><a href='director.php?mid=%s'>Add/Remove Directors</a></li>",$_GET['mid'])?></ul></p>
				<p>Studio: <ul><?php while ($studio_row = pg_fetch_array($studio, null, PGSQL_ASSOC)){ printf("<li>%s</li>",$studio_row['name']); }
									 pg_free_result($studio);?></ul></p>
				<p>Tags:<ul><?php while ($tag_row = pg_fetch_array($tags, null, PGSQL_ASSOC)) { printf("<li>%s</li>",$tag_row['description']); }
								  pg_free_result($tags);
								  printf("<li><a href='tags.php?mid=%s'>Add/Remove Tags</a></li>",$_GET['mid'])?></ul></p>
				<h4>Cast</h4>
					<ul><?php while ($cast_row = pg_fetch_array($cast, null, PGSQL_ASSOC)){ printf("<p><li>%s %s</li></p>",$cast_row['first_name'],$cast_row['last_name']); }
							  pg_free_result($cast); ?></ul>
			</div>
		</div>
		<br><br>
		<div id='comment_section'>
		<h3>Comments</h3>
		<?php
			if (array_key_exists('mid', $_GET)){
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				
				$m_id = $_GET['mid'];
				
				$query = "SELECT * FROM \"CSI2132 Project\".Comments WHERE movie_id = $1 ORDER BY time";
				
				$stmt = pg_prepare($dbconn, "qtwo", $query);
				$result = pg_execute($dbconn, "qtwo", array($m_id));
				
				if (!$result)
				{
					die ("Something went wrong.");
				}
				while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
					echo "<p class='user_comment'>";
					printf("<em>%s</em>	 (%s):<br>",$row["user_id"],$row["time"]);
					printf("%s",$row["comment"]);
					echo "</p>";
				}
				pg_free_result($result);
				pg_close($dbconn);
			}
		?>
		<button type='button' style='float:right' onclick='show()'>Reply</button>
		<form id='newcomment' name='newcomment' method='post' action='' style='visibility:hidden'>
			<textarea type='text' name='comment_txt' id='comment_txt' rows='5' style='float:left; width:60%;'></textarea>
			<p><input type='submit' name='submit' id='submit' value='Submit' style='float:left' class='regbutton'></p>
		</form>
		<?php
				if (array_key_exists('comment_txt', $_POST) && array_key_exists('username', $_SESSION)){
					$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				
					$m_id = $_GET['mid'];
					$u_id = $_SESSION['username'];
					$comments = $_POST['comment_txt'];
					$time = date('m/d/Y h:i:s a', time());
					echo "<p>".$time."</p>";
					$query = "INSERT INTO \"CSI2132 Project\".Comments(user_id, movie_id, comment, time) VALUES ($1, $2, $3, $4)";
					
					$stmt = pg_prepare($dbconn, "qt", $query);
					$result = pg_execute($dbconn, "qt", array($u_id, $m_id, $comments, $time));
					
					if (!$result){
						die("Save failed!".pg_last_error());
					}else{
						header("location: movie.php?mid=".$m_id);	
					}					
					
					pg_free_result($result);
					pg_close($dbconn);
				}
		?>
		</div>
	</body>

</html>