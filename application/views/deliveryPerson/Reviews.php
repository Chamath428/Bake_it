<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/table.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/deliveryPerson/deliveryPerson-reveiws.css">
        <script src="<?php echo BASEURL ?>/public/js/deliveryPerson/index.js"></script>
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>

    </head>
    <body>
       <section class="header">
        <?php include('headerDP.php'); ?>
       </section>
        
         <div  class="reviews-body" id="body">
           <div class="rev-topic">Overview of Reviews</div>
           <div class="row">
                <div class="col">
                    <h4>Total Reviews</h4>
                    <h1>25</h1>
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
                   <tr>
                       <td label="Date">01/09/2021</td>
                       <td label="Order No">#001</td>
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
                       <td label="Order No">#002</td>
                       <td label="Review Description">disgusting service</td>
                       <td label="Rated Stars">
                           <i id="far-star" class="far fa-star"></i>
                           <i id="far-star" class="far fa-star"></i>
                           <i id="far-star" class="far fa-star"></i>
                           <i id="far-star" class="far fa-star"></i>
                           <i id="far-star" class="far fa-star"></i>
                        </td>
                   </tr>
                   <tr>
                       <td label="Date">03/09/2021</td>
                       <td label="Order No">#003</td>
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
                       <td label="Order No">#004</td>
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
                       <td label="Order No">#005</td>
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
    
        <section class="footer">
              <?php include('footerDP.php'); ?>   
        </section> 
        
    </body>
</html>