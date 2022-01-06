<?php if (isset($_POST['preview']) && isset($_POST['finalCount'])){
	$finalCount=$_POST['finalCount'];
	$totalAmount=0;
	$paidAmount=$_POST['paid-amount'];
	$balance=$_POST['balance'];
	$paymentType=$_POST['Payment'];
	$itemData=array();
	for ($i=1; $i <=$finalCount ; $i++) { 
				$item['item_id']=$_POST['item-id-'.$i];
				$item['item_name']=$_POST['item-name-'.$i];
				$item['item_qauntity']=$_POST['quntity'.$i];
				$item['item_price']=$_POST['item-price-'.$i];
				$itemData[$i]=$item;
				$totalAmount+=$_POST['item-price-'.$i];
	}
	$balance=$paidAmount-$totalAmount;
} ?>
	

<!DOCTYPE html>
<html lang="en">

<head>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>

	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

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
						<th><span contenteditable>Date</span></th>
						<td><span contenteditable><?php echo date('F j, Y'); ?></span></td>
					</tr>
				</table>
				<form action="" method="post">
				<div class="search-container">
						<select id="items-bar">
							<?php foreach ($data as $key => $item) {?>
								<option value="<?php echo $item['item_id'] ?>"><?php echo $item['item_id']."-".$item['item_name'] ?></option>
							<?php } ?>
						</select>

						<?php foreach ($data as $key => $item) {?>
							<input type="hidden" id="<?php echo "item-price-".$item['item_id']; ?>" value="<?php echo $item['price']; ?>">
						<?php } ?>
				</div>

				<div class="data-content-scroll">
					<table class="inventory" >
						<thead>
							<tr>
								<th></th>
								<th>Item Id</th>
								<th>Item Name</th>
								<th>Quantity</th>
								<th>Price(RS)</th>

							</tr>
						</thead>

						<tbody id="item-table">
							<?php if (isset($itemData)) {
								$quan=1;
								foreach ($itemData as $key => $item) {?>
									<tr>
									<td><input type="checkbox" id="Check-box" name="check"></td>
									<td>
										<input readonly id="item-id-<?php echo $quan ?>" name="item-id-<?php echo $quan ?>" value="<?php echo $item['item_id'] ?>"></input>
									</td>
									<td> <input readonly  name="item-name-<?php echo $quan ?>" value="<?php echo $item['item_name'] ?>"></input> </td>
									<td class="input">
										<input type="number" class="quntity" name="quntity<?php echo $quan ?>" id="itemid"  required=""  onkeypress="javascript:return isNumber(event)" value="<?php echo $item['item_qauntity'] ?>"> 
										<input type="hidden" name="finalCount" value="<?php echo $quan ?>">
									</td>
									<td><input class="item-price" name="item-price-<?php echo $quan ?>" readonly value="<?php echo $item['item_price'] ?>"></input></td>
									</tr>
							<?php $quan++;}}?>
						</tbody>

					</table>
					
					<?php if (!isset($quan)) {
						$quan=1; ?>
						<input type="hidden" name="tracker" id="tracker" value="1">
					<?php }else{ ?>
						<input type="hidden" name="tracker" id="tracker" value="2">
					<?php } ?>

					<input type="hidden" name="quan" id="quan" value="<?php echo $quan ?>">

				</div>

				<div>
					<input class="del-row" type="button" value="Delete Item" onclick="deleteRow('dataTable')" />
					<button class="add" type="button" onclick="selectItem()"> +</button>
				</div>

				<div class="payment-balance">
					<div class="payment">

							<h3>Select Payment Method</h3>
							  <input type="radio" id="Cash" name="Payment" checked required value="1">
							  <label for="cash">Cash</label><br>
							  <input type="radio" id="card" name="Payment" required value="2">
							  <label for="card">Card</label>

					</div>
					<table class="balance">
						<tr>
							<th><span contenteditable>Total(RS:)</span></th>
							<td><input type="text" readonly name="total-amount" value="600.00"></td>
						</tr>
						<tr>
							<th><span contenteditable>Amount Paid(RS:)</span></th>
							<td><input type="text" required name="paid-amount" value="<?php if(isset($_POST['paid-amount']))echo $_POST['paid-amount']; ?>"></td>
						</tr>
						<tr>
							<th><span contenteditable>Balance Due(RS:)</span></th>
							<td><input type="text" name="balance" readonly value="20.00"></td>
						</tr>
					</table>
				</div>
				<button name="preview" class="pre-bill-btn">Preview Bill</button>
				</form>
			</article>

		</div>
	</div>


<?php if (isset($_POST['preview']) && isset($_POST['finalCount'])) {?>

	<div class="bill active">
		<div class="bill-header">
			
			<h2>Bill Previwe</h2>
			<button data-close-button class="close-button">&times;</button>

		</div>

		<div class="bill-body">
			<div class="date-details">
				<table>
					<tr>
						<th><span contenteditable>Date</span></th>
						<td><span contenteditable><?php echo date('F j, Y'); ?></span></td>
					</tr>
				</table>
			</div>

			<div class="food-details">
				<form method="post" action="<?php echo BASEURL."/cashierCreateOrderController/createQuickOrder" ?>">
				<table>
					<thead>
						<tr>
							<th>Item Id</th>
							<th>Item Name</th>
							<th>Quintity</th>
							<th>Total Price(RS:)</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($itemData)) {
								$quan=1;
								foreach ($itemData as $key => $item) {?>
									<tr>
									<td><input readonly  name="item-id-<?php echo $quan ?>" value="<?php echo $item['item_id'] ?>"></input></td>
									<td> <input readonly  name="item-name-<?php echo $quan ?>" value="<?php echo $item['item_name'] ?>"></input> </td>
									<td class="input"><input type="number" readonly class="quntity" name="quntity<?php echo $quan ?>" id="itemid"  required=""  onkeypress="javascript:return isNumber(event)" value="<?php echo $item['item_qauntity'] ?>"> <input type="hidden" name="finalCount" value="<?php echo $quan ?>"></td>
									<td><input class="item-price" name="item-price-<?php echo $quan ?>" readonly value="<?php echo $item['item_qauntity']*$item['item_price'] ?>"></input></td>
									</tr>
							<?php $quan++;}}?>
					</tbody>	
				</table>
			</div>
			<div class="total-details">
				<table>
					<tr>
						<th>Total Amount(RS:)</th>
						<td>
							<?php echo $totalAmount.".00"; ?>
							<input type="hidden" name="total-amount" value="<?php echo $totalAmount; ?>">
						</td>
					</tr>
					<tr>
						<th>Amount Paid(RS:)</th>
						<td>
							<?php echo $paidAmount.".00"; ?>
							<input type="hidden" name="paid-amount" value="<?php echo $paidAmount;?>">
						</td>
					</tr>
					<tr>
						<th>Balance Due(RS:)</th>
						<td>
							<?php echo $balance.".00"; ?>
							<input type="hidden" name="balance" value="<?php echo $balance; ?>">		
						</td>
					</tr>
					<tr>
						<th>Payment Type</th>
						<td><?php switch ($paymentType) {
							case '1':
								echo "Cash Payment";
								break;
							case '2':
								echo "Card Payment";
								break;
							
							default:
								echo "Not specified";
								break;
						} ?>
						<input type="hidden" name="payment_type" value="<?php echo $paymentType; ?>">
						</td>
					</tr>
				</table>
			</div>

			<div class="submit-button">
				<button type="submit">Place Order and Print the bill</button>
			</div>
		</form>
		</div>
	</div>

	<div id="overlay" class="overlay active"></div>

<?php } ?>
	<?php require_once("footer.php"); ?>