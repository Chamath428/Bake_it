<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-orderDetails.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-deliveries.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">
	<script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
	<script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveries.js"></script>
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

						<!-- $i =0;
                    foreach($data[0] as $key => $deliveryDetails) { php echo $deliveryDetails['order_id'];?>-->

						<tr>
							<td>Order ID</td>
							<td><?php echo $data[0]['order_id'] ?> </td>
						</tr>
						<tr>
							<td>Customer Name</td>
							<td><?php echo $data[0]['first_name'];
								echo $data[0]['last_name']; ?></td>
						</tr>
						<tr>
							<td>Contact Number</td>
							<td><?php echo $data[1] ?></td>
						</tr>
						<tr>
							<td>Order Status</td>
							<td>
								<?php if ($data[0]['order_status'] == 2) {
									echo " Order assgin to you";
								}elseif($data[0]['order_status'] == 3) {
									echo "Accepted the order";
								}elseif ($data[0]['order_status'] == 6) {
									echo "Completed the order";
								} ?>
							</td>
						</tr>
						<tr>
							<td>Location</td>
							<td><a href="<?php echo BASEURL ?>/public/images/deliveryPerson/map.png"><i class="fas fa-map-marker-alt"></i>Customer Location</a></td>
						</tr>
						<tr>
							<td>Payment</td>
							<td>
								<?php if ($data[0]['payment_type'] == 2) {
									echo "Card Payment";
								} else {
									echo "Cash Payment";
								} ?>
							</td>
						</tr>
					</table>
				</div>

				<div class="food-details">
					<div class="desktop-cart">
						<div class="cart-containter">
							<table>
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 0;
									foreach ($data[2] as $key => $delivery) { ?>
										<tr>
											<td>
												<div class="product-container">
													<img src="<?php echo BASEURL ?>/public/images/b1.png">
													<div>
														<p><?php echo $delivery['item_name'] ?></p>
													</div>
												</div>
											</td>
											<td>
												<p><?php echo $delivery['price'] ?></p>
											</td>
											<td>
												<div>
													<input type="text" name="" value="<?php echo $delivery['quantity'] ?>" readonly="">
												</div>
											</td>
											<td>
												<p><?php echo $delivery['price'] ?></p>
											</td>
										</tr>
									<?php
										$i++;
									} ?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="mobile-cart">
						<div class="cart-containterm">
							<table>
								<?php
								$i = 0;
								foreach ($data[2] as $key => $delivery) { ?>
									<tr>
										<td>
											<div class="product-image">
												<img src="<?php echo BASEURL ?>/public/images/b1.png" width="40px" height="40px">
											</div>
										</td>
									</tr>
									<tr>
										<td>Product</td>
										<td><?php echo $delivery['item_name'] ?></td>
									</tr>
									<tr>
										<td>Price</td>
										<td><?php echo $delivery['price'] ?></td>
									</tr>
									<tr>
										<td>Quantity</td>
										<td>
											<div>
												<input type="text" name="" value="<?php echo $delivery['quantity'] ?>" readonly="">
											</div>
										</td>
									</tr>
									<tr>
										<td>Total</td>
										<td><?php echo $delivery['price'] ?></td>
									</tr>
								<?php
									$i++;
								} ?>
							</table>
						</div>
					</div>
				</div>

				<div class="total-container">
					<table>
						<tr>
							<td>Sub Total(LKR)</td>
							<td><?php echo $data[3] ?></td>
						</tr>
						<tr>
							<td>Advanced Payment(LKR)</td>
							<td><?php echo $data[4] ?></td>
						</tr>
						<tr>
						<?php if($data[0]['order_status'] != 6 && $data[4] < $data[3]){?>
							<td>Rest Payment(LKR)</td>
							<td><?php echo $data[5] ?></td>
						<?php }elseif($data[0]['order_status'] == 6 && $data[3] < $data[4]){?>
							<td>Balance Payment(LKR)</td>
							<td><?php echo $data[7] ?></td>
						<?php } ?>
						</tr>
					</table>
				</div>
				<?php if($data[0]['order_status']==3 &&  $data[4] < $data[3]){?>
				<div class="total-container">
					<form action="<?php echo BASEURL . '/deliveryPersonDeliveriesController/getBalanceAmountAtDelivery/' . $data[0]['order_id']; ?>" method="POST">
						<table>
							<tr>
								<td>Paid Amount(LKR)</td>
								<td><input type="number" name="paid_amount"></td>
							</tr>
							<tr>
								<td><input type="submit" name="submit_paid_amount" value="Enter Paid Amount "></td>
								<!-- <td><button type="submit" name="submit_paid_amount" value="Enter paid amount">Enter paid amount</button></td> -->
							</tr>
							<tr>
								<td>Balance(LKR)</td>
								<td><?php echo $data[7] ?></td>
							</tr>
						</table>
					</form>
				</div>
				<?php } ?>
                    
				

				<div class="buttons">
					<?php if($data[0]['order_status']==3  && $data[4] >= $data[3]){?>
					<form action="<?php echo BASEURL . '/deliveryPersonDeliveriesController/completeDelivery/' . $data[0]['order_id']; ?>" method="POST">
						<button type="submit" name="orderStatus" value="6">Complete Delivery</button>
					</form>
					<?php } elseif($data[0]['order_status']==2){?>
					<form action="<?php echo BASEURL . '/deliveryPersonDeliveriesController/acceptDeliveriesAfterCheckingDetials/' . $data[0]['order_id']; ?>" method="POST">
                        <button class="accept_button">
                            Accept Order
                        </button>
					</form>        
				<?php } ?>
				</div>

			</section>
		</div>

	</div>
	<section class="footer">
		<?php include('footerDP.php'); ?>
	</section>
</body>

</html>