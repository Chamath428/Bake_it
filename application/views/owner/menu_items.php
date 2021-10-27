<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/owner/menu_items.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/owner/footer.css" class="rel">
    <link rel="stylesheet" href="../../../public/css/owner/header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="'https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'"></script>
    <script src="../../../public/js/owner/menu_items.js" defer></script>
    <script src="../../../public/js/owner/header.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Menu Items</title>
</head>
<body>

<?php require_once('newheader.php'); ?>

     <div class="menu-items-topic">Menu Items</div>

     <div class="content" id="body">

         
     <div class="drop-down-list">
                   <div class="branch">
                       <label for="branch">Outlet</label>
                       <select placeholder="Select branch" >
                           <option>Kasbewa</option>
                           <option>Bahtharamulla</option>
                           <option>Piliyandala</option>
   
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
                    <h4>Category 1</h4>

                    <table class="content-table">
                            <thead>
                                <tr>
                                       
                                    <th>Item Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th></th>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                    <td>###1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                    <td> <input type="checkbox" id="Check-box1" onclick="myFunction(this.id)"></td>
                                </tr>
                                <tr>
                                   
                                    <td>###2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    <td> <input type="checkbox" id="Check-box2" onclick="myFunction(this.id)"></td>
                                    
                                
                                </tr>
                                <tr>
                                   
                                    <td>###3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    <td> <input type="checkbox" id="Check-box3" onclick="myFunction(this.id)"></td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
                        <div class="add-item-btn">
                            <button  onclick="addItemFunction()">Add Item</button>
                        </div>
            
                </div>

                <div class="delete-btn" id="delbtn">
                    <button onclick="delFunction()">Delete</button>
                </div>


                <!-- <div id="category2-table" >
                    <h1>Category 2</h1>

                    <table class="content-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Item Id</th>
                                    <th>Name</th>
                                    <th>Quantity</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
                        <div class="add-item-btn">
                            <button onclick="addItemFunction()">Add Item</button>
                        </div>
            
                </div>

                <div id="category3-table" >
                    <h1>Category 3</h1>

                    <table class="content-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Item Id</th>
                                    <th>Name</th>
                                    <th>Quantity</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
                        <div class="add-item-btn">
                            <button onclick="addItemFunction()">Add Item</button>
                        </div>
            
                </div>

                <div id="category4-table" >
                    <h1>Category 4</h1>

                    <table class="content-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Item Id</th>
                                    <th>Name</th>
                                    <th>Quantity</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
                        <div class="add-item-btn">
                            <button onclick="addItemFunction()">Add Item</button>
                        </div>
            
                </div>

                <div id="category5-table" >
                    <h1>Category 5</h1>

                    <table class="content-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Item Id</th>
                                    <th>Name</th>
                                    <th>Quantity</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item1</td>
                                    <td>name1</td>
                                    <td>xxx</td>
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item2</td>
                                    <td>name2</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                                <tr>
                                    <td> <span class="minus">-</span></td>
                                    <td>item3</td>
                                    <td>name3</td>
                                    <td>xxx</td>
                                    
                                
                                </tr>
                            </tbody>
                        </table>
                        <div class="add-item-btn">
                            <button onclick="addItemFunction()">Add Item</button>
                        </div>
            
                </div>
            -->
        </div>


     </div>
          
<?php include('footer.php'); ?>