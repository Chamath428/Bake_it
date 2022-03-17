<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-footer.css">
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-header.js" defer ></script>
    <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/deliveryPerson-availability.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-reveiws.css">
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>

    </head>
    <body>
       <section class="header">
        <?php include('headerDP.php'); ?>
       </section>
        
         <div  class=" bgg reviews-body" id="body">
           <div class="rev-topic">Overview of Reviews</div>
           <div class="row">
                <div class="col">
                    <h4>Total Reviews</h4>
                    <h1><?php echo $data[0]?></h1>
                </div>
                <div class="col">
                    <h4>Total Ratings</h4>
                    <h1>35</h1>
                </div>
            </div>
            <h3 id="table-caption">Reviews Details</h3>
           <table id="reviews-table">
               <thead>
                   <tr>
                       <td>Date</td>
                       <td>Order Id</td>
                       <td>Review Description</td>
                       <td>Rated Stars</td>
                   </tr>
               </thead>
               <tbody>
                    <?php
                        $i =0;
                        foreach($data[2] as $key => $review) {?>
                   <tr>
                       <td label="Date"><?php echo $review['needed_date'];?></td>
                       <td label="Order No"><?php echo $review['order_id'];?></td>
                       <td label="Review Description"><?php echo $review['review'];?></td>
                       <td label="Rated Stars">
                       <?php
                           $j = 0;
                           for ($i=0; $i <$review['rating'] ; $i++){?> 
                              <i id="fas-star" class="fas fa-star"></i>
                           <?php
                           }?> 
                           <?php
                           $blankStars = 5 - $review['rating'];
                           for ($i=0; $i <$blankStars ; $i++) {?> 
                              <i id="far-star" class="far fa-star"></i>
                           <?php
                           }?>
                        </td>
                   </tr>
                   <?php
                        $i++;
                    }?> 
               
                 
               </tbody>
           </table> 
        </div>
    
        <section class="footer">
              <?php include('footerDP.php'); ?>   
        </section> 
        
    </body>
</html>