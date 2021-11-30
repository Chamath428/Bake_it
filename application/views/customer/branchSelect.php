<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-navbar.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-footer.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-branchSelect.css">
	<title>Select Branch</title>
</head>
<body>

	<header>
		<?php require_once('navbar.php'); ?>
	</header>

	<section>
			<div class="branches">
				<h2>Select a branch to show the menu</h2>
				<form action="<?php echo BASEURL."/customerBranchSelectController/setBranch" ?>" method="post">
				<select name="branch_id">
					<?php foreach ($data[2] as $key => $branch) {?>
						<option value="<?php echo $branch['branch_id']; ?>"><?php echo $branch['branch_name']; ?></option>
					<?php  } ?>
				</select>
				<input type="hidden" name="category_id" value="<?php echo $data[1]; ?>">
				<input type="submit" name="submit" value="Select">
				</form>
			</div>
	</section>

	<?php require_once('footer.php'); ?>
</html>