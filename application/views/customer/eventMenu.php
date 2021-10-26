<?php $pagename="Order for an Event"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-specialMenu.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/message.js" defer></script>
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
		<div class="side-panel">
			<h2>Catagories</h2>
			<ul class="catagory">
				<li><a href="">Bread</a></li>
				<li><a href="">Pastry</a></li>
				<li><a href="">Cake</a></li>
				<li><a href="">Burger</a></li>
				<li><a href="">Snacks</a></li>
				<li><a href="">Donut</a></li>
				<li><a href="">Muffin</a></li>
				<li><a href="">Sweets</a></li>
				<li><a href="">Baverages</a></li>
			</ul>
		</div>

		<div class="burger-container">

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b1.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button onclick="showAlert('Item added to the special cart.')"><a>Add to special cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b2.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button onclick="showAlert('Item added to the special cart.')"><a>Add to special cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b3.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button onclick="showAlert('Item added to the special cart.')"><a>Add to special cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b4.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button onclick="showAlert('Item added to the special cart.')"><a>Add to special cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b5.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button onclick="showAlert('Item added to the special cart.')"><a>Add to special cart</a></button>
				</div>


			</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>