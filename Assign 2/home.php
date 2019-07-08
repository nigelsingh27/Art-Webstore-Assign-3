<?php

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>CPS630 Assignment #2</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<script>
			function changeAW() {
				var artworks = document.getElementById("artworks");
				var selected = artworks.options[artworks.selectedIndex].value;
				
				if (selected == "1. Girl with a Pearl Earring") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artworks/girlwithapearlearring.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artwork</th><td><a href="artworks/girl_with_a_pearl_earring.php">Girl with a Pearl Earring</a></td></tr><tr><th>General Description</th><td>Girl with a Pearl Earring is an oil painting by Dutch Golden Age painter Johannes Vermeer</td></tr><tr><th>Price</th><td>$900 Million CAD</td></tr></table>';
				}
				else if (selected == "2. Mona Lisa") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artworks/monalisa.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artwork</th><td><a href="artworks/mona_lisa.php">Mona Lisa</a></td></tr><tr><th>General Description</th><td>The Mona Lisa is a half-length portrait painting by the Italian Renaissance artist Leonardo da Vinci</td></tr><tr><th>Price</th><td>$782 Million CAD</td></tr></table>';
				}
				else if (selected == "3. Starry Night") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artworks/starrynight.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artwork</th><td><a href="artworks/starry_night.php">Starry Night</a></td></tr><tr><th>General Description</th><td>The Starry Night is an oil on canvas by the Dutch post-impressionist painter Vincent van Gogh</td></tr><tr><th>Price</th><td>$300 Million CAD</td></tr></table>';
				}
				else if (selected == "4. The Kiss") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artworks/thekiss.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artwork</th><td><a href="artworks/the_kiss.php">The Kiss</a></td></tr><tr><th>General Description</th><td>The Kiss (Liebespaar) is an oil, gold, and silver-leaf painting by the Austrian Symbolist painter Gustav Klimt</td></tr><tr><th>Price</th><td>$350 Million CAD</td></tr></table>';
				}
				else if (selected == "5. The Last Supper") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artworks/thelastsupper.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artwork</th><td><a href="artworks/the_last_supper.php">The Last Supper</a></td></tr><tr><th>General Description</th><td>The Last Supper is a late 15th-century mural painting by Leonardo da Vinci</td></tr><tr><th>Price</th><td>$600 Million CAD</td></tr></table>';
				}
				else {
					document.getElementById("image").style.display = 'none';
					document.getElementById("image").children[0].src = ""
					document.getElementById("info").style.display = 'none';
					document.getElementById("info").innerHTML = '';
				}
				
				document.getElementById("artists").selectedIndex = 0;
				document.getElementById("museum").selectedIndex = 0;
			}
			
			function changeA(){
				var artists = document.getElementById("artists");
				var selected = artists.options[artists.selectedIndex].value;
				
				if (selected == "1. Claude Monet") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artists/monet.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artist</th><td><a href="artists/claude_monet.php">Claude Monet</a></td></tr><tr><th>General Description</th><td>Oscar-Claude Monet was a founder of French Impressionist painting, and the most consistent and prolific practitioner of the movement\'s philosophy of expressing one\'s perceptions before nature, especially as applied to plein-air landscape painting</td></tr></table>';
				}
				else if (selected == "2. Leonardo Da Vinci") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artists/davinci.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artist</th><td><a href="artists/leonardo_da_vinci.php">Leonardo Da Vinci</a></td></tr><tr><th>General Description</th><td>Leonardo di ser Piero da Vinci more commonly Leonardo da Vinci or simply Leonardo, was an Italian Renaissance polymath whose areas of interest included invention, painting, sculpting, architecture, science, music, mathematics, engineering, literature, anatomy, geology, astronomy, botany, writing, history, and cartography</td></tr></table>';
				}
				else if (selected == "3. Pablo Picasso") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artists/picasso.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artist</th><td><a href="artists/pablo_picasso.php">Pablo Picasso</a></td></tr><tr><th>General Description</th><td>Pablo Picasso was a Spanish painter, sculptor, printmaker, ceramicist, stage designer, poet and playwright who spent most of his adult life in France</td></tr></table>';
				}
				else if (selected == "4. Michelangelo") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artists/michelangelo.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artist</th><td><a href="artists/michelangelo.php">Michelangelo di Lodovico Buonarroti Simoni</a></td></tr><tr><th>General Description</th><td>Michelangelo di Lodovico Buonarroti Simoni or more commonly known by his first name Michelangelo was an Italian sculptor, painter, architect and poet of the High Renaissance born in the Republic of Florence, who exerted an unparalleled influence on the development of Western art</td></tr></table>';
				}
				else if (selected == "5. Vincent Van Gogh") {
					document.getElementById("image").style.display = 'block';
					document.getElementById("image").children[0].src = "artists/vangogh.jpg"
					document.getElementById("info").style.display = 'block';
					document.getElementById("info").innerHTML = '<table style="width: 100%"><tr><th>Name of Artist</th><td><a href="artists/vincent_van_gogh.php">Vincent Van Gogh</a></td></tr><tr><th>General Description</th><td>Vincent Willem van Gogh was a Dutch Post-Impressionist painter who is among the most famous and influential figures in the history of Western art</td></tr></table>';
				}
				else {
					document.getElementById("image").style.display = 'none';
					document.getElementById("image").children[0].src = ""
					document.getElementById("info").style.display = 'none';
					document.getElementById("info").innerHTML = '';
				}
				
				document.getElementById("artworks").selectedIndex = 0;
				document.getElementById("museum").selectedIndex = 0;
			}
			
			function changeM() {
				document.getElementById("artworks").selectedIndex = 0;
				document.getElementById("artists").selectedIndex = 0;
				
				document.getElementById("image").style.display = 'none';
				document.getElementById("image").children[0].src = ""
				document.getElementById("info").style.display = 'none';
				document.getElementById("info").innerHTML = '';
			}
			
			function shop() {
				window.open("shoppingcart.php", "_blank", "height = 400px; width = 400px;");
			}

		</script>
	</head>
	
	<body>
		<div>
			<a href="home.php">Home</a>
			<a href="aboutus.php" style="margin-left: 2.5em">About Us</a>
			<a href="blogs.php" style="margin-left: 2.5em">Blogs</a>
			<img class="shoppingcart" onclick="shop()" src="shopping_cart.png" style="float: right">
		</div>

		<header>
			<h1 align="center">Online Art Store</h1>
		</header>
		
		<div>
			<select id="artworks" name="Art Works" onchange="changeAW();">
				<option disabled selected>Art Works</option>
				<option>1. Girl with a Pearl Earring</option>
				<option>2. Mona Lisa</option>
				<option>3. Starry Night</option>
				<option>4. The Kiss</option>
				<option>5. The Last Supper</option>
			</select>

			<select id="artists" name="Artists" onchange="changeA();" style="margin-left: 2.5em">
				<option disabled selected>Artists</option>
				<option>1. Claude Monet</option>
				<option>2. Leonardo Da Vinci</option>
				<option>3. Pablo Picasso</option>
				<option>4. Michelangelo</option>
				<option>5. Vincent Van Gogh</option>
			</select>

			<select id="museum" name="Museum" onchange="changeM();" style="margin-left: 2.5em">
				<option disabled selected>Museum</option>
				<option>1. Musée D'Orsay</option>
				<option>2. Museo Nacional Del Prado</option>
				<option>3. Rijksmuseum</option>
				<option>4. The Art Institute of Chicago</option>
				<option>5. The Louvre Museum</option>
			</select>
		</div>
		
		<br></br>
		
		<div>
			<div style="position: relative;">
				<div id="image" style="display: none">
					<img class="smallImage" src="">
				</div>
				
				<div id="info" style="display: none">
				</div>
			</div>
		</div>
	</body>
</html>