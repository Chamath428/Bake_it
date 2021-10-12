<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="../../../public/js/deliveryPerson/deliveries.js"></script> -->
    <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/deliveries.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/deliveryPerson/table.css">
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <div id="header">
        ?php include('header.php')?> 
    </div>   -->
    <div class="delivery-body">
        <h2>Deliveries</h2>
        <!--table for ongoing Deliveries-->
        <h3 id="table-caption">Ongoing Deliveries</h3>
        <h4>Date: Tuseday 5th October</h4>
        <table id="Ongoing-Deliveries">
            <thead>
                    <tr>
                        <th>Time</th>
                        <th>Order Id</th>
                        <th>Location</th>
                        <th>Payment</th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                    <td label="Time">10.00a.m</td>
                    <td label="Order No">1</td>
                    <td label="Location">Kaluthara</td>
                    <td label="Payment">Rs.1500.00</td>
                    <td class="click pick-order">
                        <button id="order1" onclick="pickOrder()">Pick</button>
                        <!-- <input type="button" value="Home" class="homebutton" id="btnHome" onClick="window.location = 'http://google.com'" /> --> 
                    </td>
                </tr>
                <tr>
                    <td label="Time">10.00a.m</td>
                    <td label="Order No">2</td>
                    <td label="Location">Kaluthara</td>
                    <td label="Payment">Rs.1500.00</td>
                    <td class="click pick-order"><button>Pick</button></td> 
                </tr>
                <tr>
                    <td label="Time">10.00a.m</td>
                    <td label="Order No">3</td>
                    <td label="Location">Kaluthara</td>
                    <td label="Payment">Rs.1500.00</td>
                    <td class="click pick-order"><button>Pick</button></td> 
                </tr>
                <tr>
                    <td label="Time">10.00a.m</td>
                    <td label="Order No">4</td>
                    <td label="Location">Kaluthara</td>
                    <td label="Payment">Rs.1500.00</td>
                    <td class="click pick-order"><button>Pick</button></td> 
                </tr>
            </tbody>
        </table>
    </div>    
    <div class="footer">
        <?php include('footer.php'); ?>  
    </div>
</body>
</html>