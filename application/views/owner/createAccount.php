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
        
        <div class="content" id="body">
            <div class="account-container">
                <div class="topic">New Employee Account</div>
                <span>Add Profile Picture</span>
                <div class="profile"><i id="user" class="fas fa-user"></i></div>
                <span>User Details</span>
                <div class="text">
                    <label for="First-Name">First Name</label>
                    <div class="text-fill">
                        <input type="text" name="name" id="first-name"  placeholder="">
                    </div>
                </div>
                <div class="text">
                    <label for="Second-Name">Second Name</label>
                    <div class="text-fill">
                        <input type="text" name="name" id="second-name"  placeholder="">
                    </div>
                </div>
                <div class="text">
                    <label for="Password ">Password </label>
                    <div class="text-fill">
                        <input type="password" name="password" id="password"  placeholder="">
                    </div>
                </div>
                <div class="text">
                    <label for="Confirm-Password">Confirm Password</label>
                    <div class="text-fill">
                       <input type="password" name="password" id="password"  placeholder="">
                    </div>
                </div>
                <div class="text">
                    <label for="Phone-Number">Phone Number</label>
                    <div class="text-fill">
                       <input type="text" name="number" id="number"  placeholder="">
                    </div>
                </div>
                <div class="text" id="last-text">
                    <label for="Email">Email (Optional)</label>
                    <div class="text-fill">
                        <input type="text" name="email" id="email"  placeholder="">
                    </div>
                </div>

                <span>User Type</span>
                <div class="text">
                    <label for="Post">Post</label>
                    <div class="text-fill">
                        <select placeholder="Select Post" >
                        <option>Owner</option>
                        <option>Bakery Manager</option>
                        <option>Delivery Person</option>
                        <option>Branch Manager</option>
                        <option>Cashier</option>
                    </select>
                    </div>
                </div>
                <div class="text">
                    <label for="Branch">Branch</label>
                    <div class="text-fill">
                        <select placeholder="Select Branch" >
                            <option>Kasbewa</option>
                            <option>Baththaramulla</option>
                            <option>Piliyandala</option>
                        </select>
                    </div>
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
 

     