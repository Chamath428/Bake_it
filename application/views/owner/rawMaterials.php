<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-raw-materials.css" class="rel">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
	<script src="<?php echo BASEURL ?>/public/js/owner/owner-raw-materials.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
	<script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Raw Materials</title>
</head>

<body>

	<?php require_once("header.php"); ?>

	<div class="bgg rawMaterials-body" id="body" onclick="defaultColse()">
		<div class="middle-section">

			<h3>Select Category</h3>
			<form method="post" action="<?php echo BASEURL . '/rawMaterialController/getItemsRawMaterials'; ?>">
				<div class="category">
					<select name="categoryId" id="categoryId">

						<?php foreach ($data[0] as $key => $value) {
							if ($value['raw_category_id'] == $data[2]) { ?>
								<option value="<?php echo  $value['raw_category_id']; ?>"><?php echo  $value['raw_category_name']; ?></option>
						<?php  }
						} ?>

						<?php foreach ($data[0] as $key => $value) {
							if ($value['raw_category_id'] != $data[2]) { ?>
								<option value="<?php echo  $value['raw_category_id']; ?>"><?php echo  $value['raw_category_name']; ?></option>
						<?php  }
						} ?>


					</select>
					<button type="submit" class="get-btn">Get Item List</button>
				</div>
				<header class="topic">
					<h3>Raw Materials</h3>
				</header>
				<div class="search-container">

					<input type="text" placeholder="Search.." name="search" id="search" onkeyup="search_item();">
					<button type="submit"><i class="fas fa-search"></i></button>

				</div>
				<table class="inventory">
					<thead>
						<tr>
							<th></th>
							<th>Item Id</th>
							<th>Item Name</th>
							<th>Available</th>

						</tr>
					</thead>
				</table>
				<div class="data-content-scroll">

					<table id="dataTable">
						<tbody>

							<?php foreach ($data[1] as $key => $value) { ?>
								<tr>



									<td><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $value['rawitem_id']; ?>" onclick="myFunction(this.id)"  id="<?php echo $value['rawitem_id']; ?>"/></td>

									<td><?php echo $value['rawitem_id']; ?></td>
									<td><?php echo $value['rawitem_name']; ?></td>
									<td><?php echo $value['stock_amount'] . " " . $value['measure_unit']; ?></td>

								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>

			</form>

			<article>


				<!-- <input class="del-row" type="submit" value="Delete Item" name="delete-row"/> -->
				<input id="submit" name="submit" class="del-row" onclick="delFunction()"  value="Delete">

				<!-- <input class="add" type="button" onclick="addRow('dataTable')" value="Add Item"> -->
				<input class="add" type="button" onclick="popup()" value="Add Item">


			</article>


		</div>
	</div>

	<form method="post" action="<?php echo BASEURL . '/rawMaterialController/insertRawMaterials'; ?>">
		<div class="addDatafrom" id="addDatafrom">
			<div class="input-fileds">
				<label for="itemId">Item Id</label>
				<input type="number" name="itemId" id="itemId" placeholder="Enter Id">

				<label for="itemName">Item Name</label>
				<input type="text" name="itemName" id="itemName" placeholder="Enter Name">
				<label for="quantity">Measure</label>
				<input type="number" name="quantity" id="quantity" placeholder="Enter Quantity">
				<label for="measure_unit">Measure Unit</label>
				<select name="measure_unit" id="measure_unit">
					<option>Kg</option>
					<option>l</option>
					<option>Unit</option>
				</select>
				<a href="<?php echo BASEURL . "/rawMaterialController" ?>"><button class="save-btn-popup" onclick="closePopup()">Save</button>
			</div>

		</div>
	</form>


	<?php require_once("footer.php"); ?>