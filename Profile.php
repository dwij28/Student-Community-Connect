<?php

	//error_reporting(E_ALL);
	//ini_set("display_errors","On");

	include 'session_check.php';
	require_once 'dbconnect.php';

	$errors = array();
?>


<!DOCTYPE html>

<html>

	<head>
		<title>Profile Page</title>
		<?php include 'links.html'; ?>
	</head>

	<body>

		<h3 class = "text-center">Welcome, <?php echo $_SESSION['emailID']; ?></h3>

		<div class = "forms">

			<br />
			
			<form action = "AchievementHomePage.php">
				
				<div>
					<button type = "submit" class = "btn btn-primary btn-lg btn-block">Achievement Home Page</button>
				</div>

			</form>

			<br />

			<form action = "EventHomePage.php">
				
				<div>
					<button type = "submit" class = "btn btn-primary btn-lg btn-block">Event Home Page</button>
				</div>

			</form>

			<br />

			<form action = "ItemHomePage.php">
				
				<div>
					<button type = "submit" class = "btn btn-primary btn-lg btn-block">Item Home Page</button>
				</div>

			</form>

			<br />

			<form action = "PGHomePage.php">
				
				<div>
					<button type = "submit" class = "btn btn-primary btn-lg btn-block">PG Home Page</button>
				</div>

			</form>
			
			<br />

			<form action = "TutorHomePage.php">
				
				<div>
					<button type = "submit" class = "btn btn-primary btn-lg btn-block">Tutor Home Page</button>
				</div>

			</form>

			<br />

			<form action = "JobHomePage.php">
				
				<div>
					<button type = "submit" class = "btn btn-primary btn-lg btn-block">Job Home Page</button>
				</div>

			</form>

			<br />

		</div>

	</body>

</html>