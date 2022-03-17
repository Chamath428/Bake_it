<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/owner/owner-reviews.css" class="rel">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">
    <script src="<?php echo BASEURL; ?>/public/js/owner/owner-employeeAccounts.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>
<body>
  
  <div id="header">
    <?php include('header.php')?> 
  </div>
  <div  class="reviews-body" id="body">
      <div class="rev-topic">Overview of Reviews</div>
      <div class="branch-selection">
        <div class="text">
                   <label for="Branch">Outlet</label>
                   <form method="post" action="<?php echo BASEURL."/ownerReviewsController/getReviewsTabel" ?>">
                   <div class="text-fill">
                       <select placeholder="Select Branch" name="branch_id">
                           <option value="0">Any</option>
                           <option value="1">Kesbawa</option>
                           <option value="2">Baththaramulla</option>
                           <option value="3">Piliyandala</option>
                       </select>
                   </div>
               </div>
      </div>
      <div class="searchbtn">
        <button type="input">Search</button>
      </div>
      <!-- selected branch review details -->
              <h3 id="table-caption">Reviews Details</h3>
               <div class="row">
                    <div class="col">
                        <h4>Total Reviews</h4>
                        <h1><?php echo $data[0]?></h1>
                    </div>
                    <div class="col">
                        <h4>Total Ratings</h4>
                        <h1>35</h1>
                    </div>
                    <div class="col">
                        <h4>Total Ratings</h4>
                        <h1>
                          <i id="fas-star" class="fas fa-star"></i>
                          <i id="fas-star" class="fas fa-star"></i>
                          <i id="fas-star" class="fas fa-star"></i>
                          <i id="far-star" class="far fa-star"></i>
                          <i id="far-star" class="far fa-star"></i>
                        </h1>
                    </div>
                    <div class="col">
                        <h4>Best Delivery Person Form Ratings</h4>
                        <h1><i class="fas fa-user"></i></h1>
                        <span>Amal Perera</span>

                    </div>
                </div>
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
                                foreach($data as $key => $review) {?>
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

  <div id="footer">
    <?php include('footer.php')?>
  </div>
</body>
</html>