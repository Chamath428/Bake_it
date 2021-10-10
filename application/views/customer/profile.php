<?php $pagename="profile"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer-profile.css">
	<script src="<?php echo BASEURL ?>/public/js/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Profile</title>
</head>
<body>
	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="profile">
		<div class="profile-container">
			<div class="profile-image">
				<a href=""><img src="<?php echo BASEURL ?>/public/images/profile.jpg"></a>
				<h2>Makawi Gunarathna</h2>
			</div>
			<div class="profile-buttons">
				<div>
					<a href="resetpassword.php">Reset Password</a>
					<a href="">Change Location</a>
				</div>
				<div>
					<a href="changemail.php">Change Email</a>
					<a href="changemobile.php">Change Phone Number</a>
				</div>	
			</div>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>