<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/Available_Materials.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/bakery_manager/Available_Materials.js" defer></script>
    <script src="../../../public/js/bakery_manager/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Available Materials</title>
</head>
<body>
   

        <?php require_once('header_raw_materials.php'); ?>
  <div class="bgg" id="body">

    
          <div class="content">

                
        <div class="ava-mtr-topic">Available Materials</div>
        <div class="table">
          <table class="content-table">
              <thead>
                  <tr>
                      <th>Item Name</th>
                      <th>Available</th>
                      <th>Retrieve</th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Sugar</td>
                      <td>90Kg</td>
                      <td>10Kg</td>                  
                      <td><h4>High</h4></td>
                  </tr>
                  <tr>
                      <td>Bread crumbs</td>
                      <td>3Kg</td>
                      <td>1Kg</td>                   
                      <td><h4>Low</h4></td>
                    
                  </tr>
                  <tr>
                      <td>Margarine</td>
                      <td>20Kg</td>
                      <td>2Kg</td>                  
                      <td><h4>Normal</h4></td>
                    
                  </tr>
              </tbody>
          </table>
        </div>
          


          <div class="button-retrieve-save">
            <input type="submit" id="submit" value="Retrieve" onclick="clickRetrive()">
            <input type="submit" id="submit" value="Save" onclick="SaveFunction()">
          </div>
        </div>
  </div>


<?php require_once('footer.php'); ?>
 

     