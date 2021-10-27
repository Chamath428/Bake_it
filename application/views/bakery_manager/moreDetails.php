<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-more-details-complete-order.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <!-- <script src="" defer></script> -->
    <title>More details complete order</title>
</head>
<body>

      

<div class="order-details">
               
               <div class="basic-details"> 
               <table> 
                       <tr> 
                           <td>Order ID</td> 
                           <td>#117</td> 
                       </tr> 
                       <tr> 
                           <td>Customer Name</td> 
                           <td>Chamath Chinthana</td> 
                       </tr> 
                       <tr> 
                           <td>Contact Number</td> 
                           <td>0712343212</td> 
                       </tr> 
                       <tr> 
                           <td>Order Type</td> 
                           <td>Special Event Order</td> 
                       </tr> 
                       <tr> 
                           <td>Needed Date</td> 
                           <td>2021/11/01</td> 
                       </tr> 
                       <tr> 
                           <td>Location</td> 
                           <td><a href="#"><i class="fas fa-map-marker-alt"></i>Customer Location</a></td> 
                       </tr> 
                       <tr> 
                           <td>Payment Method</td> 
                           <td> Card</td> 
                           <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                       </tr>
                       <tr> 
                         <td>Delivery Person</td> 
                         <td>Saman Fernando</td> 
                         <!-- <td><a href="">Dilantha Malagamuwa</a></td> --> 
                     </tr> 
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
                 
                 <tr>
                   <td>#001</td>
                   <td>
                     <div class="cell">
                       <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                       <div><p>Chicken Burger</p></div>
                     </div>
                   </td>
                   <td>450.00</td>
                   <td>10</td>
                 </tr>
                 <tr>
                   <td>#002</td>
                   <td>
                     <div class="cell">
                       <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                       <div><p>Cheese Chicken Burger</p></div>
                     </div>
                   </td>
                   <td>450.00</td>
                   <td>10</td>
                 </tr>
                 <tr>
                   <td>#003</td>
                   <td>
                     <div class="cell">
                       <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                       <div><p>Fish Burger</p></div>
                     </div>
                   </td>
                   <td>450.00</td>
                   <td>10</td>
                 </tr>
                 <tr>
                   <td>#004</td>
                   <td>
                     <div class="cell">
                       <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                       <div><p>Ham Burger</p></div>
                     </div>
                   </td>
                   <td>450.00</td>
                   <td>10</td>
                 </tr>
                 <tr>
                   <td>#005</td>
                   <td>
                     <div class="cell">
                       <div class="image"><img src="../../../public/images/branchManager/b1.png" alt=""></div>
                       <div><p>Egg Burger</p></div>
                     </div>
                   </td>
                   <td>450.00</td>
                   <td>10</td>
                 </tr>
                 
               </tbody>
             </table>
       </div>
       <div class="total-container"> 
         <table> 
          <tr> 
           <td>Subtotal</td> 
           <td>6000.00 LKR</td> 
          </tr> 
          <tr> 
           <td>Delivery Tax</td> 
           <td>200.00 LKR</td> 
          </tr> 
          <tr> 
           <td>Grand Total</td> 
           <td>6200.00 LKR</td> 
          </tr> 
         </table> 
        </div>
        <div class="btn-container">
          <button class="btn" onclick="assign()">View Customer Rate</button>
        </div>
   </div>
     
<?php include('footer.php'); ?>