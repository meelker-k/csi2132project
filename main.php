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
			<div id='top_movies'>
				<h3> 10 Most Popular Movies </h3>
					<ol>
					<li>Movie 1</li>
					<li>Movie 2</li>
					<li>Movie 3</li>
					<li>Movie 4</li>
					<li>Movie 5</li>
					<li>Movie 6</li>
					<li>Movie 7</li>
					<li>Movie 8</li>
					<li>Movie 9</li>
					<li>Movie 10</li>
					</ol>
				<h3> 10 Highest Rated Movies </h3>
				<ol>
					<li>Movie 1</li>
					<li>Movie 2</li>
					<li>Movie 3</li>
					<li>Movie 4</li>
					<li>Movie 5</li>
					<li>Movie 6</li>
					<li>Movie 7</li>
					<li>Movie 8</li>
					<li>Movie 9</li>
					<li>Movie 10</li>
				</ol>
			</div>			
		</div>
	</body>
</html>