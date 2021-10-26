<?php 
	// $data['error']="Ado erro bn";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-otp.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/signup.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Bake_it</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="otp_area">
			<?php if (isset($data['error']) && $data['error']!=""){?>
			<div class="danger-alert">
			  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
			  <p><?php echo $data['error']; ?></p>
			</div>
			<?php } ?>

		<div class="otp-div">
			<form method="post" action="<?php echo BASEURL."/newSignupController/verfyOtp" ?>">
				<label for="otp">Enter OTP</label>
				<input type="text" name="otp" required="" onkeypress="javascript:return isNumber(event)">
				<input type="submit" name="Verify">
			</form>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>