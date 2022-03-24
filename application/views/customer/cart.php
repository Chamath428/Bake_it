<?php $pagename="cart"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-cart.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-notification.css">
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

	<!-- Qucik Cart starts -->
		
		<div class="cart" id="quick-cart">
			<?php if (!empty($_SESSION["quick_cart"])){ 
				$subtotal=0;
				$itemCount=0;
				?>
			<form method="post" action="<?php echo BASEURL."/cartController/updateCart" ?>">
			<div class="cart-containter">
			<table>
				<tr>
					<th></th>
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
						<button type="button" onclick="confirmDeletion(<?php echo $key; ?>)"><i class="far fa-times-circle"></i></button>
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
						<div class="quantity-feilds">
							<button id="plus" type="button"><i class="fas fa-minus" id="fa-minus" onclick="decrementValue('qin-<?php echo $key ?>')"></i></button>
							<input type="hidden" name="qin_name-<?php echo $itemCount ?>" value="<?php echo $key; ?>">
 							<input type="text" name="qin-<?php echo $key; ?>" value="<?php echo $item['quantity']; ?>" class="qin" id="qin-<?php echo $key; ?>" min="0">
 							<button id="minus" type="button"><i class="fas fa-plus" id="fa-plus" onclick="incrementValue('qin-<?php echo $key ?>')"></i></button>
 						</div>
					</td>
					<td>
						<p><?php echo "RS.".$item['price']*$item['quantity']; ?></p>
					</td>
				</tr>
			<?php 
				$subtotal+=$item['price']*$item['quantity'];
			} ?>
			</table>
			<input type="hidden" name="item_count" value="<?php echo $itemCount; ?>">
			<div class="button-container">
				<button type="button" onclick="emptyCart()">Empty Cart</button>
				<input type="submit" name="Update Cart" value="Update Cart">
			</div>
		</div>
		</form>
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
	
	<!-- Quick Cart ends -->


	<!-- Special Cart starts -->

	<div class="cart" id="special-cart">
				<?php if (!empty($_SESSION["special_cart"])){ 
				$subtotal=0;
				$itemCount=0;
				?>
			<form method="post" action="<?php echo BASEURL."/cartController/updateSpecailCart" ?>">
			<div class="cart-containter">
			<table>
				<tr>
					<th></th>
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
						<button type="button" onclick="confirmSpecialDeletion(<?php echo $key; ?>)"><i class="far fa-times-circle"></i></button>
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
						<div class="quantity-feilds">
							<button id="plus" type="button"><i class="fas fa-minus" id="fa-minus" onclick="decrementValue('qins-<?php echo $key ?>')"></i></button>
							<input type="hidden" name="qin_name-<?php echo $itemCount ?>" value="<?php echo $key; ?>">
 							<input type="text" name="qin-<?php echo $key; ?>" value="<?php echo $item['quantity']; ?>" class="qin" id="qins-<?php echo $key; ?>" min="0">
 							<button id="minus" type="button"><i class="fas fa-plus" id="fa-plus" onclick="incrementValue('qins-<?php echo $key ?>')"></i></button>
 						</div>
					</td>
					<td>
						<p><?php echo "RS.".$item['price']*$item['quantity']; ?></p>
					</td>
				</tr>
			<?php 
				$subtotal+=$item['price']*$item['quantity'];
			} ?>
			</table>
			<input type="hidden" name="item_count" value="<?php echo $itemCount; ?>">
			<div class="button-container">
				<button type="button" onclick="emptySpecialCart()">Empty Cart</button>
				<input type="submit" name="Update Cart" value="Update Cart">
			</div>
		</div>
		</form>
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
			<?php if($subtotal>=4000){ ?>
			<a href="<?php echo BASEURL.'/checkoutController/specialCheckout' ?>"><button type="button">Proceed to Checkout</button></a>
		<?php }else{ ?>
			<p>Your grand total should be equal or grater than to RS.4000.00 to checkout a special order</p>
		<?php } ?>
		</div>
		<?php } else{?>
			<div class="no-burger">
				<span>Your special cart is empty!</span>
			</div>
		<?php } ?>
	</div>
 </section> 
<!-- Special Cart ends -->

<!-- Mobile cart starts -->
<!-- Mobile quick cart starts -->

 <section class="mobile-cart">
 	<div class="form-btnm">
			<span onclick="getQuickCartm()" style="color: rgba(255, 138, 0,1);" id="quick-order-span">Quick Order Cart</span>
			<span onclick="getSpecialCartm()" id="special-order-span">Special Order Cart</span>
			<!-- <hr class="indicatorm">  -->
	</div>
 	<div class="cartm" id="quick-cartm">
		<?php if (!empty($_SESSION["quick_cart"])){ 
				$subtotal=0;
				$itemCount=0;
				?>
			<form method="post" action="<?php echo BASEURL."/cartController/updateCart" ?>">
 		<div class="cart-containterm">
			<?php foreach ($_SESSION['quick_cart'] as $key => $item) {
					$itemCount++; ?>
 			<table>
 				<tr>
 					<td id="remove-btnm">
						<button type="button" onclick="confirmDeletion(<?php echo $key; ?>)"><i class="far fa-times-circle"></i></button>
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
 							<button id="plus" type="button"><i class="fas fa-minus" id="fa-minus" onclick="decrementValue('qinm-<?php echo $key ?>')"></i></button>
							<input type="hidden" name="qin_name-<?php echo $itemCount ?>" value="<?php echo $key; ?>">
 							<input type="text" name="qin-<?php echo $key; ?>" value="<?php echo $item['quantity']; ?>" class="qin" id="qinm-<?php echo $key; ?>" min="0">
 							<button id="minus" type="button"><i class="fas fa-plus" id="fa-plus" onclick="incrementValue('qinm-<?php echo $key ?>')"></i></button>
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
			} ?>
			<input type="hidden" name="item_count" value="<?php echo $itemCount; ?>">
 			<div class="button-container">
				<button type="button" onclick="emptyCart()">Empty Cart</button>
				<input type="submit" name="Update Cart" value="Update Cart">
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
			<a href="<?php echo BASEURL.'/checkoutController' ?>"><button type="button">Proceed to Checkout</button></a>
		</div>
		<?php } else{?>
			<div class="no-burger">
				<span>Your quick cart is empty!</span>
			</div>
		<?php } ?>
 	</div>

<!-- MObile quick cart ends -->


<!-- Mobile special cart starts -->

 	<div class="cartm" id="special-cartm">
 		<?php if (!empty($_SESSION["special_cart"])){ 
				$subtotal=0;
				$itemCount=0;
				?>
			<form method="post" action="<?php echo BASEURL."/cartController/updateSpecailCart" ?>">
 		<div class="cart-containterm">
			<?php foreach ($_SESSION['special_cart'] as $key => $item) {
					$itemCount++; ?>
 			<table>
 				<tr>
 					<td id="remove-btnm">
						<button type="button" onclick="confirmDeletion(<?php echo $key; ?>)"><i class="far fa-times-circle"></i></button>
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
 							<button id="plus" type="button"><i class="fas fa-minus" id="fa-minus" onclick="decrementValue('qinsm-<?php echo $key ?>')"></i></button>
							<input type="hidden" name="qin_name-<?php echo $itemCount ?>" value="<?php echo $key; ?>">
 							<input type="text" name="qin-<?php echo $key; ?>" value="<?php echo $item['quantity']; ?>" class="qin" id="qinsm-<?php echo $key; ?>" min="0">
 							<button id="minus" type="button"><i class="fas fa-plus" id="fa-plus" onclick="incrementValue('qinsm-<?php echo $key ?>')"></i></button>
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
			} ?>
			<input type="hidden" name="item_count" value="<?php echo $itemCount; ?>">
 			<div class="button-container">
				<button type="button" onclick="emptySpecialCart()">Empty Cart</button>
				<input type="submit" name="Update Cart" value="Update Cart">
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
			<?php if($subtotal>=4000){ ?>
			<a href="<?php echo BASEURL.'/checkoutController' ?>"><button type="button">Proceed to Checkout</button></a>
		<?php }else{ ?>
			<p>Your grand total should be equal or grater than to RS.4000.00 to checkout a special order</p>
		<?php } ?>
		</div>
		<?php } else{?>
			<div class="no-burger">
				<span>Your special cart is empty!</span>
			</div>
		<?php } ?>
 	</div>
 
 </section>

	<?php require_once('footer.php'); ?>
	 <?php require_once('notification.php'); ?>
</html>


