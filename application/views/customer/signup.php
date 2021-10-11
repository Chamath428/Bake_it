<?php $pagename='register'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-signup.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-messageboxes.css">
	<script src="<?php echo BASEURL ?>/public/js/navbar.js" defer></script>
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
			<img src="<?php echo BASEURL ?>/public/images/login-b1.jpg">
		</div>

		<div class="content-box">
			
			<?php if (isset($data['error'])){?>
			<div class="alert">
			  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			  <?php echo $data['error']; ?>
			</div>
		<?php } ?>
				
			<div class="form-box">
				<h2>Register</h2>
				<form method="post" action="<?php echo BASEURL.'/signupController/submit'; ?>">
					<div class="input-box">
						<input type="text" name="firstname" placeholder="First Name" required="" value="<?php if(isset($data['firstname'])){echo $data['firstname'];} ?>">
						<input type="text" name="lastname" placeholder="Last Name" required="" value="<?php if(isset($data['lastname'])){echo $data['lastname'];} ?>">
					</div>
					<div class="input-box">
						<input type="text" name="email" placeholder="Email" value="<?php if(isset($data['email'])){echo $data['email'];} ?>">
						<input type="text" name="phonenumber" placeholder="Phone Number" required="" value="<?php if(isset($data['phonenumber'])){echo $data['phonenumber'];} ?>">
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
							<input type="text" name="adl1" placeholder="Address Line 1" value="<?php if(isset($data['adl1'])){echo $data['adl1'];} ?>">
							<input type="text" name="adl2" placeholder="Address Line 2"value="<?php if(isset($data['adl2'])){echo $data['adl2'];} ?>">
							<input type="text" name="adl3" placeholder="Address Line 3" value="<?php if(isset($data['adl3'])){echo $data['adl3'];} ?>">
							
						</div>
							<!-- <a href="#"><button>Use Google Maps</button></a> -->
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