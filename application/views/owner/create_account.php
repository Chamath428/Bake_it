<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="create_account.css" class="rel">
    <link rel="stylesheet" href="footer.css" class="rel">
    <link rel="stylesheet" href="side_nav.css" class="rel">
    <link rel="stylesheet" href="header.css" class="rel">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="create_account.js" defer></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
    <title>Create Account</title>
</head>
<body>
   
        <?php require_once('header.php'); ?>

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
        <?php require_once('side_nav_bar.php'); ?>
        <?php require_once('footer.php'); ?>
 

     