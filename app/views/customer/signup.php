<?php $pagename='register'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-navbar.css">
	<link rel="stylesheet" href="../../../public/css/customer-footer.css">
	<link rel="stylesheet" href="../../../public/css/customer-signup.css">
	<script src="../../../public/js/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Sign Up for Bake_it</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section>
		<div class="signup-image">
			<img src="../../../public/images/login-b1.jpg">
		</div>

		<div class="content-box">
			<div class="form-box">
				<h2>Register</h2>
				<form>
					<div class="input-box">
						<input type="text" name="firstname" placeholder="First Name" required="">
						<input type="text" name="lastname" placeholder="Last Name" required="">
					</div>
					<div class="input-box">
						<input type="text" name="email" placeholder="Email">
						<input type=text name="phonenumber" placeholder="Phone Number" required="">
					</div>
					<div class="input-box">
						<input type="password" name="password" placeholder="Password" required="">
						<input type="password" name="confirmpassword" placeholder="Confirm Password" required="">
					</div>
				</div>
				<div class="address-box">
						<h2>Location (Optional)</h2>
						<div class="address-inside">
						<div class="input-box">
							<input type="text" name="adl1" placeholder="Address Line 1">
							<input type="text" name="adl2" placeholder="Address Line 2">
							<input type="text" name="adl3" placeholder="Address Line 3">
							
						</div>
							<a href="#"><button>Use Google Maps</button></a>
						</div>
				</div>
					<div class="input-box">
						<input type="submit" name="register" value="Submit" required="" >
					</div>
				</form>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>