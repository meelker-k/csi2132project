<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	<title>Director</title>
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
			
			$query = "SELECT d.first_name, d.last_name, d.director_id FROM \"CSI2132 Project\".Directs ds,\"CSI2132 Project\".Director d WHERE ds.movie_id = $1 AND d.director_id = ds.director_id ORDER BY d.first_name";
			
			$stmt = pg_prepare($dbconn, "ps", $query);
			$result = pg_execute($dbconn, "ps", array($m_id));
			
			$directors = "SELECT * FROM \"CSI2132 Project\".Director ORDER BY first_name";
			
			$stmt = pg_prepare($dbconn, "qtwo", $directors);
			$directors = pg_execute($dbconn, "qtwo", array());
			
			if (!$result)
			{
				die ("Something went wrong. ".pg_last_error());
			}
		?>
		<form name='directorform' method='post' action=''>
			<?php 
				while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)){
					printf("%s %s: <input type='checkbox' name='%s'/><br>",$row["first_name"],$row["last_name"], $row["director_id"]);
				}
			?>
			<p>New Director: <select name='directortext'/>
						<option></option>
						<?php while ($rowtopic = pg_fetch_array($directors, null, PGSQL_ASSOC)){ printf("<option value=%s>%s %s</option>",$rowtopic["director_id"],$rowtopic["first_name"],$rowtopic["last_name"]);}?>
					</select></p>
			<input class='regbutton' type='submit' name='deldirector' value='Delete Selected'/>
			<input class='regbutton' type='submit' name='adddirector' value='Add'/>
		</form>
		<?php
			if(array_key_exists('adddirector',$_POST) && array_key_exists('directortext',$_POST)){
				$director = $_POST['directortext'];
				$query = 'INSERT INTO "CSI2132 Project".Directs(director_id, movie_id) VALUES($1, $2)';
				$stmt = pg_prepare($dbconn, "qthree", $query);
				$result = pg_execute($dbconn, "qthree", array($director, $m_id));
				
				if (!$result)
				{
					die ("Something went wrong. ".pg_last_error());
				}
				header("Refresh:0");
				
				pg_free_result($result);
				pg_close($dbconn);
			}
			else if(array_key_exists('deldirector',$_POST)){
				foreach($_POST as $key => $value){
					if($value == 'on'){
						$query  = "DELETE FROM \"CSI2132 Project\".Directs WHERE movie_id=$1 and director_id = $2";
						$stmt = pg_prepare($dbconn, "qfour", $query);
						$result = pg_execute($dbconn, "qfour", array($m_id, $key));
						
						if(!$result){
							die("Cannot delete director. ".pg_last_error());
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
	<span style='margin:10px; font-size:20px; color:green;'>
	<button onclick='goBack()'>Back</button>
	</span>
</body>
</html>