<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-daily-requirment.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/bakery_manager/bakery-manager-header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-daily-requirment.js" defer></script>
    <script src="<?php echo BASEURL ?>/public/js/bakery_manager/bakery-manager-header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Daily Requirment</title>
</head>
<body>

<?php require_once('header_index.php'); ?>

<div class="bgg" id="body">
    
<div class="daily-requirment">Daily Requirment<p id="demo"></p>
        
        </div>
      
   
        <div class="content">
   
           <div class="drop-down-list">
                   <div class="branch">
                       <label for="branch">Branch</label>
                       <select placeholder="Select branch" >
                           <option>Deniyaya</option>
                           <option>Akuressa</option>
                           <option>Matara</option>
                           <option>Pitabeddara</option>
                           <option>Morawaka</option>
                           <option>Kotapola</option>
   
                       </select>
                   </div>
   
                   <div class="category-list">
                       <label for="category">Category</label>
                       <select placeholder="Select category" >
                           <option>Breads</option>
                           <option>Rolls</option>
                           <option>Muffins</option>
                           <option>Cakes</option>
                           <option>Sweet goods</option>
   
                       </select>
                   </div>
   
           </div>
           <div class="btn">
               <button onclick="category1()">View</button>
           </div>
   
           <div class="category-tables">
                   <div id="category1-table" >
   
                       <table class="content-table">
                               <thead>
                                   <tr>
                                       <th>Item Id</th>
                                       <th>Name</th>
                                       <th>Quantity</th> 
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>###1</td>
                                       <td>chocolate cake</td>
                                       <td>xxx</td>
                                   </tr>
                                   <tr>
                                       <td>###2</td>
                                       <td>cheesecakes</td>
                                       <td>xxx</td>
                                       
                                   
                                   </tr>
                                   <tr>
                                       <td>###3</td>
                                       <td>coffee cake</td>
                                       <td>xxx</td>
                                       
                                   
                                   </tr>
                               </tbody>
                           </table>
               
                   </div>
   
   
           </div>
   
   
        </div>
</div>
          
<?php include('footer.php'); ?>