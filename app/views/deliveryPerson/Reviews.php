<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../../public/css/table.css">
        <link rel="stylesheet" type="text/css" href="../../../public/css/Reveiws.css">
        <script src="../../../public/js/index.js"></script>
        <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>

    </head>
    <body>
       <section class="header">
        <?php include('header.php'); ?>
       </section>
        
         <div  class="reviews-body">
           <h3>Reviews</h3>
           <table id="reviews-table">
               <thead>
                   <tr>
                       <td>Order No</td>
                       <td>Review Description</td>
                       <td>Rated Stars</td>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td label="Order No">1</td>
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
                       <td label="Order No">2</td>
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
                       <td label="Order No">3</td>
                       <td label="Review Description">Good service</td>
                       <td label="Rated Stars">
                           <i id="fas-star" class="fas fa-star"></i>
                           <i id="fas-star" class="fas fa-star"></i>
                           <i id="far-star" class="far fa-star"></i>
                           <i id="far-star" class="far fa-star"></i>
                           <i id="far-star" class="far fa-star"></i>
                        </td>
                   </tr>
               </tbody>
           </table> 
        </div>
    
        <section class="footer">
              <?php include('footer.php'); ?>   
        </section> 
        
    </body>
</html>