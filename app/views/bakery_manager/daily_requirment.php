<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/bakery_manager/daily_requirment.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/side_nav.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/bakery_manager/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="../../../public/js/bakery_manager/daily_requirment.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Bakery manager home page</title>
</head>
<body>

<?php require_once('header.php'); ?>

     <div class="daily-requirment">Daily Requirment</div>

     <div class="content">

        <div class="category-list">
            <button onclick="category1()" >Category 1</button>
            <button onclick="category2()" >Category 2</button>
            <button onclick="category3()">Category 3</button>
            <button onclick="category4()">Category 4</button>
            <button onclick="category5()">Category 5</button>
          

        </div>

        <div class="category-tables">
                <div id="category1-table" >
                    <h1>Category 1</h1>

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
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
            
                </div>


                <div id="category2-table" >
                    <h1>Category 2</h1>

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
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
            
                </div>

                <div id="category3-table" >
                    <h1>Category 3</h1>

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
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
            
                </div>

                <div id="category4-table" >
                    <h1>Category 4</h1>

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
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
            
                </div>

                <div id="category5-table" >
                    <h1>Category 5</h1>

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
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
            
                </div>
           
        </div>


     </div>
          
<?php include('side_nav_bar.php'); ?>
<?php include('footer.php'); ?>