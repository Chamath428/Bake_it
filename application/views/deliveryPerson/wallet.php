<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-footer.css">
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer ></script>
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-wallet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <title>Wallet</title>
</head>
<body>
      <section class="header">
        <?php include('headerDP.php'); ?>
       </section>
   
        <div class="wallet-container" id="body">
            <h1 class="wallet-topic">Transactions of the Day</h1>
            <div class="text">
                <label for="recv-amount">Amount Received from Shop(LKR)</label>
                <div class="text-fill">5000
                    <!-- <input type="text" name="name" id="amount"  placeholder="" value="5000.00LKR"> -->
                </div>
            </div>
            <div class="wallet-table">
            <h3 id="table-caption">Wallet Details</h3>
            <table id="table-wallet">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Order Amount</th>
                        <th>Amount Paid</th>
                        <th>Return</th>
                    </tr>
                </thead>
                <tbody>
                       <?php
                        $i =0;
                        foreach($data[0] as $key => $delivery) {?>
                    <tr>
                        <td label="Order Id"><a href="<?php echo BASEURL."/deliveryPersonDeliveriesController/getOrderDetails/".$delivery['order_id'] ?>" class="order-id"><?php echo $delivery['order_id'];?></a></td>
                        <td label="Order Amount"><?php echo $delivery['total_amount'];?></td>
                        <td label="Amount Paid"><?php echo $delivery['paid_amount'];?></td>
                        <td label="Return"><?php echo ($delivery['paid_amount']-$delivery['total_amount']);?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
            <div class="text">
                <label for="retrn-amount">Return Amount to the shop(LKR)</label>
                <div class="text-fill"><?php echo (intval($data[1])+5000)?>
                    <!-- <input type="text" name="name" id="amount"  placeholder="" value="8500.00LKR"> -->
                </div>
            </div>
        </div>
        <div class="footer">
            <?php include('footerDP.php'); ?>  
        </div>
</body>
</html>