<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveries.js"></script> -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-footer.css">
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer ></script>
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-deliveries.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/calander.css">
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/calander.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="header">
        <?php include('deliveryheader.php'); ?>
    </section> 
    
    <div class="delivery-body overview-body" id="body">
        <div class="del-topic">Deliveries Overview</div>
        <div class="row">
            <div class="col">
                <h4>Total Deliveiries</h4>
                <h1><?php echo $data[0]?></h1>
            </div>
            <div class="col">
                <h4>Deliveries for this week</h4>
                <h1><?php echo $data[1]?></h1>
            </div>
            <div class="col">
                <h4>Deliveries for this month</h4>
                <h1><?php echo $data[2]?></h1>
            </div>
        </div>
        <div class="cal-table">
            <div class="delivery-calander">
                <form action="<?php echo BASEURL."/deliveryPersonDeliveriesController/getCompletedDeliveriesTable"; ?>" method="POST">
                <div class="selectDate">Select Date
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
                </div> 
                <div class ="calander-submit">
                    <input type="submit" name="deliveryHistory" value="Get Delivery List" required="">
                </div>                
                </form>
            </div>
        </div> 
        
        <!--table for Delivery History-->
        <div class="historytable">
            <!-- <h3 id="table-caption">Details of Overview</h3> -->
            <?php if(!empty($data[3])){?>
            <h3 id="table-caption">Details of Overview</h3>
            <h5 id="table-caption-date">Selected Date : <?php echo $data['date']?> </h5>
            <table id="table-history">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Order Id</th>
                        <th>Location</th>
                        <th>Payment</th>
                        <th>More Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=0;
                        foreach($data[3] as $key => $delivery) {?>
                    <tr>
                        <td label="Time"><?php echo $delivery['needed_time'];?></td>
                        <td label="Order No"><?php echo $delivery['order_id'];?></td>
                        <td label="Location">
                            <?php echo $delivery['address1'];?>
                            <?php echo $delivery['address2'];?>
                            <?php echo $delivery['address3'];?>
                        </td>
                        <td label="Payment"><?php echo $delivery['total_amount'];?></td>
                        <td label="" class="click-more-details">
                            <a href="<?php echo BASEURL."/deliveryPersonDeliveriesController/getOrderDetails/".$delivery['order_id'] ?>"><button>
                            Click for more details</button>
                            </a>
                        </td>

                    </tr>
                    <?php
                        $i++;
                    } ?>
                 </tbody>
            </table>
            <?php }?> 
                   
          
            </div>
        </div>
    </div>
    <div>
            <?php require_once('footerDP.php');?>  
    </div>       
    
     
</body>
</html>