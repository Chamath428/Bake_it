<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-createAccount.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/customer/customer-messageboxes.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
</head>
<body>
       <div>
          <?php require_once('accountHeader.php'); ?>
       </div>
        
        <div class="content" id="body">
            <div class="account-container">
                <div class="topic">New Employee Account</div>

                <?php if (isset($data['confirmation'])){?>
                    <div class="confirm-alert">
                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                      <p><?php echo $data['confirmation']; ?></p>
                    </div>
                    <?php } ?>

                    <?php if (isset($data['error'])){?>
                    <div class="danger-alert">
                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                      <p><?php echo $data['error']; ?></p>
                    </div>
                <?php } ?>


                <span>Add Profile Picture</span>
                <div class="profile"><i id="user" class="fas fa-user"></i></div>
                <span>User Details</span>
                <form method="post" action="<?php echo BASEURL.'/createEmployeeAccountController/createAccount' ?>">
                <div class="text">
                    <label for="First-Name">First Name</label>
                    <div class="text-fill">
                        <input type="text" name="firs_tname" id="first_name"  placeholder="" required="" value="<?php if(isset($data['firstname']))echo $data['firstname']; ?>">
                    </div>
                </div>
                <div class="text">
                    <label for="Second-Name">Second Name</label>
                    <div class="text-fill">
                        <input type="text" name="last_name" id="last_name"  placeholder="" required="" value="<?php if(isset($data['lastname']))echo $data['lastname']; ?>">
                    </div>
                </div>
                <div class="text">
                    <label for="Password ">Password </label>
                    <div class="text-fill">
                        <input type="password" name="password" id="password"  placeholder="" required="">
                    </div>
                </div>
                <div class="text">
                    <label for="Confirm-Password">Confirm Password</label>
                    <div class="text-fill">
                       <input type="password" name="confirme_password" id="confirme_password"  placeholder="" required="">
                    </div>
                </div>
                <div class="text">
                    <label for="Phone-Number">Phone Number</label>
                    <div class="text-fill">
                       <input type="text" name="phonenumber" id="phonenumber"  placeholder="" required="" value="<?php if(isset($data['phonenumber']))echo $data['phonenumber']; ?>">
                    </div>
                </div>
                <div class="text" id="last-text">
                    <label for="Email">Email (Optional)</label>
                    <div class="text-fill">
                        <input type="text" name="email" id="email"  placeholder="" value="<?php if(isset($data['email']))echo $data['email']; ?>">
                    </div>
                </div>

                <span>User Type</span>
                <div class="text">
                    <label for="Post">Post</label>
                    <div class="text-fill">
                        <select placeholder="Select Post" name="job_role">
                        <?php 

                            if (isset($data['job_role'])) {?>
                                <option value="<?php echo $data['job_role']; ?>"><?php 

                                                                                    switch($data['job_role']){
                                                                                        case '3':
                                                                                            echo "Bakery Manager";
                                                                                            break;
                                                                                        case '4':
                                                                                            echo "Branch Manager";
                                                                                            break;
                                                                                        case '5':
                                                                                            echo "Cashier";
                                                                                            break;
                                                                                        case '6':
                                                                                            echo "Delivery Person";
                                                                                            break;
                                                                                        default:
                                                                                            echo "Bakery Manager";
                                                                                    }

                                                                                 ?></option><?php } ?>
                        <?php if(!isset($data['job_role']) || (isset($data['job_role']) && $data['job_role']!=3)) {?><option value="3">Bakery Manager</option><?php } ?>
                        <?php if(!isset($data['job_role']) || (isset($data['job_role']) && $data['job_role']!=4)) {?><option value="4">Branch Manager</option><?php } ?>
                        <?php if(!isset($data['job_role']) || (isset($data['job_role']) && $data['job_role']!=5)) {?><option value="5">Cashier</option><?php } ?>
                        <?php if(!isset($data['job_role']) || (isset($data['job_role']) && $data['job_role']!=6)) {?><option value="6">Delivery Person</option><?php } ?>
                    </select>
                    </div>
                </div>
                <div class="text">
                    <label for="Branch">Branch</label>
                    <div class="text-fill">
                        <select placeholder="Select Branch" name="branch_Id">

                             <?php 

                            if (isset($data['branch_Id'])) {?>
                                <option value="<?php echo $data['branch_Id']; ?>"><?php 

                                                                                    switch($data['branch_Id']){
                                                                                        case '1':
                                                                                            echo "Kasbewa";
                                                                                            break;
                                                                                        case '2':
                                                                                            echo "Baththaramulla";
                                                                                            break;
                                                                                        case '3':
                                                                                            echo "Piliyandala";
                                                                                            break;
                                                                                        default:
                                                                                            echo "Kasbewa";
                                                                                    }

                                                                                 ?></option><?php } ?>

                            <?php if(!isset($data['branch_Id']) || (isset($data['branch_Id']) && $data['branch_Id']!=1)) {?><option value="1">Kasbewa</option><?php } ?>
                            <?php if(!isset($data['branch_Id']) || (isset($data['branch_Id']) && $data['branch_Id']!=2)) {?><option value="2">Baththaramulla</option><?php } ?>
                            <?php if(!isset($data['branch_Id']) || (isset($data['branch_Id']) && $data['branch_Id']!=3)) {?><option value="3">Piliyandala</option><?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="createbtn">
                <a href="#"><button>Create Account</button></a>
            </div>
            </form>
         </div>
         <div id="footer">
          <?php include('footer.php')?>
         </div>
  
</body>
</html>
 

     