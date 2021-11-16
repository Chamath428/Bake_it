<?php $pagename="cart"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-cart.css">
	<script  src="<?php echo BASEURL ?>/public/js/customer/cart.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/message.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Cart</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

 <section class="desktop-cart"> 
		<div class="form-btn">
			<span onclick="getQuickCart()">Quick Order Cart</span>
			<span onclick="getSpecialCart()">Special Order Cart</span>
			<hr class="indicator">
		</div>

		<!-- Qucik Cart starts here -->
		
		<div class="cart" id="quick-cart">
			<?php if (!empty($_SESSION["quick_cart"])){ 
				$subtotal=0;
				?>
			<div class="cart-containter">
			<table>
				<tr>
					<th></th>
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>

				<?php foreach ($_SESSION['quick_cart'] as $key => $value) {
					foreach ($value as $key => $item) {?>
				<tr>
					<td>
						<button><i class="far fa-times-circle"></i></button>
					</td>
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
						<div>
							<button id="plus"><i class="fas fa-minus" id="fa-minus"></i></button>
 							<input type="number" name="" value="<?php echo $item['quantity']; ?>" id="qin">
 							<button id="minus" onclick="incrementValue()"><i class="fas fa-plus" id="fa-plus"></i></button>
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
			<div class="button-container">
				<button onclick="showAlert('Remove All the items')">Empty Cart</button>
				<button onclick="showAlert('Cart Updated Succesfully')">Update Cart</button>
			</div>
		</div>
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
					<td><?php echo $subtotal.".00 LKR"; ?></td>
				</tr>
			</table>
			<a href="<?php echo BASEURL.'/checkoutController' ?>"><button>Proceed to Checkout</button></a>
		</div>
		<?php } else{?>
			<div class="no-burger">
				<span>Your quick cart is empty!</span>
			</div>
		<?php } ?>
	</div>
	
	<!-- Quick Cart ends here -->
	<!-- Special Cart starts here -->

	<div class="cart" id="special-cart">
			<div class="cart-containter">
			<table>
				<tr>
					<th></th>
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>

				<tr>
					<td>
						<button><i class="far fa-times-circle"></i></button>
					</td>
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
 							<button id="plus"><i class="fas fa-minus" id="fa-minus"></i></button>
 							<input type="number" name="" value="1" id="qin">
 							<button id="minus" onclick="incrementValue()"><i class="fas fa-plus" id="fa-plus"></i></button>
 						</div>
					</td>
					<td>
						<p>150.00LKR</p>
					</td>
				</tr>
				<tr>
					<td>
						<button><i class="far fa-times-circle"></i></i></button>
					</td>
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
 							<button id="plus"><i class="fas fa-minus" id="fa-minus"></i></button>
 							<input type="number" name="" value="1" id="qin">
 							<button id="minus" onclick="incrementValue()"><i class="fas fa-plus" id="fa-plus"></i></button>
 						</div>
					</td>
					<td>
						<p>150.00LKR</p>
					</td>
				</tr>
			</table>
			<div class="button-container">
				<button onclick="showAlert('Remove All the items')">Empty Cart</button>
				<button onclick="showAlert('Cart Updated Succesfully')">Update Cart</button>
			</div>
		</div>

		<div class="total-container">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>300.00 LKR</td>
				</tr>
				<tr>
					<td>Delivery Tax</td>
					<td>00.00 LKR</td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td>300.00 LKR</td>
				</tr>
			</table>
			<a href="<?php echo BASEURL.'/checkoutController' ?>"><button>Proceed to Checkout</button></a>
		</div>
	</div>
 </section> 


<!-- Mobile cart starts here -->

 <section class="mobile-cart">
 	<div class="form-btnm">
			<span onclick="getQuickCartm()" style="color: rgba(255, 138, 0,1);" id="quick-order-span">Quick Order Cart</span>
			<span onclick="getSpecialCartm()" id="special-order-span">Special Order Cart</span>
			<!-- <hr class="indicatorm">  -->
	</div>
 	<div class="cartm" id="quick-cartm">
		<?php if (!empty($_SESSION["quick_cart"])){ 
			$subtotal=0;
		?>
 		<div class="cart-containterm">
			<?php foreach ($_SESSION['quick_cart'] as $key => $value) {
			foreach ($value as $key => $item) {?>
 			<table>
 				<tr>
 					<td id="remove-btnm">
						<button><i class="far fa-times-circle"></i></button>
					</td>
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
 							<button id="plus"><i class="fas fa-minus" id="fa-minus"></i></button>
 							<input type="number" name="" value="<?php echo $item['quantity']; ?>" id="qin">
 							<button id="minus" onclick="incrementValue()"><i class="fas fa-plus" id="fa-plus"></i></button>
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
 			<div class="button-container">
				<button>Empty Cart</button>
				<button>Update Cart</button>
			</div>
 		</div>
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
					<td><?php echo $subtotal.".00 LKR"; ?></td>
				</tr>
			</table>
			<a href="<?php echo BASEURL.'/checkoutController' ?>"><button>Proceed to Checkout</button></a>
		</div>
		<?php } else{?>
			<div class="no-burger">
				<span>Your quick cart is empty!</span>
			</div>
		<?php } ?>
 	</div>

 	<div class="cartm" id="special-cartm">
 		<div class="cart-containterm">
 			<table>
 				<tr>
 					<td id="remove-btnm">
						<button><i class="far fa-times-circle"></i></button>
					</td>
 					<td>
 						<div class="product-image">
 							<img src="<?php echo BASEURL ?>/public/images/b1.png" width="40px" height="40px">

 						</div>
 					</td>
 				</tr>
 				<tr>
 					<td>Product</td>
 					<td>Samll Burger</td>
 				</tr>
 				<tr>
 					<td>Price</td>
 					<td>150.00LKR</td>
 				</tr>
 				<tr>
 					<td>Quantity</td>
 					<td>
 						<div>
 							<button id="plus"><i class="fas fa-minus" id="fa-minus"></i></button>
 							<input type="number" name="" value="1" id="qin">
 							<button id="minus" onclick="incrementValue()"><i class="fas fa-plus" id="fa-plus"></i></button>
 						</div>
 					</td>
 				</tr>
 				<tr>
 					<td>Total</td>
 					<td>150.00LKR</td>
 				</tr>
 			</table>
 			<table>
 				<tr>
 					<td id="remove-btnm">
						<button><i class="far fa-times-circle"></i></button>
					</td>
 					<td>
 						<div class="product-image">
 							<img src="<?php echo BASEURL ?>/public/images/b1.png" width="40px" height="40px">

 						</div>
 					</td>
 				</tr>
 				<tr>
 					<td>Product</td>
 					<td>Samll Burger</td>
 				</tr>
 				<tr>
 					<td>Price</td>
 					<td>150.00LKR</td>
 				</tr>
 				<tr>
 					<td>Quantity</td>
 					<td>
 						<div>
 							<button id="plus"><i class="fas fa-minus" id="fa-minus"></i></button>
 							<input type="number" name="" value="1" id="qin">
 							<button id="minus" onclick="incrementValue()"><i class="fas fa-plus" id="fa-plus"></i></button>
 						</div>
 					</td>
 				</tr>
 				<tr>
 					<td>Total</td>
 					<td>150.00LKR</td>
 				</tr>
 			</table>
 			<div class="button-container">
				<button>Empty Cart</button>
				<button>Update Cart</button>
			</div>
 		</div>
 		<div class="total-container">
			<table>
				<tr>
					<td>Subtotal</td>
					<td>300.00 LKR</td>
				</tr>
				<tr>
					<td>Delivery Tax</td>
					<td>00.00 LKR</td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td>300.00 LKR</td>
				</tr>
			</table>
			<a href="<?php echo BASEURL.'/checkoutController' ?>"><button>Proceed to Checkout</button></a>
		</div>
 	</div>
 
 </section>

	<?php require_once('footer.php'); ?>
</html>

	<?php require_once('footer.php'); ?>
</html>

