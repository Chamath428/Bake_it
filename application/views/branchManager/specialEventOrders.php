<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/orders.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/footer.css">
    <script src="../../../public/js/branchManager/header.js" defer ></script>
    <script src="../../../public/js/branchManager/order.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body class="bgg">
    <?php include "headerOrders.php"?>
    <div id="body" class="container-1">
        <div class="container-2">
            <div class="heading">
              <h1>Branch Orders of the Day</h1>
            </div>
            <div class="overview-container">
                <div class="box">
                    <h4>Total Orders</h4>
                    <h1>30</h1>
                </div>
                <div class="box">
                    <h4>Completed Orders</h4>
                    <h1>5</h1>
                </div>
                <div class="box">
                    <h4>Uncompleted Orders</h4>
                    <h1>25</h1>
                </div>
            </div>
            <div class="heading">
              <h1>Special Event Order Details</h1>
            </div>
            <div class="orders-table">
            <table>
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Grand Total</th>
                        <th>Placed Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td><a href="../../views/branchManager/specialEventOrdersDetails.php" class="order-id">#001</a></td>
                        <td>Rs 250.00</td>
                        <td>2021/10/26</td>
                      </tr>

                      <tr>
                        <td><a href="../../views/branchManager/specialEventOrdersDetails.php" class="order-id">#002</a></td>
                        <td>Rs 1000.00</td>
                        <td>2021/10/26</td>
                      </tr>

                      <tr>
                        <td><a href="../../views/branchManager/specialEventOrdersDetails.php" class="order-id">#003</a></td>
                        <td>Rs 500.00</td>
                        <td>2021/10/26</td>
                      </tr>

                      <tr>
                        <td><a href="../../views/branchManager/specialEventOrdersDetails.php" class="order-id">#004</a></td>
                        <td>Rs 1500.00</td>
                        <td>2021/10/26</td>
                      </tr>

                      <tr>
                        <td><a href="../../views/branchManager/specialEventOrdersDetails.php" class="order-id">#005</a></td>
                        <td>Rs 700.00</td>
                        <td>2021/10/26</td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>