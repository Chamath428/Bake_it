<?php $pagename="cart"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-navbar.css">
	<link rel="stylesheet" href="../../../public/css/customer-footer.css">
	<link rel="stylesheet" href="../../../public/css/customer-cart.css">
	<script  src="../../../public/js/cart.js" defer></script>
	<script src="../../../public/js/navbar.js" defer></script>
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
							<img src="../../../public/images/b1.png">
							<div>
								<p>Small Burger</p>
								<!-- <a href="#"><button>Remove</button></a> -->
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
						<button><i class="far fa-times-circle"></i></button>
					</td>
					<td>
						<div class="product-container">
							<img src="../../../public/images/b1.png">
							<div>
								<p>ddd Burger</p>
								<!-- <a href="#"><button>Remove</button></a> -->
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
			<a href="#"><button>Proceed to Checkout</button></a>
		</div>
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
							<img src="../../../public/images/b1.png">
							<div>
								<p>Small Burger</p>
								<!-- <a href="#"><button>Remove</button></a> -->
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
							<img src="../../../public/images/b1.png">
							<div>
								<p>Small Burger</p>
								<!-- <a href="#"><button>Remove</button></a> -->
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
			<a href="#"><button>Proceed to Checkout</button></a>
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
 		<div class="cart-containterm">
 			<table>
 				<tr>
 					<td id="remove-btnm">
						<button><i class="far fa-times-circle"></i></button>
					</td>
 					<td>
 						<div class="product-image">
 							<img src="../../../public/images/b1.png" width="40px" height="40px">

 						</div>
 					</td>
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
			<a href="#"><button>Proceed to Checkout</button></a>
		</div>
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
 							<img src="../../../public/images/b1.png" width="40px" height="40px">

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
 							<img src="../../../public/images/b1.png" width="40px" height="40px">

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
			<a href="#"><button>Proceed to Checkout</button></a>
		</div>
 	</div>
 
 </section>

	<?php require_once('footer.php'); ?>
</html>

