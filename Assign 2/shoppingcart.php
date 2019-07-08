<?php
	session_start();

	
	$session = md5($_POST["aw1Q"] . $_POST["aw2Q"] . $_POST["aw3Q"] . $_POST["aw4Q"] . $_POST["aw5Q"] . $_POST["Shipping"]);
	
	$identifier = (isset($_SESSION['session']) ? $_SESSION['session'] : '');
	
	$_SESSION['aw1Q'] = ((isset($_SESSION['aw1Q'])) ? $_SESSION['aw1Q'] : 1);
	$_SESSION['aw2Q'] = ((isset($_SESSION['aw2Q'])) ? $_SESSION['aw2Q'] : 1);
	$_SESSION['aw3Q'] = ((isset($_SESSION['aw3Q'])) ? $_SESSION['aw3Q'] : 1);
	$_SESSION['aw4Q'] = ((isset($_SESSION['aw4Q'])) ? $_SESSION['aw4Q'] : 1);
	$_SESSION['aw5Q'] = ((isset($_SESSION['aw5Q'])) ? $_SESSION['aw5Q'] : 1);
	
	$_SESSION['sShipping'] = 10;
	$_SESSION['eShipping'] = 20;
	$_SESSION['ndShipping'] = 30;

	$_SESSION['tInvoice'] = ((isset($_SESSION['tInvoice'])) ? $_SESSION['tInvoice'] : 0);

	$cost = 0;
	$shipping = NULL;
	
	$price1 = 900;
	$price2 = 782;
	$price3 = 300;
	$price4 = 350;
	$price5 = 600;
	
	$aw1p = $_POST["aw1Q"];
	$aw2p = $_POST["aw2Q"];
	$aw3p = $_POST["aw3Q"];
	$aw4p = $_POST["aw4Q"];
	$aw5p = $_POST["aw5Q"];
	$shippingp = $_POST["Shipping"];
	
	$_SESSION['opt1'] = ((isset($_SESSION['opt1'])) ? $_SESSION['opt1'] : "<option>");
	$_SESSION['opt2'] = ((isset($_SESSION['opt2'])) ? $_SESSION['opt2'] : "<option>");
	$_SESSION['opt3'] = ((isset($_SESSION['opt3'])) ? $_SESSION['opt3'] : "<option>");
	$_SESSION['opt4'] = ((isset($_SESSION['opt4'])) ? $_SESSION['opt4'] : "<option>");
	$_SESSION['opt5'] = ((isset($_SESSION['opt5'])) ? $_SESSION['opt5'] : "<option>");
	
	if ($shippingp == "Standard")
		$shipping = $_SESSION['sShipping'];
	elseif ($shippingp == "Express")
		$shipping = $_SESSION['eShipping'];
	elseif ($shippingp == "Next Day")
		$shipping = $_SESSION['ndShipping'];
	elseif ($shippingp == NULL)
		$shipping = NULL;
	else
		$shipping = 0;
	
	if ($aw1p == "1" && $shipping != NULL) {
		$_SESSION['opt1'] = "<option disabled>";
		$_SESSION['aw1Q'] = 0;
		$cost += $price1;
	}
	else
		$aw1p = NULL;
	
	if ($aw2p == "1" && $shipping != NULL) {
		$_SESSION['opt2'] = "<option disabled>";
		$_SESSION['aw2Q'] = 0;
		$cost += $price2;
	}
	else
		$aw2p = NULL;
	
	if ($aw3p == "1" && $shipping != NULL) {
		$_SESSION['opt3'] = "<option disabled>";
		$_SESSION['aw3Q'] = 0;
		$cost += $price3;
	}
	else
		$aw3p = NULL;
	
	if ($aw4p == "1" && $shipping != NULL) {

		$_SESSION['aw4Q'] = 0;
		$cost += $price4;
	}
	else 
		$aw4p=NULL;

	if ($aw5p == "1" && $shipping != NULL) {
		$_SESSION['opt5'] = "<option disabled>";
		$_SESSION['aw5Q'] = 0;
		$cost += $price5;
	}
	else
		$aw5p = NULL;

if ($aw4p == "0")
{
$_SESSION['aw4Q'] = 1;
}

		
	header("shoppingcart.php");

?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>CPS630 Assignment #2</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<header>
			<h1 align="center">Shopping Cart</h1>
		</header>
	</body>
	
	<hr>
	
	<br>
	<form id="myForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		Girl with a Pearl Earring
		<br>
		<select name="aw1Q">
			<option disabled selected>Quantity</option>
			<?php echo $_SESSION['opt1'] . $_SESSION['aw1Q'];?></option>
		</select>
		<br>
		<br>
		
		Mona Lisa
		<br>
		<select name="aw2Q">
			<option disabled selected>Quantity</option>
			<?php echo $_SESSION['opt2'] . $_SESSION['aw2Q'];?></option>
		</select>
		<br>
		<br>
		
		Starry Night
		<br>
		<select name="aw3Q">
			<option disabled selected>Quantity</option>
			<?php echo $_SESSION['opt3'] . $_SESSION['aw3Q'];?></option>
		</select>
		<br>
		<br>
		
		The Kiss
		<br>
		<select name="aw4Q">
			<option disabled selected>Quantity</option>
			<?php echo $_SESSION['opt4'] . $_SESSION['aw4Q'];?></option>
		</select>
		<br>
		<br>
		
		The Last Supper
		<br>
		<select name="aw5Q">
			<option disabled selected>Quantity</option>
			<?php echo $_SESSION['opt5'] . $_SESSION['aw5Q'];?></option>
		</select>
		<br>
		<br>
		
		<hr>

		<br>
		<select name="Shipping">
			<option disabled selected>Shipping Plan</option>
			<option>Standard</option>
			<option>Express</option>
			<option>Next Day</option>
		</select>
		<br>
		<br>
		
		Standard is $10M CAD.
		<br>
		
		Express is $20M CAD.
		<br>
		
		Next Day is $30M CAD.
		<br>
		<br>
		
		<hr>
		
		<br>
		<input type="submit" value="Submit">
  <input type="button" id="button1" name="button1" value="button1">

	</form>


</html>

<?php


	if($session != $identifier)
	{
		$_SESSION['session'] = $session;

		if ($shipping == NULL)
			echo "You must choose a shipping plan!<br>";
		else if ($aw1p == NULL && $aw2p == NULL && $aw3p == NULL && $aw4p == NULL && $aw5p == NULL)
			echo "You must indicate the quantity you wish to purchase!<br>";
		else
		{
			echo "The cost before shipping and tax is <b>$" . $cost . "M CAD</b>.<br>";
			echo "The cost after shipping and tax is <b>$" . round(0.13 * ($cost + $shipping) + ($cost + $shipping)) . "M CAD</b>.<br>";
			$_SESSION['tInvoice'] = $_SESSION['tInvoice'] + round(0.13 * ($cost + $shipping) + ($cost + $shipping));
		}	

			echo "The total invoice is <b>$" . $_SESSION['tInvoice'] . "M CAD</b>.<br>";
	}
	else
	{
		if ($shipping == NULL)
			echo "You must choose a shipping plan!<br>";
		else if ($aw1p == NULL && $aw2p == NULL && $aw3p == NULL && $aw4p == NULL && $aw5p == NULL)
			echo "You must indicate the quantity you wish to purchase!<br>";
		else
		{
			echo "The cost before shipping and tax is <b>$" . $cost . "M CAD</b>.<br>";
			echo "The cost after shipping and tax is <b>$" . round(0.13 * ($cost + $shipping) + ($cost + $shipping)) . "M CAD</b>.<br>";
		}	
	
		echo "The total invoice is <b>$" . $_SESSION['tInvoice'] . "M CAD</b>.<br>";
	}



?>
