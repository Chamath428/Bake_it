<?php $pagename="Change E-mail"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-navbar.css">
	<link rel="stylesheet" href="../../../public/css/customer-footer.css">
	<link rel="stylesheet" href="../../../public/css/customer-changemail.css">
	<script src="../../../public/js/navbar.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Change E-mail</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="change-mail">
		<form>
		<div class="input-container">
			<input type="text" name="new-mail" placeholder="Enter New Email">
			<input type="submit" name="reset-password" value="Submit">
		</div>
		</form>
	</section>

	<?php require_once('footer.php'); ?>
</html>