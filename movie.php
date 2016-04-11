<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style.css'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>Movies</title>
	<script type="text/javascript">
		function show(){
			document.getElementById('newcomment').style.visibility="visible";
		}		
	</script>
	<script type="text/javascript">
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
			<div id='specific_info'>
				<h4>Details</h4>
				<p>Rating: <?php if (array_key_exists('username',$_SESSION)){echo "<a href='rate.php?mid=".$_GET['mid']."'>Rate</a>";}?></p>
				<p>Release Date: </p>
				<p>Director: <?php if(array_key_exists('mid', $_GET)){printf("<a href='director.php?mid=%s'>Add/Remove Directors</a>",$_GET['mid']);}?></p>
				<p>Studio:</p>
				<p>Tags:<ul><li>tag1</li><li>tag2</li><li>tag3</li><li><?php if(array_key_exists('mid', $_GET)){printf("<a href='tags.php?mid=%s'>Add/Remove Tags</a>",$_GET['mid']);}?></li></ul></p>
				<h4>Cast</h4>
					<ul>
						<li>Cast1</li>
						<li>cast2</li>
						<li>cast3</li>
						<li>cast4</li>
						<li>cast5</li>
					</ul>
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
		<?php if (array_key_exists('username',$_SESSION)){echo "<button type='button' style='float:right' onclick='show()'>Reply</button>";}?>
		<form id='newcomment' name='newcomment' method='post' action='' style='visibility:hidden'>
			<textarea type='text' name='comment_txt' id='comment_txt' rows='5' style='float:left; width:60%;'></textarea>
			<p><input type='submit' name='submit' id='submit' value='Submit' style='float:left' class='regbutton'></p>
		</form>
		<?php
				if (array_key_exists('comment_txt', $_POST) && array_key_exists('username', $_SESSION) && array_key_exists('mid', $_GET)){
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