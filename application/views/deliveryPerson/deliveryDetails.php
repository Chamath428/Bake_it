<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/deliveryPerson/deliveryPerson-orderDetails.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-footer.css">
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer ></script>
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
	<script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
          <?php include('deliveryheader.php'); ?>
    </section> 
    <div id=body>
        <div class="topic">Delivery Detilas</div>
        <div class="detail-container">
        <section class="order-details">
		<div class="basic-details">
			<table>
				<tr>
					<td>Order ID</td>
					<td>#Q117</td>
				</tr>
				<tr>
					<td>Placed Date</td>
					<td>03/09/2021</td>
				</tr>
				<tr>
					<td>Order Status</td>
					<td>Ongoing</td>
				</tr>
				<tr>
					<td>Reciving Method</td>
					<td><a href="">Home Delivery</a></td>
				</tr>
				<tr>
					<td>Delivery Person</td>
					<td><a href="">Dilantha Malagamuwa</a></td>
				</tr>
			</table>
		</div>

		<div class="food-details">		
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
								<img src="../../../public/images/b1.png">
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
								<img src="../../../public/images/b1.png">
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
 							<img src="../../../public/images/b1.png" width="40px" height="40px">
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
		</div>

		<div class="buttons">
			<button>Rate Order</button>
			<button><a href="">Re-Order</a></button>
		</div>

	</section>
        </div>

    </div>
    <section class="footer">
            <?php include('footerDP.php'); ?>  
    </section>
</body>
</html>