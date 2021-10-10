<?php $pagename='login'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-login.css">
	<script src="<?php echo BASEURL ?>/public/js/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Login to Bake_it</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section>
		<div class="login-image">
			<img src="<?php echo BASEURL ?>/public/images/login-b1.jpg" class="b1">
			<!-- <img src="<?php echo BASEURL ?>/public/images/login-b2.jpg" class="b2"> -->
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
					<p>Don't Have an Account? <a href="<?php echo BASEURL.'/signupController' ?>">Sign Up</a></p>
				</div>
			</form>
			</div>
		</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>