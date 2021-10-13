<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/branch_manager-login.css">
    <link rel="stylesheet" href="../../../public/css/branch_manager-body.css">
	<script  src="../../../public/js/customer.js" defer></script>
	<script src="https://kit.fontawesome.com/879f1ad054.js" crossorigin="anonymous"></script>
	<title>Login to Bake_it</title>
</head>
<body>

    <section class="header-section"> 
    <header class="header" style="background-image: linear-gradient(180deg, #000000 0%, #171618 50%, #000000 100%);">

        <div class="bake_it">
        <a href="index.php">Bake_it</a>
        </div>

    </header>
    </section>

	<section>
		<div class="login-image">
			<img src="../../../public/images/home-image.jpg" class="b1">

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
			</form>
			</div>
		</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>