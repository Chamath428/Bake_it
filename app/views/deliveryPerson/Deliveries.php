<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../public/js/deliveries.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveries.css">
        <link rel="stylesheet" type="text/css" href="../../../public/css/table.css">
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
        
    </head>

    <body>    
       <section class="header">
          <?php include('header.php'); ?>
       </section>

       <section class="delivery-body">
            <!--button-->
            <h2>Deliveries</h2>
            <div class="button-selection">
                <a href="#" onclick="openOngoing()">Ongoing Deliveries</a>
                <a href="#" onclick="openHistory()">Delivery History</a>
            </div>
            <!--table for ongoing Deliveries-->
            <h3 id="table-caption1">Ongoing Deliveries</h3>
            <table id="Ongoing-Deliveries">
                <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Location</th>
                            <th>Payment</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td label="Order No">1</td>
                        <td label="Location">Kaluthara</td>
                        <td label="Payment">Rs.1500.00</td>
                        <td class="click pick-order">
                            <button id="order1" onclick="pickOrder()">Pick</button>
                            <!-- <input type="button" value="Home" class="homebutton" id="btnHome" onClick="window.location = 'http://google.com'" /> --> 
                        </td>
                    </tr>
                    <tr>
                        <td label="Order No">2</td>
                        <td label="Location">Kaluthara</td>
                        <td label="Payment">Rs.1500.00</td>
                        <td class="click pick-order"><button>Pick</button></td> 
                    </tr>
                    <tr>
                        <td label="Order No">3</td>
                        <td label="Location">Kaluthara</td>
                        <td label="Payment">Rs.1500.00</td>
                        <td class="click pick-order"><button>Pick</button></td> 
                    </tr>
                    <tr>
                        <td label="Order No">4</td>
                        <td label="Location">Kaluthara</td>
                        <td label="Payment">Rs.1500.00</td>
                        <td class="click pick-order"><button>Pick</button></td> 
                    </tr>
                </tbody>
            </table>

            <!--table for Delivery History-->
            <h3 id="table-caption2">Delivery History</h3>
            <table id="Delivery-History" onclick="showHistory()">
                <thead>
                    <tr>
                        <th>Order No</th>
                        <th>Location</th>
                        <th>Payment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td label="Order No">1</td>
                        <td label="Location">Panadura</td>
                        <td label="Payment">Rs.1450.00</td>
                        <td class="click more-details"><button>More details</button></td>
                    </tr>
                    <tr>
                        <td label="Order No">2</td>
                        <td label="Location">Panadura</td>
                        <td label="Payment">Rs.1450.00</td>
                        <td class="click more-details"><button>More details</button></td>
                    </tr>
                    <tr>
                        <td label="Order No">3</td>
                        <td label="Location">Panadura</td>
                        <td label="Payment">Rs.1450.00</td>
                        <td class="click more-details"><button>More details</button></td>
                    </tr>
                    <tr>
                        <td label="Order No">4</td>
                        <td label="Location">Panadura</td>
                        <td label="Payment">Rs.1450.00</td>
                        <td class="click more-details"><button>More details</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <div class="footer">
            <?php include('footer.php'); ?>  
        </div>
        
    </body>
</html>