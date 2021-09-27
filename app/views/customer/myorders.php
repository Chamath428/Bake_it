<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-hero.css">
	<link rel="stylesheet" href="../../../public/css/customer-body.css">
	<link rel="stylesheet" href="../../../public/css/customer-myorders.css">
	<script  src="../../../public/js/customer.js" defer></script>
	<script  src="../../../public/js/cart.js" defer></script>
	<script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Menu</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="desktop-orders">
		<div class="order-btn">
			<span>Quick Orders</span>
			<span>Special Orders</span>
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
					<td><a href="">#117</a></td>
					<td>1500.00LKR</td>
					<td>03/09/2021</td>
					<td>Ongoing</td>
				</tr>
				<tr>
					<td><a href="">#118</a></td>
					<td>1600.00LKR</td>
					<td>01/09/2021</td>
					<td>Completed</td>
				</tr>
			</table>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>