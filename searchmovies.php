<!DOCTYPE html>
<html>
    <head>
		<link rel='stylesheet' type='text/css' href='style.css'>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>Main Project Page</title>
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
		<h3>Search</h3>
		<form id='searchmovieform' name='searchmovieform' method='post' action=''>
			<p>
				<label for='movie'>Movie name:</label>
				<input name='movie' type='text' id='movie'/>
				<input type='submit' name='search' value='Search'/>
			</p>
		</form>
		<?php
			if (isset($_POST['movie']))
			{
				echo "<p>
					<a href='managemovies.php?movie=".$_POST['movie']."'>".$_POST['movie']."</a>
					</p>";
			}
			
		?>
	</body>
</html>