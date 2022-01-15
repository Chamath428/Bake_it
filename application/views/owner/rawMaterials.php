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

	<div class="bgg rawMaterials-body" id="body">
		<div class="middle-section">
			<div class="category">
				<h3>Select Category</h3>
				<select placeholder="Select Category">
					<option>Flour</option>
					<option>Meat</option>
					<option>Vegetabales</option>

				</select>
				<button class="get-btn">Get Item List</button>

			</div>

			<header class="topic">
				<h3>Raw Materials</h3>
			</header>
			<article>


				<div class="search-container">
					<form action="#">
						<input type="text" placeholder="Search.." name="search" id="search" onkeyup="search_item();">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
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
					<form method="post" action="<?php echo BASEURL . '/rawMaterialController/deleteRawMaterials'; ?>">

						<table id="dataTable">
							<tbody>

								<?php foreach ($data as $key => $value) { ?>
									<tr>


										<!-- <td><input type="checkbox" id="Check-box" name='check-name[]'></td> -->
										<td><input name="chk_id[]" type="checkbox" class='chkbox' value="<?php echo $value['rawitem_id']; ?>" /></td>

										<td><?php echo $value['rawitem_id']; ?></td>
										<td><?php echo $value['rawitem_name']; ?></td>
										<td><?php echo $value['stock_amount'] . " " . $value['measure_unit']; ?></td>

									</tr>
								<?php } ?>
							</tbody>
						</table>



						<!-- <input class="del-row" type="submit" value="Delete Item" name="delete-row"/> -->
						<input id="submit" name="submit" type="submit" class="del-row" value="Delete" onclick="delFunction()" />



					</form>

					<input class="add" type="button" onclick="addRow('dataTable')" value="Add Item">
				</div>



				<!-- <button class="save-btn" onclick="itemSave()">Save</button> -->
			</article>


		</div>
	</div>


	<?php require_once("footer.php"); ?>

	<!-- isset($_POST['thilina']) -->