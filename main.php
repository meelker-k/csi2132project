<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Main Project Page</title>
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
			}
			else{
				document.getElementById('comment_section').style.display="none";
			}
			
		}
		</script>
    </head>
	<body onload='showComments()'>
		<div id='headernav'>
			<a class='navlink' href='main.php'>Main</a>
			<a class='navlink' href='searchmovies.php'>Search Movies</a>
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
					echo " <a class='navlink' href='register.php'>Register</a> ";
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
					echo "<h3>".$row['name']."</h3>";
				}
				pg_free_result($result);
				pg_close($dbconn);
			}
		?>
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
			<p><input type='submit' name='submit' id='submit' value='Submit' style='float:left'></p>
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
						header("location: main.php?mid=".$m_id);	
					}					
					
					pg_free_result($result);
					pg_close($dbconn);
				}
		?>
		</div>
	</body>
</html>