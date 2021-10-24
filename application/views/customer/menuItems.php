<?php $pagename="delicious burgers" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<!-- <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/customer/customer-menuItems.css"> -->
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-specialMenu.css">
	<script src="<?php echo BASEURL; ?>/public/js/customer/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Burgers</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

		<section class="burger-menu">

			<div class="side-panel">
				<h2>Catagories</h2>
				<ul class="catagory">
					<li><a href="">Burger</a></li>
					<li><a href="">Burger</a></li>
					<li><a href="">Burger</a></li>
					<li><a href="">Burger</a></li>
					<li><a href="">Burger</a></li>
					<li><a href="">Burger</a></li>
					<li><a href="">Burger</a></li>
				</ul>
			</div>

			<div class="burger-container">

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b1.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b2.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b3.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b4.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="<?php echo BASEURL; ?>/public/images/b5.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>


			</div>

		</section>

	<?php require_once('footer.php'); ?>
</html>