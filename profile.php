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
			<a class='navlink' href='search.php'>Search</a>
			<a class='navlink' href='movie.php'>Movies</a>
			<a class='navlink' href='actor.php'>Actors</a>
			<a class='navlink' href='topic.php'>Topics</a>
			<a class='navlink' href='logout.php'>Log out</a>
		</div>
		
		<div id='body_title'>
		<h2> Profile </h2>
		</div>
		<br>
		<div id='info_section'>
		<?php
			session_start();
			$uid = $_SESSION['username'];
			
			$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			
			$query = "SELECT * FROM \"CSI2132 Project\".Profile WHERE user_id = $1";
			
			$stmt = pg_prepare($dbconn, "qone", $query);
			$result = pg_execute($dbconn, "qone", array($uid));
			
			if (!$result || pg_num_rows($result) == 0){
				echo "<form action='' method='post'>";
				
				echo "<label for='agerange'>Age range:</label>
				<select name='iagerange' id='iagerange'>
				<option></option>
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
				</select> <br>";
			
				echo "<label for='year'>Year born:</label>
				<input name='iyear' type='number' id='iyear'/> <br>";
			
				echo "<label for='gender'>Gender:</label>
				<select name='igender' id='igender'>
				<option></option>
				<option value='M'>M</option>
				<option value='F'>F</option>
				<option value='O'>O</option>
				</select><br>";
			
				echo "<label for='device'>Device used:</label>
				<input type='text' name='idevice' id='idevice'/> <br>";
			
				echo "<label for='occupation'>Occupation</label>
				<input type='text' name='ioccupation' id='ioccupation'/> <br>";
			
				echo "<input type='submit' name='submit' value='Submit' class='regbutton'/><br>";
				echo "</form>";
			}else{
				$row = pg_fetch_array($result);
				echo "
		<form action='' method='post'>
			<label for='agerange'>Age range:</label>
			<select name='iagerange' id='iagerange'>
			<option value='".$row['age_range']."' selected>".$row['age_range']."</option>
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
			<input name='iyear' type='number' id='iyear' value='".$row['year_born']."'/> <br>
			
			<label for='gender'>Gender:</label>
			<select name='igender' id='igender'>
				<option value='".$row['gender']."' selected>".$row['gender']."</option>
				<option value='M'>M</option>
				<option value='F'>F</option>
				<option value='O'>O</option>
			</select><br>
			
			<label for='device'>Device used:</label>
			<input type='text' name='idevice' id='idevice' value='".$row['device_used']."'/> <br>
			
			<label for='occupation'>Occupation</label>
			<input type='text' name='ioccupation' id='ioccupation' value='".$row['occupation']."'/> <br>
			
			<input type='submit' name='submit' value='Submit' class='regbutton'/><br>		
		</form>";
			}
			
			if (array_key_exists('username', $_SESSION) && array_key_exists('iagerange', $_POST) && array_key_exists('iyear', $_POST) 
				&& array_key_exists('igender', $_POST) && array_key_exists('idevice', $_POST) && array_key_exists('ioccupation', $_POST)){			
			$uid = $_SESSION['username'];
			$age_range = $_POST['iagerange'];
			$year = $_POST['iyear'];
			$gender = $_POST['igender'];
			$device = $_POST['idevice'];
			$occupation = $_POST['ioccupation'];
			
			if (!$result || pg_num_rows($result) == 0){
				$query = "INSERT INTO \"CSI2132 Project\".Profile(user_id, age_range, year_born, gender, occupation, device_used) VALUES($1, $2, $3, $4, $5, $6)";
			}else{
				$query = "UPDATE \"CSI2132 Project\".Profile SET age_range=$2, year_born=$3, gender=$4, occupation=$5, device_used=$6 WHERE user_id=$1";
			}
			
			$stmt = pg_prepare($dbconn, "ps", $query);
			$result2 = pg_execute($dbconn, "ps", array($uid, $age_range, $year, $gender, $occupation, $device));
			
			if ($result2)
			{
				echo "<p>Save successful!</p>";
				header("Refresh:2");
			}
			else
			{
				die ("save failed! ".pg_last_error());
			}
			
			pg_free_result($result);
			pg_close($dbconn);
			}
		?>
		<br><br>
		<form action'' method='post'>
			<input type='checkbox' name='idelete' id='idelete'/>
			<input type='submit' class='deletebutton' name='delsubmit' value='Delete Account'/>
		</form>
		</div>
		<?php
			if(array_key_exists('idelete',$_POST)){
				$uid = $_SESSION['username'];
			
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
			
				$queryComments = "DELETE FROM \"CSI2132 Project\".Comments WHERE user_id = $1";
				$queryProfile =	"DELETE FROM \"CSI2132 Project\".Profile WHERE user_id = $1";
				$queryAccount =	"DELETE FROM \"CSI2132 Project\".Account WHERE user_id = $1";
			
				$stmt = pg_prepare($dbconn, "del", $query);
				$result = pg_execute($dbconn, "del", array($uid));
				if(!$result){
					die("<div id='errormessage'>Delete Failed! ".pg_last_error()."</div>");
				}
				$stmt = pg_prepare($dbconn, "delone", $queryComments);
				$result = pg_execute($dbconn, "delone", array($uid));
				if(!$result){
					die("<div id='errormessage'>Delete Failed! ".pg_last_error()."</div>");
				}
				$stmt = pg_prepare($dbconn, "deltwo", $queryProfile);
				$result = pg_execute($dbconn, "deltwo", array($uid));
				if(!$result){
					die("<div id='errormessage'>Delete Failed! ".pg_last_error()."</div>");
				}
				$stmt = pg_prepare($dbconn, "delthree", $queryAccount);
				$result = pg_execute($dbconn, "delthree", array($uid));
				if(!$result){
					die("<div id='errormessage'>Delete Failed! ".pg_last_error()."</div>");
				}
				
				echo "<p>Delete success! Returning to main.</p>";
				unset($_SESSION['username']);
				header("Refresh: 2; url=main.php");
			}
		?>
	</body>
</html>