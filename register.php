<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Register User</title>
    </head>
	<body>		
		<div id='headernav'>
			<a class='navlink' href='main.php'>Main</a>
			<?php
				session_start();
				if(array_key_exists('username', $_SESSION))
				{
					echo " <a class='navlink' href='logout.php'>Log out</a> ";
				} 
				else
				{
					echo " <a class='navlink' href='login.php'>Log in</a> ";
				}
			?>
		</div>		
		<div id='body_title'>
		<h2> Register a new user </h2>
		</div>
		<br>
		<div id='info_section'>
		<form id='newuserform' name='newuserform' method='post' action=''>
			<p>	
				<label for='name'>Username:</label>
				<input name='iuser' type='text' id='iuser'/>
			</p>
			<p>	
				<label for='password'>Password:</label>
				<input name='ipassword' type='password' id='ipassword'/>
			</p>
			<p>	
				<label for='retypepassword'>Re-enter Password:</label>
				<input name='iretypepassword' type='password' id='iretypepassword'/>
			</p>
			<p>	
				<label for='emial'>Email:</label>
				<input name='iemail' type='text' id='iemail'/>
			</p>
			<p>	
				<label for='fname'>First Name:</label>
				<input name='ifname' type='text' id='ifname'/>
			</p>
			<p>	
				<label for='lname'>Last Name:</label>
				<input name='ilname' type='text' id='ilname'/>
			</p>
			<p>	
				<label for='city'>City:</label>
				<input name='icity' type='text' id='icity'/>
			</p>
			<p>	
				<label for='province'>Province/State:</label>
				<input name='iprovince' type='text' id='iprovince'/>
			</p>
			<p>	
				<label for='country'>Country:</label>
				<input name='icountry' type='text' id='icountry'/>
			</p>
			<p>
				<input type='submit' name='submit' value='Submit'/>
			</p>
		</form>
		<?php
			if (array_key_exists('iuser', $_POST) && array_key_exists('ipassword', $_POST) && array_key_exists('iretypepassword', $_POST))
			{
				if ($_POST['ipassword'] != $_POST['iretypepassword'])
				{
					echo "<p>Passwords do not match.</p>";
					exit;
				}
				$user = $_POST['iuser'];
				$valtoconvert = $_POST['iuser'].$_POST['ipassword'];
				$password = base64_encode($valtoconvert);
				$email = $_POST['iemail'];
				$fname = $_POST['ifname'];
				$lname = $_POST['ilname'];
				$city = $_POST['icity'];
				$province = $_POST['iprovince'];
				$country = $_POST['icountry'];
				
				$dbconn = pg_connect($_SESSION['connstring']) or die('Connection Failed');
				
				$query = "INSERT INTO \"CSI2132 Project\".Account(user_id, password, last_name, first_name, email, city, province, country) VALUES($1, $2, $3, $4, $5, $6, $7, $8)";
				
				$stmt = pg_prepare($dbconn, "ps", $query);
				$result = pg_execute($dbconn, "ps", array($user, $password, $lname, $fname, $email, $city, $province, $country));
				
				if ($result)
				{
					$_SESSION['username']=$user;
					echo "Continue to <a href='main.php'>Main</a> or <a href='profile.php'>set up profile.</a>";
				}
				else
				{
					die ("Registration failed! ".pg_last_error());
				}
				pg_free_result($result);
				pg_close($dbconn);
			}
		?>
		</div>
	</body>
</html>