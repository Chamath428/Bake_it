<?php $pagename="profile"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../../public/css/customer-navbar.css">
	<link rel="stylesheet" href="../../../public/css/customer-footer.css">
	<link rel="stylesheet" href="../../../public/css/customer-profile.css">
	<script src="../../../public/js/navbar.js" defer></script>
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
				<a href=""><img src="../../../public/images/profile.jpg"></a>
				<h2>Makawi Gunarathna</h2>
			</div>
			<div class="profile-buttons">
				<div>
					<button>Reset Password</button>
					<button>Change Location</button>
				</div>
				<div>
					<button>Change Email</button>
					<button>Change Phone Number</button>
				</div>	
			</div>
		</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>