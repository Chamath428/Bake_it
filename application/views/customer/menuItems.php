<?php $pagename="delicious burgers" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-navbar.css">
	<link rel="stylesheet" href="../../../public/css/customer-footer.css">
	<link rel="stylesheet" href="../../../public/css/customer-menuItems.css">
	<script src="../../../public/js/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Burgers</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

		<section class="burger-menu">
			<div class="burger-container">

				<div class="burger-item">
					<img src="../../../public/images/b1.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="../../../public/images/b2.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="../../../public/images/b3.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="../../../public/images/b4.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>

				<div class="burger-item">
					<img src="../../../public/images/b5.png">
					<h3>Mini Cheese Burger</h3>
					<span>RS.150.00</span><br>
					<button><a href="#">Add to cart</a></button>
				</div>


			</div>

		</section>

	<?php require_once('footer.php'); ?>
</html>