<?php $pagename="Order for an Event"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-eventHome.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-notification.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/checkout.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Order for an Event</title>
</head>
<body>

	<header>
	<?php require_once('navbar.php'); ?>
	</header>

	<section>
		<div>
		<p>
			Here you get to order for your <span>EVENTS</span>, <span>PARTIES</span>, or any kind of special occasion. Chose the foods you want and select the time and date you want your order to be on your door step. Rest is on us. 
		</p>
		<p>
			You can access the <span>special order cart</span> from the cart section. From there you can change your cart if you want. Then you can proceed to checkout and set a time and date for your order. Following conditions are applied.
		</p>
		<ul>
			<li>Order total should be at least <span>LKR.4000.00</span></li>
			<li>You should pay at least half of the total as the advance payment</li>
		</ul>
		<a href="<?php echo BASEURL."/orderForEventController/getSpecialCategoryItems/1"; ?>"><button>Let's Order</button></a>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
	<?php require_once('notification.php'); ?>
</html>