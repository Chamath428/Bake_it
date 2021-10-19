<?php $pagename="reset password"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-navbar.css">
	<link rel="stylesheet" href="../../../public/css/customer-footer.css">
	<link rel="stylesheet" href="../../../public/css/customer-resetpassword.css">
	<script src="../../../public/js/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Reset Password</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="reset-password">
		<form>
		<div class="input-container">
			<input type="password" name="current-password" placeholder="Current Password">
			<input type="password" name="new-password" placeholder="New Password">
			<input type="password" name="con-password" placeholder="Confirm Password">
			<input type="submit" name="reset-password" value="Submit">
		</div>
		</form>
	</section>

	<?php require_once('footer.php'); ?>
</html>