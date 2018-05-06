<?php
	
	function spaces($s) {
		return (strpos($s, ' ') !== false);
	}

	function user_exists($username, $db) {
		$user_check_query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
		$results = mysqli_query($db, $user_check_query);
		return (mysqli_num_rows($results) >= 1);
	}

	function invalid_credentials($username, $password, $db) {
		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
		$results = mysqli_query($db, $query);
		return (mysqli_num_rows($results) != 1);
	}

?>