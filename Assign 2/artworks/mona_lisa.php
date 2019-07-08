<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>CPS630 Assignment #2</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		
		<script>
			function shop() {
				window.open("../shoppingcart.php", "_blank", "height = 400px; width = 400px;");
			}
		</script>
	</head>
	
	<body>
		<div>
			<a href="../home.php">Home</a>
			<a href="../aboutus.php" style="margin-left: 2.5em">About Us</a>
			<a href="../blogs.php" style="margin-left: 2.5em">Blogs</a>
			<img class="shoppingcart" onclick="shop()" src="../shopping_cart.png" style="float: right">
		</div>

		<header>
			<h1 align="center">Online Art Store</h1>
		</header>
		
		<table style="width: 100%">
			<tr>
				<td>
					<img id="largeImage" src="monalisa.jpg">
				</td>
				<td>
					<table style="width: 100%">
						<tr>
							<th>Name of Artwork</th>
							<td>Mona Lisa</td>
						</tr>
						<tr>
							<th>Date of Production</th>
							<td>1503</td>
						</tr>
						<tr>
							<th>Type of Painting</th>
							<td>Oil Painting</td>
						</tr>
						<tr>
							<th>Dimensions</th>
							<td>77cm x 53cm</td>
						</tr>
						<tr>
							<th>Current Location</th>
							<td>Louvre Museam: Paris</td>
						</tr>
						<tr>
							<th>Artist Name</th>
							<td>Leonardo Da Vinci</td>
						</tr>
						<tr>
							<th>Price</th>
							<td>$782 Million CAD</td>
						</tr>
						<tr>
							<th>Genre of Painting</th>
							<td>Renaissance</td>
						</tr>
					</table>
				</td>
			</tr>
		<table>
	</body>
</html>