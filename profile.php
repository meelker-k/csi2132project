<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Profile</title>
	</head>
	<body>
		<div id='headernav'>
			<a class='navlink' href='main.php'>Main</a>
			<a class='navlink' href='searchmovies.php'>Search Movies</a>
			<a class='navlink' href='logout.php'>Log out</a>
		</div>
		
		<div id='body_title'>
		<h2> Profile </h2>
		</div>
		<br>
		
		<?php
			session_start();
			$uid = $_SESSION['username'];
			
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			
			$query = "SELECT * FROM \"CSI2132 Project\".Profile WHERE user_id = $1";
			
			$stmt = pg_prepare($dbconn, "qone", $query);
			$result = pg_execute($dbconn, "qone", array($uid));
			
			if (!$result)
			{
				exit();
			}
			
			pg_free_result($result);
			pg_close($dbconn);
		?>
		
		<form id='profileform' name='profileform' method='post' action=''>
			<label for='agerange'>Age range:</label>
			<select name='iagerange'>
				<option value='0-4'>0-4</option>
				<option value='5-9'>5-9</option>
				<option value='10-14'>10-14</option>
				<option value='15-19'>15-19</option>
				<option value='20-24'>20-24</option>
				<option value='25-29'>25-29</option>
				<option value='30-34'>30-34</option>
				<option value='35-39'>35-39</option>
				<option value='40-44'>40-44</option>
				<option value='45-49'>45-49</option>
				<option value='50-54'>50-54</option>
				<option value='55-59'>55-59</option>
				<option value='60-64'>60-64</option>
				<option value='65-69'>65-69</option>
				<option value='70-74'>70-74</option>
				<option value='75-79'>75-79</option>
				<option value='80-84'>80-84</option>
				<option value='85-89'>85-89</option>
				<option value='90-94'>90-94</option>
				<option value='95-99'>95-99</option>
			</select> <br>
			
			<label for='year'>Year born:</label>
			<input name='iyear' type='number' id='iyear'/> <br>
			
			<label for='gender'>Gender:</label>
			<select name='igender'>
				<option value='M'>Male</option>
				<option value='F'>Female</option>
				<option value='O'>Other</option>
			</select><br>
			
			<label for='device'>Device used:</label>
			<input type='text' name='idevice' id='idevice'/> <br>
			
			<label for='occupation'>Occupation</label>
			<input type='text' name='ioccupation' id='ioccupation'/> <br>
			
			<input type='submit' name='submit' value='Submit'/>
		</form>
		<?php
			session_start();
			
			if(!isset($_SESSION['username'])){
				die("Need to be logged in to create a profile.");
			}
			
			$uid = $_SESSION['username'];
			$age_range = $_POST['iagerange'];
			$year = $_POST['iyear'];
			$gender = $_POST['igender'];
			$device = $_POST['idevice'];
			$occupation = $_POST['ioccupation'];
			
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			
			$query = "INSERT INTO \"CSI2132 Project\".Profile(user_id, age_range, year_born, gender, occupation, device_used) VALUES($1, $2, $3, $4, $5, $6)";
			
			$stmt = pg_prepare($dbconn, "ps", $query);
			$result = pg_execute($dbconn, "ps", array($uid, $age_range, $year, $gender, $occupation, $device));
			
			if ($result)
			{
				echo "Save successful!";
			}
			else
			{
				die ("Save failed! ".pg_last_error());
			}
			
			pg_free_result($result);
			pg_close($dbconn);
		?>
	</body>
</html>