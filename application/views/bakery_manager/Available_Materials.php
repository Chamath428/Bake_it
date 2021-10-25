<?php 
$count=count($data);
$emptyMaterialCount=0;
$runningLow=0;
foreach ($data as $key => $value) {
    if ($value['stock_amount']==0) {
        $emptyMaterialCount++;
    }
    if($value['stock_amount']<5)$runningLow++;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-available-materials.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css"> 
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-available-materials.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>

    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Available Materials</title>
</head>
<body>
   

        <?php require_once('header_raw_materials.php'); ?>
  <div class="bgg" id="body">

    
    <div class="content">

            <?php if (isset($message['confirmation']) && $message['confirmation']!=""){?>
            <div class="confirm-alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              <p><?php echo $message['confirmation']; ?></p>
            </div>
            <?php } ?>

            <?php if (isset($message['error']) && $message['error']!=""){?>
            <div class="danger-alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              <p><?php echo $message['error']; ?></p>
            </div>
            <?php } ?>

            <div class="ava-mtr-topic">Availablity of Stock</div>

            <div class="box-row" id="boxRow">
                <div class="col" id="boxRowCol1">
                    <h4>Total Materials</h4>
                    <h1><?php echo $count; ?></h1>
                </div>
                <div class="col" id="boxRowCol2">
                    <h4>Running Low Materials</h4>
                    <h1><?php echo $runningLow; ?></h1>
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
                          <td><h4><?php 
                                        if ($value['stock_amount']<5) echo "Low";
                                        else if($value['stock_amount']<20) echo "Medium";
                                        else echo "High";
                           ?></h4></td>
                      </tr>
                  <?php } ?>
                      
                  </tbody>
              </table>
            </div>
              


            <div class="button-retrieve" id="btnretrive">
                <input type="submit" id="submit" value="Issue" onclick="displayPopup()">
            </div>
            <div class="popup" id="popup">
                <div class="row-pop1">
                    <div class="item-id">
                        <label for="item-id">Item Id</label>
                        <select placeholder="Select item id" id="popupSelctId" >
                           <?php foreach ($data as $key => $value) {?> 
                            <option value="<?php echo $value['rawitem_id'] ?>"><?php echo $value['rawitem_id']." - ".$value['rawitem_name'];?></option>        
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
	
                 <form method="post" action="<?php echo BASEURL.'/rawMaterialController/retreiveMaterials';?>">
                    <div id="room_fileds">
                        </div>
                    </div>
                    <div class="row-pop">
                        <button class="savebtn" type="submit" name="save" id="savebtn"> Save</button>
                    </div>
                 </form>
        </div>
      </div>
  </div>


<?php require_once('footer.php'); ?>
 

     