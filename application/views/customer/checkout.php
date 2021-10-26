<?php $pagename="checkout"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-checkout.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/message.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/checkout.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Checkout</title>
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
			<div class="radio-box" id="reciving-method">
			<h3>Order Reciving Method</h3>
			<div>
				<label onclick="getLocation(0)">
			 	 	 <input type="radio" name="delivery-type" checked="">
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

		<div class="desktop-cart">
			<div class="cart-containter">
				<table>
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>

					<tr>
						<td>
							<div class="product-container">
								<img src="<?php echo BASEURL ?>/public/images/b1.png">
								<div>
									<p>Small Burger</p>
								</div>
							</div>
						</td>
						<td>
							<p>150.00LKR</p>
						</td>
						<td>
							<div>
	 							<input type="text" name="" value="1" readonly="">
	 						</div>
						</td>
						<td>
							<p>150.00LKR</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="product-container">
								<img src="<?php echo BASEURL ?>/public/images/b1.png">
								<div>
									<p>ddd Burger</p>
								</div>
							</div>
						</td>
						<td>
							<p>150.00LKR</p>
						</td>
						<td>
							<div>
	 							<input type="text" name="" value="1" readonly="">
	 						</div>
						</td>
						<td>
							<p>150.00LKR</p>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="mobile-cart">
			<div class="cart-containterm">
 			<table>
 				<tr>
 					<td>
 						<div class="product-image">
 							<img src="<?php echo BASEURL ?>/public/images/b1.png" width="40px" height="40px">
 						</div>
 					</td>
 					<td></td>
 				</tr>
 				<tr>
 					<td>Product</td>
 					<td>aaa Burger</td>
 				</tr>
 				<tr>
 					<td>Price</td>
 					<td>150.00LKR</td>
 				</tr>
 				<tr>
 					<td>Quantity</td>
 					<td>
 						<div>
 							<input type="text" name="" value="1" readonly="">
 						</div>
 					</td>
 				</tr>
 				<tr>
 					<td>Total</td>
 					<td>150.00LKR</td>
 				</tr>
 			</table>
 		</div>
		</div>
		<div class="radio-box" id="payment-method">
			<h3>Payment Method</h3>
			<div>
				<label onclick="getPayment(0)">
			 	 	 <input type="radio" name="payment-type" checked="">
			 	 	 <div class="circle"></div>
			 	 	 <span>Cash</span>
			 	 </label>
			 	 <label onclick="getPayment(1)">
			 	 	 <input type="radio" name="payment-type">
			 	 	 <div class="circle"></div>
			 	 	 <span>Card</span>
			 	 </label>
			</div>
			<div class="payment-image" id="payment-image">
				<a href=""><img src="<?php echo BASEURL ?>/public/images/payhere.png"></a>
			</div>
			</div>
			<div class="placeorder">
				<input type="submit" name="placeorder" value="Place Order" onclick="showAlert('Prder Placed Succefully')">
			</div>
		</form>
	</section>

	<?php require_once('footer.php'); ?>
</html>