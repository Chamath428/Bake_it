<?php $pagename='login'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-login.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
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
		</div>
		<div class="content-box">

			<?php if (isset($data['confirmation'])){?>
			<div class="confirm-alert">
			  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			  <p><?php echo $data['confirmation']; ?></p>
			</div>
			<?php } ?>

			<?php if (isset($data['error'])){?>
			<div class="danger-alert">
			  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			  <p><?php echo $data['error']; ?></p>
			</div>
			<?php } ?>


			<div class="form-box">
			<h2>Login</h2>
			<form method="post" action="<?php echo BASEURL.'/loginController/submit'; ?>">
				<div class="input-box">
					<span>Email or Mobile Number</span>
					<input type="text" name="username" required=""  placeholder="Email or Mobile Number" value="<?php 
						if(isset($data['username']))echo $data['username'];
					 ?>">
				</div>
				<div class="input-box">
					<span>Password</span>
					<input type="password" name="password" required=""  placeholder="Password">
				</div>
				<div class="input-box">
					<input type="submit" name="signin" value="Log-in" required="" >
				</div>
				<div class="input-box">
					<p>Don't Have an Account? <a href="<?php echo BASEURL.'/signupController' ?>">Sign Up</a></p>
				</div>
				<div class="input-box">
					<a href="">Forget Password</a>
				</div>
			</form>
			</div>
		</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>