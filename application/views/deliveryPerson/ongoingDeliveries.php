<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <div class="del-topic">Deliveries of the day</div>
        <div class="row">
            <div class="col">
                <h4>Total Deliveiries</h4>
                <h1>25</h1>
            </div>
            <div class="col">
                <h4>Completed Deliveries</h4>
                <h1>5</h1>
            </div>
            <div class="col">
                <h4>Uncompleted Deliveries</h4>
                <h1>20</h1>
            </div>
        </div>
        <!-- table for ongoing Deliveries -->
        <h3 id="table-caption">Delivery Details </h3>
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
                <tr>
<<<<<<< HEAD
                    <td label="Order Id"><a href="deliveryDetails.php">001</a></td>
=======
                    <td label="Order Id"><a href="<?php echo BASEURL."/deliveriesController/getOrderDetails"; ?>">001</a></td>
>>>>>>> e11baa60f2a0fe998d90371cbd920c7800416f61
                    <td label="Time">10.00a.m</td>
                    <td label="Delivery Area">Kaluthara</td>
                    <td label="Payment"><i class="far fa-money-bill-alt"></i></td>
                    <td label="Accept"><button class="accept button" onclick="accept()">Accept<i class="fas fa-pen"></i></button></td>
                    <td label="Reject"><button class="reject button" onclick="reject()">Reject<i class="fas fa-times"></i></button></td>
                    <!-- <td label="More Details" class="click pick-order">
                         <button id="order1" onclick="pickOrder()">Pick</button> 
                        <input type="button" value="Pick" class="homebutton" id="btnHome" onClick=" window.location.href = 'deliveries2.php'" /> 
                    </td> -->
                </tr>
                <tr>
                <td label="Order Id"><a href="ongoingDeliveryDetails.php">002</a></td>
                    <td label="Time">10.00a.m</td>
                    <td label="Delivery Area">Kaluthara</td>
                    <td label="Payment"><i class="far fa-credit-card"></i></td>
                    <td label="Accept"><button class="accept button" onclick="accept()">Accept<i class="fas fa-pen"></i></button></td>
                    <td label="Reject"><button class="reject button" onclick="reject()">Reject<i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                <td label="Order Id"><a href="ongoingDeliveryDetails.php">003</a></td>
                    <td label="Time">10.00a.m</td>
                    <td label="Delivery Area">Kaluthara</td>
                    <td label="Payment"><i class="far fa-credit-card"></i></td>
                    <td label="Accept"><button class="accept button" onclick="accept()">Accept<i class="fas fa-pen"></i></button></td>
                    <td label="Reject"><button class="reject button" onclick="reject()">Reject<i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                <td label="Order Id"><a href="ongoingDeliveryDetails.php">004</a></td>
                    <td label="Time">10.00a.m</td>
                    <td label="Delivery Area">Kaluthara</td>
                    <td label="Payment"><i class="far fa-money-bill-alt"></i></td>
                    <td label="Accept"><button class="accept button" onclick="accept()">Accept<i class="fas fa-pen"></i></button></td>
                    <td label="Reject"><button class="reject button" onclick="reject()">Reject<i class="fas fa-times"></i></button></td>                </tr>
                <tr>
                <td label="Order Id"><a href="ongoingDeliveryDetails.php">005</a></td>
                    <td label="Time">10.00a.m</td>
                    <td label="Delivery Area">Kaluthara</td>
                    <td label="Payment"><i class="far fa-credit-card"></i></td>
                    <td label="Accept"><button class="accept button" onclick="accept()">Accept<i class="fas fa-pen"></i></button></td>
                    <td label="Reject"><button class="reject button" onclick="reject()">Reject<i class="fas fa-times"></i></button></td>                </tr>
                <tr>
                <td label="Order Id"><a href="ongoingDeliveryDetails.php">006</a></td>
                    <td label="Time">10.00a.m</td>
                    <td label="Delivery Area">Kaluthara</td>
                    <td label="Payment"><i class="far fa-credit-card"></i></td>
                    <td label="Accept"><button class="accept button" onclick="accept()">Accept<i class="fas fa-pen"></i></button></td>
                    <td label="Reject"><button class="reject button" onclick="reject()">Reject<i class="fas fa-times"></i></button></td>                </tr>
                <tr>
                <td label="Order Id"><a href="ongoingDeliveryDetails.php">007</a></td>
                    <td label="Time">10.00a.m</td>
                    <td label="Delivery Area">Kaluthara</td>
                    <td label="Payment"><i class="far fa-credit-card"></i></td>
                    <td label="Accept"><button class="accept button" onclick="accept()">Accept<i class="fas fa-pen"></i></button></td>
                    <td label="Reject"><button class="reject button" onclick="reject()">Reject<i class="fas fa-times"></i></button></td>                </tr>
            </tbody>
        </table>
    </div>    
    <div class="footer">
        <?php include('footerDP.php'); ?>  
    </div>
</body>
</html>