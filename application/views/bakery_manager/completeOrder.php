<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-complete-order.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <!-- <link rel="stylesheet" href="../../../public/css/bakery_manager/side_nav.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/bakery-manager-complete-order.js" defer></script>
    <script src="../../../public/js/bakery_manager/bakery-manager-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    
    <title>Complete Order</title>
</head>
<body>



        <?php require_once("headerOrders.php"); ?>
        <div class="bgg" id="body">
            
                <div class="completed">Completed Order</div>
                

                <div class="table">
                <table class="content-table">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Date</th>
                                <th>Outlet</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="moreDetails.php">0001</a></td>
                                <td>2020/03/23</td>
                                <td>Deniyaya</td>                    
                                <td>Completed</td>
                                
                            </tr>
                            <tr>
                                <td><a href="moreDetails.php">0002</a></td>
                                <td>2021/07/05</td>
                                <td>Matara</td>                    
                                <td>Completed</td>
                                
                            
                            </tr>
                            <tr>
                                <td><a href="moreDetails.php">0003</a></td>
                                <td>2021/05/30</td>
                                <td>Akuressa</td>                    
                                <td>Completed</td>
                                
                            
                            </tr>
                        </tbody>
                    </table>
                
                </div>
                
       
        </div>
      <?php require_once("footer.php"); ?>

