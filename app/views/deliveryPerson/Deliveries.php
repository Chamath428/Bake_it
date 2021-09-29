<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../public/js/deliveries.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveries.css">
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
        
    </head>

    <body>    
       <section class="header">
          <?php include('header.php'); ?>
       </section>

       <section id="section1">
            <!--button-->
            <div class="table-selection">
                <a href="#" onclick="openOngoing()">Ongoing Deliveries</a>
                <a href="#" onclick="openHistory()">Delivery History</a>
            </div>
            <!--table for ongoing Deliveries-->
            <table id="Ongoing-Deliveries" onclick="showOngoing()">
                <tr>
                    <th>Order No</th>
                    <th>Location</th>
                    <th>Payment</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kaluthara</td>
                    <td>Rs.1500.00</td>
                    <td class="button"><button>Pick</button></td> 
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kaluthara</td>
                    <td>Rs.1500.00</td>
                    <td class="button"><button>Pick</button></td> 
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kaluthara</td>
                    <td>Rs.1500.00</td>
                    <td class="button"><button>Pick</button></td> 
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kaluthara</td>
                    <td>Rs.1500.00</td>
                    <td class="button"><button>Pick</button></td> 
                </tr>
            </table>

            <!--table for Delivery History-->
            <table id="Delivery-History" onclick="showHistory()">
                <tr>
                    <th>Order No</th>
                    <th>Location</th>
                    <th>Payment</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Panadura</td>
                    <td>Rs.1450.00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Panadura</td>
                    <td>Rs.1450.00</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Panadura</td>
                    <td>Rs.1450.00</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Panadura</td>
                    <td>Rs.1450.00</td>
                </tr>
            </table>
        </section>

        <section class="footer">
            <?php include('footer.php'); ?>  
        </section>
        
    </body>
</html>