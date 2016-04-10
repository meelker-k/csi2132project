<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	<title>Tags</title>
	<script>
		function goBack(){
			window.history.back();
		}
	</script>
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
		}
	?>
	</div>
	<div id='info_section'>
		<?php
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');			
			$m_id = $_GET['mid'];
			
			$query = "SELECT t.description FROM \"CSI2132 Project\".MovieTopics mt,\"CSI2132 Project\".Topics t WHERE mt.movie_id = $1 AND t.topic_id = mt.topic_id ORDER BY t.description";
			
			$stmt = pg_prepare($dbconn, "ps", $query);
			$result = pg_execute($dbconn, "ps", array($m_id));
			
			$topics = "SELECT * FROM \"CSI2132 Project\".Topics";
			
			$stmt = pg_prepare($dbconn, "qtwo", $topics);
			$topics = pg_execute($dbconn, "qtwo", array());
			
			if (!$result)
			{
				die ("Something went wrong. ".pg_last_error());
			}
		?>
		<form name='tagform' method='post' action=''>
			<?php 
				while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
					printf("%s: <input type='checkbox' name='%s'/><br>",$row["description"],$row["description"]);
				}
			?>
			<p>New Tag: <select name='tagtext'/>
						<option></option>
						<?php while ($rowtopic = pg_fetch_array($topics, null, PGSQL_ASSOC)){ printf("<option value=%s>%s</option>",$rowtopic["topic_id"],$rowtopic["description"]);}?>
					</select></p>
			<input class='regbutton' type='submit' name='deltags' value='Delete Selected'/>
			<input class='regbutton' type='submit' name='addtag' value='Add'/>
		</form>
		<?php
			if(array_key_exists('addtag',$_POST) && array_key_exists('tagtext',$_POST)){
				$tag = $_POST['tagtext'];
				$query = 'INSERT INTO "CSI2132 Project".MovieTopics(topic_id, movie_id) VALUES($1, $2)';
				$stmt = pg_prepare($dbconn, "qthree", $query);
				$result = pg_execute($dbconn, "qthree", array($tag, $m_id));
				
				if (!$result)
				{
					die ("Something went wrong. ".pg_last_error());
				}
				header("Refresh:0");
				
				pg_free_result($result);
				pg_close($dbconn);
			}
			else if(array_key_exists('deltags',$_POST)){
				foreach($_POST as $key => $value){
					if($value == 'on'){
						$query  = "DELETE FROM \"CSI2132 Project\".MovieTopics WHERE movie_id=$1 and topic_id = (SELECT topic_id FROM \"CSI2132 Project\".Topics WHERE description=$2)";
						$stmt = pg_prepare($dbconn, "qfour", $query);
						$result = pg_execute($dbconn, "qfour", array($m_id, $key));
						
						if(!$result){
							die("Cannot delete tag. ".pg_last_error());
						}
						unset($stmt);
						pg_free_result($result);
					}
				}
				header("Refresh:0");
				pg_close($dbconn);				
			}
		?>
	</div>
	<span style='margin:10px; font-size:20px;'>
	<button onclick='goBack()'>Back</button>
	</span>
</body>
</html>