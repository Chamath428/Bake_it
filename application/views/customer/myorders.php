<?php $pagename='myorders'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-myorders.css">
	<script  src="<?php echo BASEURL ?>/public/js/myorder.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/navbar.js" defer></script>
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
			<table>
				<tr>
					<th>Order ID</th>
					<th>Grand Total</th>
					<th>Placed Date</th>
					<th>Order Status</th>
				</tr>
				<tr>
					<td><a href="orderdetails.php">#Q117</a></td>
					<td>1500.00LKR</td>
					<td>03/09/2021</td>
					<td>Ongoing</td>
				</tr>
				<tr>
					<td><a href="orderdetails.php">#Q118</a></td>
					<td>1600.00LKR</td>
					<td>01/09/2021</td>
					<td>Completed</td>
				</tr>
			</table>
		</div>
		<div class="order-container" id="specia-order">
			<table>
				<tr>
					<th>Order ID</th>
					<th>Grand Total</th>
					<th>Placed Date</th>
					<th>Order Status</th>
				</tr>
				<tr>
					<td><a href="">#SP117</a></td>
					<td>1500.00LKR</td>
					<td>03/09/2021</td>
					<td>Ongoing</td>
				</tr>
				<tr>
					<td><a href="">#SP118</a></td>
					<td>1600.00LKR</td>
					<td>01/09/2021</td>
					<td>Completed</td>
				</tr>
			</table>
		</div>
	</section>

	<section class="mobile-orders">
		<div class="order-btnm">
			<span onclick="getQuickCartm()" id="quick-order-span">Quick Orders</span>
			<span onclick="getSpecialOrderm()" id="special-order-span">Special Orders</span>
		</div>

		<div class="order-container" id="quick-orderm">
			<table>
				<tr>
					<td>Order ID</td>
					<td><a href="">#117</a></td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td>15000.00LKR</td>
				</tr>
				<tr>
					<td>Placed Date</td>
					<td>03/09/2021</td>
				</tr>
				<tr>
					<td>Order Status</td>
					<td>Ongoing</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>Order ID</td>
					<td><a href="">#116</a></td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td>15000.00LKR</td>
				</tr>
				<tr>
					<td>Placed Date</td>
					<td>03/09/2021</td>
				</tr>
				<tr>
					<td>Order Status</td>
					<td>Completed</td>
				</tr>
			</table>
		</div>

		<div class="order-container" id="specia-orderm">
			<table>
				<tr>
					<td>Order ID</td>
					<td><a href="">#SP117</a></td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td>15000.00LKR</td>
				</tr>
				<tr>
					<td>Placed Date</td>
					<td>03/09/2021</td>
				</tr>
				<tr>
					<td>Order Status</td>
					<td>Ongoing</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>Order ID</td>
					<td><a href="">#SP116</a></td>
				</tr>
				<tr>
					<td>Grand Total</td>
					<td>15000.00LKR</td>
				</tr>
				<tr>
					<td>Placed Date</td>
					<td>03/09/2021</td>
				</tr>
				<tr>
					<td>Order Status</td>
					<td>Completed</td>
				</tr>
			</table>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>