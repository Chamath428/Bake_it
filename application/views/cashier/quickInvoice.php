<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/cashier/cashier-quick-invoice.css" class="rel">
	<title>Invoice</title>
</head>
<body>

	<div class="bill">
        <div class="bill-header">
            <h2>Bake_it</h2>
            <h3>Bill No:<?php echo $data[1]['order_id'] ?></h3>

        </div>

        <div class="bill-body">
            <div class="date-details">
                <table>
                    <tr>
                        <th><span>Date</span></th>
                        <td><span><?php echo date('F j, Y'); ?></span></td>
                    </tr>
                </table>
            </div>

            <div class="food-details">

                <table>
                    <thead>
                        <tr>
                            <th>Item Id</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Quintity</th>
                            <th>Total Price(RS:)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data[2] as $key => $items) {?>
                        	<tr>
                        		<td><?php echo $items['item_id'] ?></td>
                        		<td><?php echo $items['item_name'] ?></td>
                        		<td><?php echo $items['price'] ?></td>
                        		<td><?php echo $items['quantity'] ?></td>
                        		<td><?php echo $items['quantity']*$items['price']; ?></td>
                        	</tr>
                        <?php } ?>
                    </tbody>    
                </table>
            </div>
            <div class="total-details">
                <table>
                    <tr>
                        <th>Total Amount (LKR:)</th>
                        <td>
                            <?php if ($data[1]['delivery_type']==2) {
                            	$total=$data[1]['total_amount']-200;
                            	echo $total.".00 LKR";
                            }else echo $data[1]['total_amount'].".00 LKR";?>
                        </td>
                    </tr>

                    <tr>
                        <th>Delivery Tax (LKR:)</th>
                        <td>
                             <?php if ($data[1]['delivery_type']==2) {
                                   echo "200.00 LKR";
                               }else echo 0; ?>
                         </td>
                    </tr>

                    <tr>
                        <th>Grand Total (LKR:)</th>
                        <td>
                            <?php echo $data[1]['total_amount'].".00"; ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Amount Paid (LKR:)</th>
                        <td>
                            <?php echo $data[1]['paid_amount'].".00 LKR"; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Balance Due (LKR:)</th>
                        <td>
                            <?php echo $data[1]['paid_amount']-$data[1]['total_amount'].".00 LKR"; ?>   
                        </td>
                    </tr>

                    
                </table>
            </div>

            <div class="total-details">
                <table>
                	<?php if($data[1]['order_type']==2){ ?>
                    <tr>
                        <th>Payment Amount</th>
                        <td><?php switch ($data[1]['is_advance']) {
                            case '1':
                                echo "Advance Payment";
                                break;
                            case '0':
                                echo "Full Payment";
                                break;
                            
                            default:
                                echo "Not specified";
                                break;
                        } ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th>Payment Type</th>
                        <td><?php switch ($data[1]['payment_type']) {
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
                        </td>
                    </tr>
                    <?php if($data[1]['order_type']==2){ ?>
                    <tr>
                        <th>Required Date</th>
                        <td>
                            <?php echo $data[1]['req_date']; ?>   
                        </td>
                    </tr>
                    <tr>
                        <th>Required Time</th>
                        <td>
                            <?php echo $data[1]['req_time']; ?>   
                        </td>
                    </tr>

                    <tr>
                        <th>Delivery Type</th>
                        <td><?php switch ($data[1]['delivery_type']) {
                            case '1':
                                echo "Pick Up From Shop";
                                break;
                            case '2':
                                echo "Home Delivery";
                                break;
                            
                            default:
                                echo "Not specified";
                                break;
                        } ?>

                        </td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>

    <!-- <div id="overlay" class="overlay active"></div> -->
</body>
</html>



