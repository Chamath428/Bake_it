<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/overview.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/dailyRequirement.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
  <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/templates/employee-messageboxes.css">
  <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer></script>
  <script src="<?php echo BASEURL; ?>/public/js/branchManager/menu.js" defer></script>
  <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


</head>

<body>
  <?php include "headerIndex.php" ?>
  <div id="body" class="container-1">

    <?php if (isset($message['confirmation']) && $message['confirmation'] != "") { ?>
      <div class="confirm-alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p><?php echo $message['confirmation']; ?></p>
      </div>
    <?php } ?>

    <?php if (isset($message['error']) && $message['error'] != "") { ?>
      <div class="danger-alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p><?php echo $message['error']; ?></p>
      </div>
    <?php } ?>

    <div id="menu" class="menu">
      <div class="heading">
        <h2>Daily Requirement</h2>
      </div>
      <div class="drop-down-btn-container">
        <div class="drop-down">
          </br>
          <h4>Select Category</h4>

          <form method="post" action="<?php echo BASEURL ?>/branchManagerDailyRequirmentController/getItems">
            <select name="categoryId" id="categoryId">

              <?php
              foreach ($data[2] as $key => $category) {
                if ($category['category_id'] == $data[1]) { ?><option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
              <?php }
              } ?>

              <?php
              foreach ($data[2] as $key => $category) {
                if ($category['category_id'] != $data[1]) { ?><option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
              <?php }
              } ?>
            </select>
            <?php $category_id = $data[1];?>
        </div>
        <div class="view-btn-container">
          <button type="submit" class="viewBtn">View Items</button>
          </form>
          <button id="edit" onclick="viewSave()" class="edit-btn">Edit Quantity</button>
        </div>
      </div>


      <form method="post" action="<?php echo BASEURL ?>/branchManagerDailyRequirmentController/updateItems">
        <div class="menu-table" id="table">
          <table>
            <thead>
              <tr>
                <th>Item ID</th>
                <th>Food Item</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
              foreach ($data[3] as $key => $item) { ?>
                <tr>
                  <td>
                    <input type="hidden" name="<?php echo "itemId-" . $i; ?>" value="<?php echo $item['item_id']; ?>">
                    <?php echo $item['item_id']; ?>
                  </td>
                  <td>
                    <div class="cell">
                      <div class="image"><img src="<?php echo BASEURL; ?>/public/images/branchManager/b1.png" alt=""></div>
                      <div>
                        <p> <?php echo $item['item_name']; ?></p>
                      </div>
                    </div>
                  </td>
                  <td><input class="quant" class="quant" name="<?php echo "daily_requirement-" . $i; ?>" type="number" readonly="" min="0" value="<?php echo $item['daily_requirement']; ?>"></td>
                </tr>
              <?php
                $i++;
              } ?>
              <input type="hidden" name="row-count" value="<?php echo $i; ?>">
            </tbody>
          </table>

        </div>

        <div class="btn-container">
          <button id="save" class="save-btn">Save Changes</button>
        </div>


      </form>
      <div class="view-chart-btn">
        <button class="view-btn" onclick="viewTable()">Last Week Item Sales</button>

      </div>


    </div>
    <div id="popUpView" class="pop_up-view">
      <div class="cancel-icon"><a onclick="closePopUpUseCancel()"> <i class="fas fa-times"></i></a></div>
        <h3>Last Week Sales Report of the Category</h3>
      <div class="col">
              <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
       </div>

    </div>


  </div>
  <?php include "footer.php" ?>
  <script src="<?php echo BASEURL; ?>/public/js/branchManager/menu.js" defer></script>
</body>

</html>