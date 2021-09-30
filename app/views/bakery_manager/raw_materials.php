<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/raw_materials.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/side_nav.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/raw_materials.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Raw Materials</title>
</head>
<body>
   
        <?php require_once('header.php'); ?>

       <!--  <div class="content">
          <div class="available-material-btn">
            <input type="button" id="button" value="Available Materials" onclick="availableMaterialsFunction()">
          </div>
          <div class="add-stock-btn">
            <input type="button" id="button" value="Add Stock" onclick="addStockFunction()">
          </div>
          <div class="summary-btn">
            <input type="button" id="button" value="Summary" onclick="summaryFunction()">
          </div>
        </div> -->
        <section>
              <div class="raw-btn">
                    <a href="Available_Materials.php"><button>Available Materials</button></a>
                    <a href="add_stock.php"><button>Add Stock</button></a>
                    <a href="summary.php"><button>Summary</button></a>
              </div>
        </section>
        


        <?php require_once('side_nav_bar.php'); ?>
        <?php require_once('footer.php'); ?>
 

     