<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../../../public/css/owner/owner-account.css" class="rel">
    <script src="../../../public/js/owner/owner-employeeAccounts.js" defer ></script>
    <script src="https://kit.fontawesome.com/165f5431dc.js" crossorigin="anonymous"></script>
</head>
<body>

        <div>
          <?php require_once('accountHeader.php'); ?>
       </div>
       <div class="content view" id="body">
            <div class="account-container" id="view">
                <div class="topic">Search Employee Accounts</div>
                <!-- <span>User Type</span> -->
                <div class="text">
                    <label for="Post">Post</label>
                    <div class="text-fill">
                        <select placeholder="Select Post" >
                        <option value="">All</option>
                        <option>Bakery Manager</option>
                        <option>Delivery Person</option>
                        <option>Branch Manager</option>
                        <option>Cashier</option>
                    </select>
                    </div>
                </div>
                <!-- <span>User work in Branch</span> -->
                <div class="text">
                    <label for="Branch">Branch</label>
                    <div class="text-fill">
                        <select placeholder="Select Branch">
                            <option value="">All</option>
                            <option>Kesbawa</option>
                            <option>Baththaramulla</option>
                            <option>Piliyandala</option>
                            <option value="">Bakery</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="searchbtn">
                <a href="#"><button onclick="viewAccount()">Search</button></a>
            </div>
        <div class="account-container" id="view-accounts">
            <div class="topic">Employee Accounts</div>
            <div class="profile-collection">
                <div class="profile-employee">
                    <span><i id="user" class="fas fa-user"></i></span>
                    <span>Chamath Chinthana</span>
                </div>
                <div class="profile-employee">
                    <span><i id="user" class="fas fa-user"></i></span>
                    <span>Thilina Madusanka</span>
                </div>
                <div class="profile-employee">
                    <span><i id="user" class="fas fa-user"></i></span>
                    <span>Anupama Bandara</span>
                </div>
                <div class="profile-employee">
                    <span><i id="user" class="fas fa-user"></i></span>
                    <span>Nadeemal Perera</span>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <?php include('footer.php')?>
    </div>
</body>
</html>