<?php $pagename='myorders'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-myorders.css">
	<script  src="<?php echo BASEURL ?>/public/js/customer/myorder.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>My Orders</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="desktop-orders">
		<div class="order-btn">
			<span onclick="getQuickOrder()">Quick Orders</span>
			<span onclick="getSpecialOrder()">Special Orders</span>
			<hr class="indicator">
		</div>

		<div class="order-container" id="quick-order">
			<?php if (!empty($data[1])) {?>
				<table>
					<tr>
						<th>Order ID</th>
						<th>Grand Total</th>
						<th>Placed Date</th>
						<th>Order Status</th>
					</tr>
				<?php foreach ($data[1] as $key => $order) { ?>
					<tr>
						<td><a href="<?php echo BASEURL."/myordersController/showOrderDetails/".$order['order_id']."/".$order['menu_id']?>"><?php echo $order['order_id'] ?></a></td>
						<td><?php echo $order['total_amount']; ?></td>
						<td><?php echo substr($order['placed_date_and_time'], 0,10); ?></td>
						<td><?php switch ($order['order_status']) {
							case '1':
								echo "Pending to accept";
								break;
							case '2':
								echo "Accepted";
								break;
							case '3':
								echo "On the way";
								break;
							case '4':
								echo "Send order to the bakery";
								break;
							case '5':
								echo "Cooking Completed";
								break;
							case '6':
								echo "Declined by the shop";
								break;
							case '7':
								echo "Cancled";
								break;
							
							default:
								echo "Order Status";
								break;
						} ?></td>
					</tr>
				<?php  } ?>
				</table>
			<?php  }else{ ?>
				<div class="no-order">
					<span>No quick orders to show!</span>
				</div>
			<?php } ?>
		</div>


		<div class="order-container" id="specia-order">
			<?php if (!empty($data[2])) {?>
				<table>
					<tr>
						<th>Order ID</th>
						<th>Grand Total</th>
						<th>Placed Date</th>
						<th>Order Status</th>
					</tr>
				<?php foreach ($data[2] as $key => $order) { ?>
					<tr>
						<td><a href="<?php echo BASEURL."/myordersController/showOrderDetails/".$order['order_id']."/".$order['menu_id']?>"><?php echo $order['order_id'] ?></a></td>
						<td><?php echo $order['total_amount'].".00 LKR"?></td>
						<td><?php echo substr($order['placed_date_and_time'], 0,10); ?></td>
						<td><?php switch ($order['order_status']) {
							case '1':
								echo "Pending to accept";
								break;
							case '2':
								echo "Accepted";
								break;
							case '3':
								echo "On the way";
								break;
							case '4':
								echo "Send order to the bakery";
								break;
							case '5':
								echo "Cooking Completed";
								break;
							case '6':
								echo "Declined by the shop";
								break;
							case '7':
								echo "Cancled";
								break;
							
							default:
								echo "Order Status";
								break;
						} ?></td>
					</tr>
				<?php  } ?>
				</table>
			<?php  }else{ ?>
				<div class="no-order">
					<span>No special orders to show!</span>
				</div>
			<?php } ?>
		</div>


	</section>

	<section class="mobile-orders">
		<div class="order-btnm">
			<span onclick="getQuickCartm()" id="quick-order-span">Quick Orders</span>
			<span onclick="getSpecialOrderm()" id="special-order-span">Special Orders</span>
		</div>

		<div class="order-container" id="quick-orderm">
			<?php if (!empty($data[1])) {
				foreach ($data[1] as $key => $order) {?>
				<table>
					<tr>
						<td>Order ID</td>
						<td><a href="<?php echo BASEURL."/myordersController/showOrderDetails"?>"><?php echo $order['order_id'] ?></a></td>
					</tr>
					<tr>
						<td>Grand Total</td>
						<td><?php echo $order['total_amount'] ?></td>
					</tr>
					<tr>
						<td>Placed Date</td>
						<td><?php echo substr($order['placed_date_and_time'], 0,10); ?></td>
					</tr>
					<tr>
						<td>Order Status</td>
						<td><?php switch ($order['order_status']) {
							case '1':
								echo "Pending to accept";
								break;
							case '2':
								echo "Accepted";
								break;
							case '3':
								echo "On the way";
								break;
							case '4':
								echo "Send order to the bakery";
								break;
							case '5':
								echo "Cooking Completed";
								break;
							case '6':
								echo "Declined by the shop";
								break;
							case '7':
								echo "Cancled";
								break;
							
							default:
								echo "Order Status";
								break;
						} ?></td>
					</tr>
				</table>
			<?php  }}else{ ?>
				<div class="no-order">
					<span>No quick orders to show!</span>
				</div>
			<?php } ?>
		</div>

		<div class="order-container" id="specia-orderm">
<?php if (!empty($data[2])) {
				foreach ($data[2] as $key => $order) {?>
				<table>
					<tr>
						<td>Order ID</td>
						<td><a href="<?php echo BASEURL."/myordersController/showOrderDetails/".$order['order_id']?>"><?php echo $order['order_id'] ?></a></td>
					</tr>
					<tr>
						<td>Grand Total</td>
						<td><?php echo $order['total_amount'] ?></td>
					</tr>
					<tr>
						<td>Placed Date</td>
						<td><?php echo substr($order['placed_date_and_time'], 0,10); ?></td>
					</tr>
					<tr>
						<td>Order Status</td>
						<td><?php switch ($order['order_status']) {
							case '1':
								echo "Pending to accept";
								break;
							case '2':
								echo "Accepted";
								break;
							case '3':
								echo "On the way";
								break;
							case '4':
								echo "Send order to the bakery";
								break;
							case '5':
								echo "Cooking Completed";
								break;
							case '6':
								echo "Declined by the shop";
								break;
							case '7':
								echo "Cancled";
								break;
							
							default:
								echo "Order Status";
								break;
						} ?></td>
					</tr>
				</table>
			<?php  }}else{ ?>
				<div class="no-order">
					<span>No quick orders to show!</span>
				</div>
			<?php } ?>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>