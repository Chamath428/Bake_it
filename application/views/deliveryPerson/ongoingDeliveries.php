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
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveries.js"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-deliveries.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">

    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
        <?php include('deliveryheader.php'); ?>
    </section> 
    <div class="delivery-body" id="body">
        <div class="del-topic">Ongoing Deliveries<br>
        
        <!-- ?php
        date_default_timezone_set("Asia/Calcutta");
        echo date('l jS \of F Y h:i A');
        ?>  -->
        
        </div> <br>
        <div class="row">
            <div class="col">
                <h4>Assgined Total Deliveiries</h4>
                <h1><?php echo $data[0]?></h1>
            </div>
            <div class="col">
                <h4>Today Completed Deliveries</h4>
                <h1><?php echo $data[1]?></h1>
            </div>
            <div class="col">
                <h4>Today Uncompleted Deliveries</h4>
                <h1><?php echo $data[3]?></h1>
            </div>
        </div>
        <!-- table for ongoing Deliveries -->
        <h3 id="table-caption">Ongoing Delivery Details </h3>
        <table id="Ongoing-Deliveries">
            <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Time</th>
                        <th>Delivery Area</th>
                        <th>Payment</th>
                        <th>Accept</th>
                        <th>Reject</th>
                    </tr>
            </thead>
            <tbody>
                        <?php
                        $i =0;
                        foreach($data[2] as $key => $delivery) {?>
                          <tr>
                            <td label="Order Id"><a href="<?php echo BASEURL."/deliveryPersonDeliveriesController/getOrderDetails/".$delivery['order_id'] ?>" class="order-id"><?php echo $delivery['order_id'];?></a></td>

                            <td label="Time"><?php echo $delivery['needed_time'];?></td>

                            <td label="Delivery Area">
                                <?php echo $delivery['address1'];?>
                                <?php echo $delivery['address2'];?>
                                <?php echo $delivery['address3'];?>
                            </td>

                            <td label="Payment">
                                <?php if ($delivery['payment_type'] == 1) {?>
                                          <i class="far fa-money-bill-alt"></i>
                                    <?php } 
                                    else {?>
                                          <i class="far fa-credit-card"></i>
                                    <?php }?>
                            </td>
                            <td label="Accept">
                                <?php if($delivery['order_status'] == 3) {?>
                                <a href="<?php echo BASEURL."/deliveryPersonDeliveriesController/getOrderDetails/".$delivery['order_id'] ?>">
                                    <button id="accepted_button">
                                            Accepted<i class="fas fa-check"></i>
                                    </button>
                                </a>
                                <?php }
                                 else{?> 
                                <a href="<?php echo BASEURL."/deliveryPersonDeliveriesController/acceptDeliveries/".$delivery['order_id'] ?>">
                                    <button class="accept_button">
                                        Accept<i class="fas fa-pen"></i>
                                    </button>
                                </a>
                               <?php }?>
                            </td>
                            <td label="Reject">
                                <a href="<?php echo BASEURL."/deliveryPersonDeliveriesController/rejectDeliveries/".$delivery['order_id'] ?>">
                                <button class="reject_button">
                                        Reject<i class="fas fa-times"></i>
                                </button>
                                </a>
                            </td>


                           
                          </tr>
                        <?php
                        $i++;
                        }?> 
            </tbody>
        </table>
    </div>    
    <div class="footer">
        <?php include('footerDP.php'); ?>  
    </div>
</body>
</html>