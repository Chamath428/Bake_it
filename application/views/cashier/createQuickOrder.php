<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-create-quick-order.css" class="rel">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-footer.css" class="rel">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-header.css" class="rel">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
	<script src="<?php echo BASEURL ?>/public/js/cashier/cashier-create-quick-order.js" defer></script>
	<script src="<?php echo BASEURL ?>/public/js/cashier/cashier-header.js" defer></script>
	<script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
	<title>Create Quick Order</title>
</head>

<body>

	<?php require_once("header.php"); ?>

	<div class="bgg" id="body">
		<div class="middle-section">
			<header class="order-topic">
				<h3>Quick Order</h3>
			</header>
			<article>

				<table class="meta">
					<tr>
						<th><span contenteditable>Bill No</span></th>
						<td><span contenteditable>101138</span></td>
					</tr>
					<tr>
						<th><span contenteditable>Date</span></th>
						<td><span contenteditable>January 1, 2012</span></td>
					</tr>
				</table>
				<div class="search-container">
					<form action="#">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>

				<table class="inventory">
					<thead>
						<tr>
							<th></th>
							<th>Item Id</th>
							<th>Item Name</th>
							<th>Quantity</th>
							<th>Price</th>

						</tr>
					</thead>
				</table>
				<div class="data-content-scroll">
					<table id="dataTable">
						<tbody>
							<tr>
								<td><input type="checkbox" id="Check-box" name="chk"></td>
								<td><span contenteditable>1</span></td>
								<td><span contenteditable>item1</span></td>
								<td><span contenteditable>15</span></td>
								<td><span data-prefix>Rs:</span><span>600.00</span></td>
							</tr>

						</tbody>
					</table>
					
				</div>

				<div>
					<input class="del-row" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
					<a class="add" onclick="addRow('dataTable')"> +</a>
				</div>

				<div class="payment-balance">
					<div class="payment">
						<form action="#">
							<h3>Select Payment Method</h3>
							  <input type="radio" id="Cash" name="Payment" value="cash">
							  <label for="cash">Cash</label><br>
							  <input type="radio" id="card" name="Payment" value="card">
							  <label for="card">Card</label>


						</form>
					</div>
					<table class="balance">
						<tr>
							<th><span contenteditable>Total</span></th>
							<td><span data-prefix>Rs:</span><span>600.00</span></td>
						</tr>
						<tr>
							<th><span contenteditable>Amount Paid</span></th>
							<td><span data-prefix>Rs:</span><span contenteditable>0.00</span></td>
						</tr>
						<tr>
							<th><span contenteditable>Balance Due</span></th>
							<td><span data-prefix>Rs:</span><span>600.00</span></td>
						</tr>
					</table>
				</div>
				<button class="pre-bill-btn">Preview Bill</button>
			</article>




		</div>
	</div>


	<?php require_once("footer.php"); ?>