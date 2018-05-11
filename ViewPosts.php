<?php

	error_reporting(E_ALL);
	ini_set("display_errors","On");
	
	include 'session_check.php';
	include 'utils.php';
	require_once 'dbconnect.php';
	require_once 'PG.php';
	require_once 'Item.php';

	//session_start();
	//var_dump($_SESSION);

	$owner = $_SESSION['emailID'];


?>


<!DOCTYPE html>

<html>

	<head>
		<title>View Posts</title>
		<?php include 'links.html'; ?>
	</head>

	<body>

		<h3 class = "text-center">View Posts by <?php echo $owner; ?></h3>

		<div>
			<h4> PG Vacancy Posts </h4>
			<?php

				$results = array();

		    	$query = "SELECT * FROM PGVacancy where owner = '" . $owner . "'";
			  	$data = mysqli_query($db, $query);
			  	//var_dump($data);
			  	if (mysqli_num_rows($data) > 0) {
			  		while ($row = mysqli_fetch_assoc($data)) {
			  			$resultpg = new PG(
			  				$row['pgName'], $row['pgType'], $row['location'],
			  				$row['rent'], $row['vacancy'], $row['owner']
			  				);
			  			array_push($results, $resultpg);
			  		}
			  	}

				foreach ($results as $x) {
					$delStr = "DELETE FROM PGVacancy where owner = '" . $owner . "' AND ";
					echo '<div class = "">';
						echo "<p>";
							echo "PG Name: " . $x->pgName;
							$delStr .= "pgName = '$x->pgName' AND ";
							echo "<br />";
							echo "Location: " . $x->location;
							$delStr .= "location = '$x->location' AND ";
							echo "<br />";
							echo "PG Type: " . ucfirst($x->pgType);
							$delStr .= "pgType = '$x->pgType' AND ";
							echo "<br />";
							echo "Rent: " . $x->rent;
							$delStr .= "rent = $x->rent AND ";
							echo "<br />";
							echo "Vacancy: " . $x->vacancy;
							$delStr .= "vacancy = $x->vacancy";
							echo "<br />";
							echo "<a href = \"DeletePosts.php?query=$delStr\">Delete This Post</a>";
							echo "<br />";
						echo "</p>";
						//echo $delStr;
					echo "</div>";
				}
			?>
		</div>

		<hr />

		<div>
			<h4> Need PG Posts </h4>
			<?php

				$results = array();

		    	$query = "SELECT * FROM NeedPG where owner = '" . $owner . "'";
			  	$data = mysqli_query($db, $query);
			  	//var_dump($data);
			  	if (mysqli_num_rows($data) > 0) {
			  		while ($row = mysqli_fetch_assoc($data)) {
			  			$resultpg = new PG("", $row['pgType'], $row['location'],
			  				$row['rent'], $row['vacancy'], $row['owner']
			  				);
			  			array_push($results, $resultpg);
			  		}
			  	}

				foreach ($results as $x) {
					$delStr = "DELETE FROM NeedPG where owner = '" . $owner . "' AND ";
					echo '<div class = "">';
						echo "<p>";
							//echo "PG Name: " . $x->pgName;
							//$delStr .= "pgName = '$x->pgName' AND ";
							//echo "<br />";
							echo "Location: " . $x->location;
							$delStr .= "location = '$x->location' AND ";
							echo "<br />";
							echo "PG Type: " . ucfirst($x->pgType);
							$delStr .= "pgType = '$x->pgType' AND ";
							echo "<br />";
							echo "Rent: " . $x->rent;
							$delStr .= "rent = $x->rent AND ";
							echo "<br />";
							echo "Vacancy: " . $x->vacancy;
							$delStr .= "vacancy = $x->vacancy";
							echo "<br />";
							echo "<a href = \"DeletePosts.php?query=$delStr\">Delete This Post</a>";
							echo "<br />";
						echo "</p>";
						//echo $delStr;
					echo "</div>";
				}
			?>
		</div>

		<hr />

		<div>
			<h4> Sell Item Posts </h4>
			<?php

				$results = array();

		    	$query = "SELECT * FROM SellItem where owner = '" . $owner . "'";
			  	$data = mysqli_query($db, $query);
			  	//var_dump($data);
			  	if (mysqli_num_rows($data) > 0) {
			  		while ($row = mysqli_fetch_assoc($data)) {
			  			$resultitem = new Item($row['itemName'], $row['itemType'],
			  				$row['quantity'], $row['itemPrice'], $row['owner']
			  				);
			  			array_push($results, $resultitem);
			  		}
			  	}

				foreach ($results as $x) {
					$delStr = "DELETE FROM SellItem where owner = '" . $owner . "' AND ";
					echo '<div class = "">';
						echo "<p>";
							echo "Item Name: " . $x->itemName;
							$delStr .= "itemName = '$x->itemName' AND ";
							echo "<br />";
							echo "Item Type: " . ucfirst($x->itemType);
							$delStr .= "itemType = '$x->itemType' AND ";
							echo "<br />";
							echo "Quantity: " . $x->quantity;
							$delStr .= "quantity = $x->quantity AND ";
							echo "<br />";
							echo "Item Price: " . $x->itemPrice;
							$delStr .= "itemPrice = $x->itemPrice";
							echo "<br />";
							echo "<a href = \"DeletePosts.php?query=$delStr\">Delete This Post</a>";
							echo "<br />";
						echo "</p>";
						//echo $delStr;
					echo "</div>";
				}
			?>
		</div>

		<hr />

		<div>
			<h4> Need Item Posts </h4>
			<?php

				$results = array();

		    	$query = "SELECT * FROM NeedItem where owner = '" . $owner . "'";
			  	$data = mysqli_query($db, $query);
			  	//var_dump($data);
			  	if (mysqli_num_rows($data) > 0) {
			  		while ($row = mysqli_fetch_assoc($data)) {
			  			$resultitem = new Item($row['itemName'], $row['itemType'],
			  				0, 0, $row['owner']
			  				);
			  			array_push($results, $resultitem);
			  		}
			  	}

				foreach ($results as $x) {
					$delStr = "DELETE FROM NeedItem where owner = '" . $owner . "' AND ";
					echo '<div class = "">';
						echo "<p>";
							echo "Item Name: " . $x->itemName;
							$delStr .= "itemName = '$x->itemName' AND ";
							echo "<br />";
							echo "Item Type: " . ucfirst($x->itemType);
							$delStr .= "itemType = '$x->itemType'";
							echo "<br />";
							/*echo "Quantity: " . $x->quantity;
							$delStr .= "quantity = $x->quantity AND ";
							echo "<br />";
							echo "Item Price: " . $x->itemPrice;
							$delStr .= "itemPrice = $x->itemPrice";
							echo "<br />";*/
							echo "<a href = \"DeletePosts.php?query=$delStr\">Delete This Post</a>";
							echo "<br />";
						echo "</p>";
						//echo $delStr;
					echo "</div>";
				}
			?>
		</div>

	</body>

</html>