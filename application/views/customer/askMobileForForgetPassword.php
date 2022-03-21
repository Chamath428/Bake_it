<?php $pagename="Change Password"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-forgetPassword.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<!-- The js that used for the signup and this are same -->
	<script src="<?php echo BASEURL ?>/public/js/customer/signup.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Login to Bake_it</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section>
		
		<div class="detail-section">

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

			<form method="post" action="<?php echo BASEURL.'/loginController/sendOTP'; ?>">
				<div class="input-box">
				<span>Mobile Number</span>
				<input type="text" name="phonenumber" required placeholder="Enter Your Mobile Number" value="<?php if(isset($data['phonenumber']))echo $data['phonenumber']; ?>" onkeypress="javascript:return isNumber(event)">
				</div>

				<div class="input-box" id="submit-btn">
				<input type="submit" name="submit">	
				</div>		

			</form>
		</div>
		
	</section>

	<?php require_once('footer.php'); ?>
</html>