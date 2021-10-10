<?php $pagename="checkout"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-navbar.css">
	<link rel="stylesheet" href="../../../public/css/customer-footer.css">
	<link rel="stylesheet" href="../../../public/css/customer-checkout.css">
	<script src="../../../public/js/navbar.js" defer></script>
	<script src="../../../public/js/checkout.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Cart</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="checkout">
		<form>
		<div class="billing-details">
			<h2>Billing Details</h2>
			<div class="basic-details">
				<input type="text" name="firstname" required="" placeholder="First Name">
				<input type="text" name="lastname" placeholder="Last Name">
				<input type="text" name="companyname" placeholder="Company Name (Optional)">
				<input type="text" name="phonenumber" placeholder="Phone Number" required="">
			</div>
			<div class="radio-box">
			<h3>Order Reciving Method</h3>
			<div>
				<label onclick="getLocation(0)">
			 	 	 <input type="radio" name="delivery-type">
			 	 	 <div class="circle"></div>
			 	 	 <span>Pick up From Shop</span>
			 	 </label>
			 	 <label onclick="getLocation(1)">
			 	 	 <input type="radio" name="delivery-type">
			 	 	 <div class="circle"></div>
			 	 	 <span>Home Delivery</span>
			 	 </label>
			</div>
			 
			</div>
			<div class="location-details" id="location-details">
				<input type="text" name="address-line1" placeholder="Address Line 1" required="">
				<input type="text" name="address-line2" placeholder="Address Line 2" required="">
				<input type="text" name="address-line3" placeholder="Address Line 3">
			</div>
		</div>
		</form>
	</section>

	<?php require_once('footer.php'); ?>
</html>