<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='style.css'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>Rate a Movie</title>
	<script type="text/javascript">
		function rate(i){
			window.location.href += "&rid="+i;
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
			echo " <a class='navlink' href='logout.php'>Log out</a> ";
		} 
		else
		{
			echo " <a class='navlink' href='register.php'>Register</a> ";
		}
	?>
</div>
<div id='body_title'>
	<?php
		$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
		$m_id = $_GET['mid'];
		
		$query = "SELECT name FROM \"CSI2132 Project\".Movie WHERE movie_id=$1";
		$stmt = pg_prepare($dbconn, "qone", $query);
		$result = pg_execute($dbconn, "qone", array($m_id));
		
		if(!$result){
			die(pg_last_error());
		}
		$movie = pg_fetch_array($result)["name"];
		
		pg_free_result($result);
		pg_close($dbconn);
	?>
	<h2> Rate <?php echo "$movie" ?> </h2>
</div>
<div id='info_section'>
	Rating:
	<div class="rate">
		<div class="rate-item" onclick='rate(1)'>☆</div>
		<div class="rate-item" onclick='rate(2)'>☆</div>
		<div class="rate-item" onclick='rate(3)'>☆</div>
		<div class="rate-item" onclick='rate(4)'>☆</div>
		<div class="rate-item" onclick='rate(5)'>☆</div>
		<div class="rate-item" onclick='rate(6)'>☆</div>
		<div class="rate-item" onclick='rate(7)'>☆</div>
		<div class="rate-item" onclick='rate(8)'>☆</div>
		<div class="rate-item" onclick='rate(9)'>☆</div>
		<div class="rate-item" onclick='rate(10)'>☆</div>
	</div>
	<?php
		if (array_key_exists('rid',$_GET)){
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			$m_id = $_GET['mid'];
			$r_id = $_GET['rid'];
			$u_id = $_SESSION['username'];
			$time = date('m/d/Y h:i:s a', time());
			
			$query = "SELECT * FROM \"CSI2132 Project\".Watches WHERE movie_id=$1 and user_id=$2";
			$stmt = pg_prepare($dbconn, "qone", $query);
			$exists = pg_execute($dbconn, "qone", array($m_id, $u_id));
			
			if(pg_num_rows($exists) > 0){
				$query = "UPDATE \"CSI2132 Project\".Watches SET rating=$1, date=$2 WHERE movie_id=$3 AND user_id=$4";
				$stmt = pg_prepare($dbconn, "qtwo", $query);
				$result = pg_execute($dbconn, "qtwo", array($r_id, $time, $m_id, $u_id));
			}else{
				$query = "INSERT INTO \"CSI2132 Project\".Watches(user_id, movie_id, date, rating) VALUES($1, $2, $3, $4)";
				$stmt = pg_prepare($dbconn, "qthree", $query);
				$result = pg_execute($dbconn, "qthree", array($u_id,$m_id,$time,$r_id));
			}
			
			if(!$result){
				die(pg_last_error());
			}
			pg_free_result($result);
			pg_free_result($exists);
			pg_close($dbconn);
			header("location:movie.php?mid=".$m_id);
		}
	?>
</div>
</body>
</html>