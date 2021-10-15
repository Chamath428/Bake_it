<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/owner/owner-createAccount.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../public/js/owner/create_account.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
</head>
<body>
       <div>
          <?php require_once('accountHeader.php'); ?>
       </div>
        
        <div class="content">

                 <div class="topic">Employee Account</div>


                <div class="fname"><label for="First-Name">First Name</label><input type="text" name="name" id="name"  placeholder="Enter your name"></div>
                <div class="sname"><label for="Second-Name">Second Name</label><input type="text" name="name" id="name"  placeholder="Enter your name"></div>
                <div class="password"><label for="Password ">Password </label><input type="text" name="name" id="name"  placeholder="Enter your name"></div>
                <div class="conpassword"><label for="Confirm-Password">Confirm Password </label><input type="text" name="name" id="name"  placeholder="Enter your name"></div>
                <div class="phonenum"><label for="Phone-Number">Phone Number</label><input type="text" name="name" id="name"  placeholder="Enter your name"></div>
                <div class="email-adres"><label for="Email">Email (Optional)</label><input type="text" name="name" id="name"  placeholder="Enter your name"></div>


            <div class="drop-down-btn-div">
                    <div class="post">
                        <label for="Post">Post</label>
                        <select placeholder="Select Post" >
                        <option>Bakery Manager</option>
                        <option>Delivery Person</option>
                        <option>Branch Manager</option>
                        <option>Cashier</option>
                    </select>
                    </div>

                    <div class="branch">
                        <label for="Branch">Branch</label>
                        <select placeholder="Select Branch" >
                            <option>Branch 1</option>
                            <option>Branch 2</option>
                            <option>Branch 3</option>
                            <option>Branch 4</option>

                        </select>
                    </div>


            </div>

            <div class="createbtn">
                <a href="#"><button>Create Account</button></a>
            </div>
         </div>
         <div id="footer">
          <?php include('footer.php')?>
         </div>
  
</body>
</html>
 

     