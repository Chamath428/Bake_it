<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-add-stock.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/templates/employee-messageboxes.css">
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-add-stock.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>

    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Add Stock</title>
</head>

<body>

    <?php require_once('header_raw_materials.php'); ?>
    <div class="bgg" id="body">

        <div id="middle-content">

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

            <div class="add-stock">Add Stock</div>

            <div class="popup" id="popup">
                <div class="row-pop1">
                    <div class="item-id">
                        <label for="item-id">Item Id</label>
                        <select placeholder="Select item id" id="popupSelctId">
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
                    <form method="POST" action="<?php echo BASEURL.'/rawMaterialController/addRawMaterials' ?>">
                            <div id="room_fileds">
                            </div>
                            </div>
                            <div class="row-pop3">
                                <button class="savebtn" type="submit" name="save" id="savebtn" id="savebtn"> Save</button>
                            </div>
                    </form>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>