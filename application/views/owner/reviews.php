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
                   <label for="Branch">Branch</label>
                   <div class="text-fill">
                       <select placeholder="Select Branch" name="branch_Id">
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
                        <h1>25</h1>
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
<!--                 
                <div class="delivery">
                     <h4>Best Delivery Person Form Ratings</h4>
                     <i class="fas fa-user"></i>
                     <span>Amal Perera</span>
                </div> -->
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
                       <tr>
                           <td label="Date">01/09/2021</td>
                           <td label="Order No">117</td>
                           <td label="Review Description">You deliverd ontime.nice service</td>
                           <td label="Rated Stars">
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                            </td>
                       </tr>
                       <tr>
                           <td label="Date">02/09/2021</td>
                           <td label="Order No">118</td>
                           <td label="Review Description">disgusting service</td>
                           <td label="Rated Stars">
                               <i id="far-star" class="fas fa-star"></i>
                               <i id="far-star" class="fas fa-star"></i>
                               <i id="far-star" class="fas fa-star"></i>
                               <i id="far-star" class="fas fa-star"></i>
                               <i id="far-star" class="fas fa-star"></i>
                            </td>
                       </tr>
                       <tr>
                           <td label="Date">03/09/2021</td>
                           <td label="Order No">119</td>
                           <td label="Review Description">Good service</td>
                           <td label="Rated Stars">
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                            </td>
                       </tr>
                       <tr>
                           <td label="Date">04/09/2021</td>
                           <td label="Order No">120</td>
                           <td label="Review Description">Good service</td>
                           <td label="Rated Stars">
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                            </td>
                       </tr>
                       <tr>
                           <td label="Date">04/09/2021</td>
                           <td label="Order No">125</td>
                           <td label="Review Description">You deliverd ontime.nice service</td>
                           <td label="Rated Stars">
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="fas-star" class="fas fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                               <i id="far-star" class="far fa-star"></i>
                            </td>
                       </tr>
                   </tbody>
               </table>
            </div>

  <div id="footer">
    <?php include('footer.php')?>
  </div>
</body>
</html>