<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/public/css/owner/owner-account.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-footer.css" class="rel">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/public/css/owner/owner-header.css" class="rel">
    <script src="<?php echo BASEURL ?>/public/js/owner/owner-header.js" defer></script>
    <script src="<?php echo BASEURL; ?>/public/js/owner/owner-employeeAccounts.js" defer ></script>
    <script src="https://kit.fontawesome.com/38f522d6fa.js" crossorigin="anonymous"></script>
</head>
<body>

        <div>
          <?php require_once('accountHeader.php'); ?>
       </div>
       <div class="content view" id="body">
            <div class="account-container" id="view">
                <div class="topic">Search Employee Accounts</div>
            <form method="post" action="<?php echo BASEURL."/createEmployeeAccountController/searchEmployee" ?>">
                <div class="text">
                    <label for="Post">Post</label>
                    <div class="text-fill">
                        <select placeholder="Select Post" name="job_role">
                            <option value="7">All</option>
                            <option value="3">Bakery Manager</option>
                            <option value="6">Delivery Person</option>
                            <option value="4">Branch Manager</option>
                            <option value="5">Cashier</option>
                        </select>
                    </div>
                </div>
            
                <div class="text">
                    <label for="Branch">Outlet</label>
                    <div class="text-fill">
                        <select placeholder="Select Branch" name="branch_Id">
                            <option value="0">Any</option>
                            <option value="1">Kesbawa</option>
                            <option value="2">Baththaramulla</option>
                            <option value="3">Piliyandala</option>
                            <option value="4">Bakery</option>
                        </select>
                    </div>
                </div>


            </div>
            <div class="searchbtn">
                <button type="input">Search</button>
            </div>
            </form>

        <div class="account-container" id="view-accounts">
            <div class="topic" id="view-topic">Employee Accounts</div>
            <div class="profile-collection">
                <?php foreach ($data as $key => $value) {
                 ?>
                <div class="profile-employee">
                    <span><a href="<?php if(isset($value['staff_id'])) echo $value['staff_id'];?>"><i id="user" class="fas fa-user"></a></i></span>
                    <span><?php if(isset($value['fullName']))echo $value['fullName']; ?></span>
                </div>
            <?php } ?>
                
            </div>
        </div>
    </div>
    <div id="footer">
        <?php include('footer.php')?>
    </div>
</body>
</html>