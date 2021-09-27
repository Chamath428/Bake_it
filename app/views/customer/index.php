<?php $log=0; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-hero.css">
	<link rel="stylesheet" href="../../../public/css/customer-body.css">
	<script  src="../../../public/js/customer.js" defer></script>
	<script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Welcome to Bake_it</title>
	
</head>
<body>
	<header>
		<div class="hero">
		<!-- Navigation Bar Starts -->
		<?php require_once("navbar.php");?>
			<div class="hero-bottom">
					<h1 class="header1">Best Taste Since 1997</h1>
					<button class="dismenu-btn"><a href="#menu">Discover Menu</a></button>
			</div>
		</div>
	</header>
	<body>
		<section class="menu" id="menu">
			<h2 class="menu-header">Our Menu</h2>
			<div class="menu-container">
				<div class="menu-box grid-item-1">
					<a href="#">
						<img src="../../../public/images/bread.jpg">
						<div class="h3">BREAD</div>
					</a>
				</div>
				<div class="menu-box grid-item-2">
					<a href="#">
						<img src="../../../public/images/pastry.jpg">
						<div class="h3">PASTRY</div>
					</a>
				</div>
				<div class="menu-box grid-item-6">
					<a href="#">
						<img src="../../../public/images/cake.jpg">
						<div class="h3">CAKE</div>
					</a>
				</div>
				<div class="menu-box grid-item-5">
					<a href="menuItems.php">
						<img src="../../../public/images/burger.jpg">
						<div class="h3">BURGER</div>	
					</a>
				</div>
				<div class="menu-box grid-item-9">
					<a href="#">
						<img src="../../../public/images/snacks.jpg">
						<div class="h3">SNACKS</div>
					</a>
				</div>
				<div class="menu-box grid-item-3">
					<a href="#">
						<img src="../../../public/images/donuts.jpg">
						<div class="h3">DONUT</div>
					</a>
				</div>

				<div class="menu-box grid-item-4">
					<a href="#">
						<img src="../../../public/images/muffins.jpg">
						<div class="h3">MUFFIN</div>
					</a>
				</div>
				<div class="menu-box grid-item-7">
					<a href="#">
						<img src="../../../public/images/sweets.jpg">
						<div class="h3">SWEETS</div>
					</a>
				</div>
				<div class="menu-box grid-item-8">
					<a href="#">
						<img src="../../../public/images/baverages.jpg">
						<div class="h3">BAVERAGES</div>
					</a>
				</div>
			</div>
		</section>
 <?php require_once('footer.php'); ?>
