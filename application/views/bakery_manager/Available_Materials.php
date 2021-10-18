<?php 
$count=count($data);
$emptyMaterialCount=0;
foreach ($data as $key => $value) {
    if ($value['stock_amount']==0) {
        $emptyMaterialCount++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-available-materials.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-available-materials.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>

    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Available Materials</title>
</head>
<body>
   

        <?php require_once('header_raw_materials.php'); ?>
  <div class="bgg" id="body">

    
    <div class="content">
            <div class="ava-mtr-topic">Availablity of Stock</div>

            <div class="box-row" id="boxRow">
                <div class="col" id="boxRowCol1">
                    <h4>Total Materials</h4>
                    <h1><?php echo $count; ?></h1>
                </div>
                <div class="col" id="boxRowCol2">
                    <h4>Expire Materials</h4>
                    <h1>2</h1>
                </div>
                <div class="col" id="boxRowCol3">
                    <h4>Empty Materials</h4>
                    <h1><?php echo $emptyMaterialCount; ?></h1>
                </div>
            </div>
                
            <div class="table">
              <table class="content-table" id="contTable">
                  <thead>
                      <tr>
                          <th>Item Id</th>
                          <th>Item Name</th>
                          <th>Quantity</th>
                          <th>Availablity</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) {?>
                      <tr>
                          <td><?php echo $value['rawitem_id'];?></td>
                          <td><?php echo $value['rawitem_name']; ?></td>
                          <td><?php echo $value['stock_amount']." ".$value['measure_unit']; ?></td>                
                          <td><h4>High</h4></td>
                      </tr>
                  <?php } ?>
                      
                  </tbody>
              </table>
            </div>
              


            <div class="button-retrieve" id="btnretrive">
                <input type="submit" id="submit" value="Retrieve" onclick="displayPopup()">
            </div>
            <div class="popup" id="popup">
                <div class="row-pop1">
                    <div class="item-id">
                        <label for="item-id">Item Id</label>
                        <select placeholder="Select item id">
                           <?php foreach ($data as $key => $value) {?> 
                            <option><?php echo $value['rawitem_id']." - ".$value['rawitem_name'];?></option>        
                            <?php } ?>
                        </select>
                    </div>
                    <div class="addbtn"> <button onclick="add_fields()">+Add</button></div>

                </div>
                <div class="row-pop2">
                    <div class="name-quantity" id="nameQuantity">
                        <div class="item-name">Name</div>
                        <div class="item-quantity">Quantity</div>
                    </div>
                    <div id="room_fileds">
                    </div>
                </div>
                <div class="row-pop">
                    <button class="savebtn" onclick=" SaveFunction()" id="savebtn"> Save</button>
                </div>
        </div>
      </div>
  </div>


<?php require_once('footer.php'); ?>
 

     