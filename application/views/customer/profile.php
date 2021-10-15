<?php $pagename="profile"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-profile.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css">
	<script src="<?php echo BASEURL ?>/public/js/customer/navbar.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/customer/profile.js" defer></script>
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84f84d587d.js" crossorigin="anonymous"></script>
	<title>Profile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section class="profile">
		<div class="profile-container">
			<div class="profile-image">
				<a href=""><img src="<?php echo BASEURL ?>/public/images/profile.jpg"></a>
				<span><?php if (isset($data['firstname']) && isset($data['lastname'])) {
					echo $data['firstname']." ".$data['lastname'];
				} ?></span>

				<?php if (isset($data['confirmation']) && $data['confirmation']!=""){?>
					<div class="confirm-alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <p><?php echo $data['confirmation']; ?></p>
					</div>
					<?php } ?>

					<?php if (isset($data['error']) && $data['error']!=""){?>
					<div class="danger-alert">
					  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					  <p><?php echo $data['error']; ?></p>
					</div>
				<?php } ?>


			</div>
			<div class="profile-details">
				<form method="post" action="<?php echo BASEURL.'/profileController/updateProfile'; ?>">
				<div class="name-field">
					<h3>Change Profile Details</h3>
					<div>
						<input type="text" name="firstname" id="firstname" required="" readonly="" value="<?php if(isset($data['firstname'])) echo $data['firstname'] ?>" placeholder="First Name">
						<span onclick="nameFunction()"><i class="fas fa-pen-alt"></i></span>
					</div>	
					<input type="text" name="lastname" id="lastname" readonly="" required="" value="<?php if(isset($data['lastname'])) echo $data['lastname'] ?>" placeholder="Last Name">
				</div>
				<div class="address-field">
					<h3>Address Fields</h3>
					<div>
						<input type="text" name="address1" id="address1" readonly="" value="<?php if(isset($data['address1'])) echo $data['address1'] ?>" placeholder="Address Line 1">
						<span onclick="addressFunction()"><i class="fas fa-pen-alt"></i></span>	
					</div>
					<input type="text" name="address2" id="address2" readonly="" value="<?php if(isset($data['address2'])) echo $data['address2'] ?>" placeholder="Address Line 2">
					<input type="text" name="address3" id="address3" readonly="" value="<?php if(isset($data['address3'])) echo $data['address3'] ?>" placeholder="Address Line 3">
				</div>
				<div class="password-field">
					<h3>Password Feilds</h3>
					<input type="password" name="current-password" value=""	placeholder="Current Password">
					<input type="password" name="new-password" value="" placeholder="New Password">
					<input type="password" name="confirm-password" value="" placeholder="Confirm Password">
				</div>
				<div class="email-field">
					<h3>Email</h3>
					<input type="text" name="email" id="email" required="" readonly="" value="<?php if(isset($data['email'])) echo $data['email'] ?>">
					<span onclick="emailFunction()"><i class="fas fa-pen-alt"></i></span>
				</div>
				<div class="phone-number-field">
					<h3>Phone Number</h3>
					<input type="text" name="phonenumber" id="phonenumber" required="" readonly="" value="<?php if(isset($data['phonenumber'])) echo $data['phonenumber'] ?>">
					<span onclick="phoneFunction()"><i class="fas fa-pen-alt"></i></span>
				</div>
				<div class="submit-button">
					<input type="submit" name="update-profile" value="Update Profle">	
				</div>
			</form>
			</div>
		</div>
	</section>

	<?php require_once('footer.php'); ?>

</html>
