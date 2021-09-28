<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../../public/js/index.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../public/css/deliveies.css">
        <!-- <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>

    <body>    
        <?php include('header.php'); ?>
            <!--button-->
            <div class="button">
                <a href="#"><button onclick="openOngoing()">Ongoing Deliveries</button></a>
                <a href="#"><button onclick="openHistory()">Delivery History</button></a>
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
                    <td><button>Pick</button></td>
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
                    <td>2</td>
                    <td>Panadura</td>
                    <td>Rs.1450.00</td>
                </tr>
            </table>
            <?php include('footer.php'); ?> 
        
    </body>
</html>