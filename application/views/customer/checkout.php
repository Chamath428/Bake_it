<?php $pagename="checkout"; ?>
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

		<form method="post" action="<?php echo BASEURL."/checkoutController/placeOrder" ?>">
		<div class="billing-details">

			<h2>Billing Details</h2>
			<div class="basic-details">
				<input type="text" id="first_name" name="first_name" required="" placeholder="First Name" value="<?php if(isset($_SESSION['first_name']))echo $_SESSION['first_name'] ?>" oninput="changeValues('first_name','first_name_payhere')" >
				<input type="text" id="last_name" name="last_name" placeholder="Last Name" value="<?php if(isset($_SESSION['last_name']))echo $_SESSION['last_name'] ?>" oninput="changeValues('last_name','last_name_payhere')">
				<input type="text" name="company_name" placeholder="Company Name (Optional)">
				<input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required="" value="<?php if(isset($_SESSION['contact_number']))echo $_SESSION['contact_number'] ?>" onkeypress="javascript:return isNumber(event)" oninput="changeValues('phone_number','phone_payhere')">
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
		</div>

		<div class="desktop-cart">
			<?php if (!empty($_SESSION["quick_cart"])){ 
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

					<?php foreach ($_SESSION['quick_cart'] as $key => $item) {
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
				<?php if (!empty($_SESSION["quick_cart"])){ 
				$subtotal=0;
				$itemCount=0;
				?>
			<div class="cart-containterm">
				<?php foreach ($_SESSION['quick_cart'] as $key => $item) {
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

		<div class="radio-box" id="payment-method">
			<h3>Payment Method</h3>
			<div>
				<label onclick="getPayment(0)">
			 	 	 <input type="radio" name="payment_type" checked="" value="1">
			 	 	 <div class="circle"></div>
			 	 	 <span>Cash</span>
			 	 </label>
			 	 <label onclick="getPayment(1)">
			 	 	 <input type="radio" name="payment_type" value="2">
			 	 	 <div class="circle"></div>
			 	 	 <span>Card</span>
			 	 </label>
			</div>
			
			</div>

			<div class="total-container">
				<table>
					<tr>
						<td>Subtotal (LKR)</td>
						<td><input id="subtotal" type="text" readonly="" value="<?php echo $subtotal ?>"></td>
					</tr>
					<tr>
						<td>Delivery Tax (LKR)</td>
						<td><input id="delivery-tax" type="text" readonly="" name="delivery-tax" value="00"></td>
					</tr>
					<tr>
						<td>Grand Total (LKR)</td>
						<td><input type="hidden" id="grandtotal" readonly="" name="subtotal" value="<?php echo $subtotal; ?>"><input type="text" readonly="" id="grandtotal2" name="subtotal2" value="<?php echo $subtotal; ?>"></td>
					</tr>
				</table>
			</div>

			<div class="placeorder">
				<input type="submit" class="placeorder-submit" id="placeorder" name="placeorder" value="Place Order" >
				</form>
				<div class="payhere" id="payhere">

					<form method="post" target="_blank" action="https://sandbox.payhere.lk/pay/checkout">   
					    <input type="hidden" name="merchant_id" value="1219951"> 
					    <input type="hidden" name="return_url" value="http://sample.com/return">
					    <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
					    <input type="hidden" name="notify_url" value="http://sample.com/notify">  

					    <input type="hidden" name="order_id" value="ItemNo12345">
					    <input type="hidden" name="items" value="Quick Order">
					    <input type="hidden" name="currency" value="LKR">
					    <input type="hidden" id="amount" name="amount" value="<?php echo $subtotal; ?>">  

					    <input type="hidden" id="first_name_payhere" name="first_name" value="<?php if(isset($_SESSION['first_name']))echo $_SESSION['first_name'] ?>">
					    <input type="hidden" id="last_name_payhere" name="last_name" value="<?php if(isset($_SESSION['last_name']))echo $_SESSION['last_name'] ?>">
					    <input type="hidden" name="email" value="samanp@gmail.com">
					    <input type="hidden" id="phone_payhere" name="phone" value="<?php if(isset($_SESSION['contact_number']))echo $_SESSION['contact_number'] ?>">
					    <input type="hidden" id="address_payhere" name="address" value="<?php if(isset($_SESSION['address1']))echo $_SESSION['address1'] ?>">
					    <input type="hidden" id="city_payhere" name="city" value="<?php if(isset($_SESSION['address2']))echo $_SESSION['address2'] ?>">
					    <input type="hidden" name="country" value="Sri Lanka">

						<button type="submit" onclick="showSubmitQuick()"><img src="<?php echo BASEURL ?>/public/images/payhere.png"></button> 

					</form> 
				</div>
			</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>