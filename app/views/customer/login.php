<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-hero.css">
	<link rel="stylesheet" href="../../../public/css/customer-body.css">
	<link rel="stylesheet" href="../../../public/css/customer-login.css">
	<script  src="../../../public/js/customer.js" defer></script>
	<script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Login to Bake_it</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section>
		<div class="login-image">
			<img src="../../../public/images/login-b1.jpg" class="b1">
			<!-- <img src="../../../public/images/login-b2.jpg" class="b2"> -->
		</div>
		<div class="content-box">
			<div class="form-box">
			<h2>Login</h2>
			<form>
				<div class="input-box">
					<span>Email or Mobile Number</span>
					<input type="text" name="username" required=""  placeholder="Email or Mobile Number">
				</div>
				<div class="input-box">
					<span>Password</span>
					<input type="password" name="password" required=""  placeholder="Password">
				</div>
				<div class="remember">
					<label><input type="checkbox" name="">Remeber Me</label>
				</div>
				<div class="input-box">
					<input type="submit" name="signin" value="Sign-in" required="" >
				</div>
				<div class="input-box">
					<p>Don't Have an Account? <a href="signup.php">Sign Up</a></p>
				</div>
			</form>
			</div>
		</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>