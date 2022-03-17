<?php $pagename="special checkout"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-checkout.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/message.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/checkout.js" defer></script>
	<link href=
    "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
        rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Checkout</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="checkout">

		<?php if (isset($data['error'])){?>
			<div class="danger-alert">
			  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			  <p><?php echo $data['error']; ?></p>
			</div>
			<?php } ?>

		<form method="post" action="<?php echo BASEURL."/checkoutController/placSpecialeOrder" ?>">
		<div class="billing-details">

			<h2>Billing Details</h2>
			<div class="basic-details">
				<input type="text" name="first_name" required="" placeholder="First Name" value="<?php if(isset($_SESSION['first_name']))echo $_SESSION['first_name'] ?>">
				<input type="text" name="last_name" placeholder="Last Name" value="<?php if(isset($_SESSION['last_name']))echo $_SESSION['last_name'] ?>">
				<input type="text" name="company_name" placeholder="Company Name (Optional)">
				<input type="text" name="phone_number" placeholder="Phone Number" required="" value="<?php if(isset($_SESSION['contact_number']))echo $_SESSION['contact_number'] ?>">
			</div>
			<div class="radio-box" id="reciving-method">
			<h3>Order Reciving Method</h3>
			<div>
				<label onclick="getLocation(0)">
			 	 	 <input type="radio" name="delivery_type" checked="" value="1">
			 	 	 <div class="circle"></div>
			 	 	 <span>Pick up From Shop</span>
			 	 </label>
			 	 <label onclick="getLocation(1)">
			 	 	 <input type="radio" name="delivery_type" value="2">
			 	 	 <div class="circle"></div>
			 	 	 <span>Home Delivery</span>
			 	 </label>
			</div>
			</div>
			<div class="location-details" id="location-details">
				<input type="text" name="address_line1" placeholder="Address Line 1" value="<?php if(isset($_SESSION['address1']))echo $_SESSION['address1'] ?>">
				<input type="text" name="address_line2" placeholder="Address Line 2" value="<?php if(isset($_SESSION['address2']))echo $_SESSION['address2'] ?>">
				<input type="text" name="address_line3" placeholder="Address Line 3"value="<?php if(isset($_SESSION['address3']))echo $_SESSION['address3'] ?>">
			</div>

			<div class="date-details">
				<h3>Required Date and Time</h3>
				<div>
					<input type="date" name="req_date" id="req-date" onkeydown="return false" required>
					<input type="time" name="req_time" required>
				</div>
			</div>

			<div class="branches">
				<h3>Select the neartest branch to you</h3>

				<select name="branch_id">
					<?php foreach ($data['branches'] as $key => $branch) {?>
						<option value="<?php echo $branch['branch_id']; ?>"><?php 
							switch ($branch['branch_id']) {
								case '1':
									echo "Kasbewa";
									break;
								case '2':
									echo "Baththaramulla";
									break;
								case '3':
									echo "Piliyandala";
									break;
								
								default:
									echo "Not specified";
									break;
							}
						 ?></option>
					<?php  } ?>
				</select>
			</div>

		</div>

		<div class="desktop-cart">
			<?php if (!empty($_SESSION["special_cart"])){ 
				$subtotal=0;
				$itemCount=0;
				?>
			<div class="cart-containter">
				<table>
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>

					<?php foreach ($_SESSION['special_cart'] as $key => $item) {
					$itemCount++;
					?>
				<tr>
					<td>
						<div class="product-container">
							<img src="<?php echo BASEURL ?>/public/images/b1.png">
							<div>
								<p><?php echo $item['name']; ?></p>
							</div>
						</div>
					</td>
					<td>
						<p><?php echo "RS.".$item['price']; ?></p>
					</td>
					<td>
						<div class="quantity-feilds">
 							<input type="text" readonly="" name="qin-<?php echo $key; ?>" value="<?php echo $item['quantity']; ?>" class="qin" id="qin-<?php echo $key; ?>" min="0">
 						</div>
					</td>
					<td>
						<p><?php echo "RS.".$item['price']*$item['quantity']; ?></p>
					</td>
				</tr>
			<?php 
				$subtotal+=$item['price']*$item['quantity'];
			}} ?>

				</table>
			</div>
		</div>


		<div class="mobile-cart">
				<?php if (!empty($_SESSION["special_cart"])){ 
				$subtotal=0;
				$itemCount=0;
				?>
			<div class="cart-containterm">
				<?php foreach ($_SESSION['special_cart'] as $key => $item) {
					$itemCount++; ?>
 					<table>
 				<tr>
 					<td>
 						<div class="product-image">
 							<img src="<?php echo BASEURL ?>/public/images/b1.png" width="40px" height="40px">

 						</div>
 					</td>
 				</tr>
 				<tr>
 					<td>Product</td>
 					<td><?php echo $item['name']; ?></td>
 				</tr>
 				<tr>
 					<td>Price</td>
 					<td><?php echo $item['price']; ?></td>
 				</tr>
 				<tr>
 					<td>Quantity</td>
 					<td>
 						<div>
 							<input type="text" readonly="" name="qin-<?php echo $key; ?>" value="<?php echo $item['quantity']; ?>" class="qin" id="qinm-<?php echo $key; ?>" min="0">
 						</div>
 					</td>
 				</tr>
 				<tr>
 					<td>Total</td>
 					<td><?php echo "RS.".$item['price']*$item['quantity']; ?></td>
 				</tr>
 			</table>
 			<?php 
				$subtotal+=$item['price']*$item['quantity'];
			}} ?>

 		</div>
		</div>

		
			<?php if (isset($_SESSION['islogged'])) {?>
				<div class="radio-box" id="registered-payment">
					<h3>How much would you like to pay?</h3>
					<div>
						<label>
					 	 	 <input type="radio" name="registered_payment" checked="" value="1">
					 	 	 <div class="circle"></div>
					 	 	 <span>Advance Payment (Half of the grand total)</span>
					 	 </label>
					 	 <label>
					 	 	 <input type="radio" name="registered_payment" value="2">
					 	 	 <div class="circle"></div>
					 	 	 <span>Full payment</span>
					 	 </label>
					</div>
					<div class="payment-image" id="payment-image">
						<a href=""><img src="<?php echo BASEURL ?>/public/images/payhere.png"></a>
					</div>
				</div>
			<?php  }else{ ?>
				<div class="radio-box" id="unregistered-payment">
					<h3>How much would you like to pay?</h3>
					<div>
					 	 <label>
					 	 	 <input type="radio" name="unregistered_payment" value="2" checked>
					 	 	 <div class="circle"></div>
					 	 	 <span>Full payment</span>
					 	 </label>
					</div>
					<div class="payment-image" id="payment-image">
						<a href=""><img src="<?php echo BASEURL ?>/public/images/payhere.png"></a>
					</div>
				</div>
			<?php } ?>
		

		<div class="total-container">
				<table>
					<tr>
						<td>Subtotal</td>
						<td><?php echo $subtotal.".00 LKR"; ?></td>
					</tr>
					<tr>
						<td>Delivery Tax</td>
						<td>00.00 LKR</td>
					</tr>
					<tr>
						<td>Grand Total</td>
						<td><input type="hidden" readonly="" name="subtotal" value="<?php echo $subtotal; ?>"><input type="text" readonly="" name="subtotal2" value="<?php echo $subtotal.".00 LKR"; ?>"></td>
					</tr>
				</table>
			</div>

			<div class="placeorder">
				<input type="submit" name="placeorder" value="Place Order" >
			</div>
		</form>
	</section>

	<?php require_once('footer.php'); ?>
</html>