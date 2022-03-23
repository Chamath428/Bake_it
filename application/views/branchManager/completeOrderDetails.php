<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/orderDetails.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/header_index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>/public/css/branchManager/footer.css">
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/header.js" defer ></script>
    <script src="<?php echo BASEURL; ?>/public/js/branchManager/orderpopup.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<body class="bgg">
    <?php include "headerOrders.php"?>
    <div id="body" class="container-1">
        <div class="container-2">
          <!-- <div class="heading">
            <h1>Order Details</h1>
          </div> -->
        <div id="popup-1" class="popup-container">
          <div class="mid-box-2">

            <h1>Ratings</h1>
            <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <h1>Review</h1>
            <div class="col">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <button onclick="closePopup()">Back</button>
          </div>
          
        </div>

        
            <div class="heading">
              <h1>Order Details</h1>
            </div>
            <div class="order-details">
               
                    <div class="basic-details"> 
                    <table>
                      <?php
                      $i=0;

                      foreach($data[0] as $key => $basicOrderDetails){?> 
                            <tr> 
                                <td>Order ID</td> 
                                <td><?php echo $basicOrderDetails['order_id'];?></td> 
                            </tr> 
                            <tr> 
                                <td>Customer Name</td> 
                                <td><?php echo $basicOrderDetails['full_name'];?></td> 
                            </tr> 
                            <tr> 
                                <td>Contact Number</td> 
                                <td><?php echo $basicOrderDetails['contact_number'];?></td> 
                            </tr> 
                            <tr> 
                                <td>Order Type</td> 
                                <td><?php if ($basicOrderDetails['order_type'] == 1) {echo "Quick Order";} 
                                else {echo "Special Order";}?></td> 
                            </tr> 
                            <tr> 
                                <td>Completed Date</td> 
                                <td><?php if ($basicOrderDetails['order_type'] == 1) {echo $basicOrderDetails['placed_date'];} 
                                else {echo $basicOrderDetails['needed_date'];}?></td> 
                            </tr> 

                            <?php if($basicOrderDetails['receiving_method']==2){?>
                            <tr> 
                                <td>Location</td> 
                                <td><a href="#"><?php if($basicOrderDetails['address'] == ", ,"){echo "No Address";} else {echo $basicOrderDetails['address'];}?></a></td> 
                            </tr>
                            <?php 
                            }?> 
                            <tr> 
                                <td>Payment Method</td> 
                                <td><?php if ($basicOrderDetails['payment_type'] == 1) {echo "Cash Payment";} 
                                else {echo "Card Payment";}?></td> 
                                <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                            </tr>

                            <?php if($basicOrderDetails['receiving_method']==2){?>
                            <tr> 
                              <td>Delivery Person</td> 
                              <td><?php if (isset($basicOrderDetails['delivery_person_id'])){echo $basicOrderDetails['delivery_person_id'];}
                              else{echo "Not Assigned";}?></td> 
                              <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                          </tr>
                          <?php
                            }?> 
                          <?php
                          $i++;
                          }?>
                        </table> 
                    </div>
            </div>
            <div class="order-details-table">
            <table id="orderDetails">
                    <thead>
                      <tr>
                        <th>Item ID</th>
                        <th>Food Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i=0;
                      $subtotal=0;
                      $receiving_method=0;
                      $grand_total=0;

                      foreach($data[1] as $key => $orderItemDetails){?>
                      <tr>
                        <td><?php echo $orderItemDetails['item_id'];?></td>
                        <td>
                          <div class="cell">
                            <div class="image"><img src="<?php echo BASEURL;?>/public/images/branchManager/b1.png" alt=""></div>
                            <div><p><?php echo $orderItemDetails['item_name'];?></p></div>
                          </div>
                        </td>
                        <td><?php echo $orderItemDetails['price'];?></td>
                        <td><?php echo $orderItemDetails['quantity'];?></td>
                      </tr>
                      <?php
                      $i++;
                      $subtotal+=$orderItemDetails['price']*$orderItemDetails['quantity'];
                      $receiving_method=$orderItemDetails['receiving_method'];
                      }?>
                    </tbody>
                  </table>
            </div>
            <div class="total-container"> 
              <table> 
              <tr> 
                <td>Subtotal</td> 
                <td><?php echo $subtotal.".00 LKR";?></td> 
              </tr> 
              <tr> 
                <td>Delivery Tax</td> 
                <td><?php if($receiving_method==2) {echo "300.00 LKR";} else {echo "0.00 LKR";}?></td> 
              </tr> 
              <tr> 
                <td>Grand Total to Pay</td> 
                <td><?php if($receiving_method==2){
                  $grand_total=($subtotal+300);
                  echo $grand_total.".00 LKR";}
                  else{
                    $grand_total=($subtotal);
                    echo $grand_total.".00 LKR";}?></td> 
              </tr> 
              </table> 
             </div>
             <div class="btn-container">
               <button class="btn" onclick="assign()">View Customer Rate</button>
             </div>
        </div>
    </div>
    <?php include "footer.php"?>    
</body>
</html>