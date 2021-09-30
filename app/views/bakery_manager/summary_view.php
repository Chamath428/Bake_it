<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/summary_view.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/side_nav.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/summary_view.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>summary view</title>
</head>
<body>
   

        <?php require_once('header.php'); ?>

        <div class="summary-topic">
                  <pre>
Summary of Raw raw materials
          Inventory
                  </pre>
        </div>
 

      <div class="table">
         <table class="content-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Material Id</th>
                    <th>Name</th>
                    <th>Retrieved</th>
                    <th>Added</th>
                    
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>DD/MM/YY</td>
                    <td>#111</td>
                    <td>Material 1</td>
                    <td>10Kg</td>
                    <td>100Kg</td>                  
                </tr>
                    <td>DD/MM/YY</td>
                    <td>#112</td>
                    <td>Material 2</td>
                    <td>4Kg</td>
                    <td>0</td>             
                </tr>
                <tr>
                    <td>DD/MM/YY</td>
                    <td>#113</td>
                    <td>Material 3</td>
                    <td>10Kg</td>
                    <td>100Kg</td>                 
                </tr>
            </tbody>
        </table>
      </div>
        
     




<?php require_once('side_nav_bar.php'); ?>
<?php require_once('footer.php'); ?>
 

     