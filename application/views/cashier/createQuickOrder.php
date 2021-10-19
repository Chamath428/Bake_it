<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/cashier/cashier-create-quick-order.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/cashier/cashier-footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/cashier/cashier-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="../../../public/js/cashier/cashier-create-quick-order.js" defer></script>
    <script src="../../../public/js/cashier/cashier-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Quick Order</title>
</head>
<body>
  
<?php require_once("header.php"); ?>
 
  <div class="bgg" id="body">
        <div class="middle-section">
        <header>
			<h3>Quick Order</h3>
		</header>
		<article>
			
			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice No</span></th>
					<td><span contenteditable>101138</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable>January 1, 2012</span></td>
				</tr>
			</table>
	
			<table class="inventory">
				<thead>
					<tr>
						<th>Order Id</th>
						<th>Location</th>
						<th>Total Price</th>
						<th>Assinged Preson</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable>Front End Consultation</span></td>
						<td><span contenteditable>Experience Review</span></td>
						<td><span data-prefix>$</span><span contenteditable>150.00</span></td>
						<td><span contenteditable>4</span></td>
					</tr>
				</tbody>
			</table>
            <a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span data-prefix>$</span><span contenteditable>0.00</span></td>
				</tr>
				<tr>
					<th><span contenteditable>Balance Due</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
			</table>
		</article>
		



        </div>
  </div>


 <?php require_once("footer.php"); ?>
          
