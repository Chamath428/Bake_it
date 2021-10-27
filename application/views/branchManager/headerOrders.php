<head>
    <link rel="stylesheet" type="text/css" href="../../../public/css/branchManager/header_index.css">
    <script src="../../../public/js/branchManager/header.js" defer ></script>
</head>

    <div class="container">
        <div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
            <ul>
                <li>
                     <a href="<?php echo BASEURL; ?>" class="active">
                        <span class="icon"><i class="fas fa-th-large"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                     <a href="<?php echo BASEURL."/branchManagerOrderController"; ?>" class="active">
                        <span class="icon"><i class="fas fa-hamburger"></i></span>
                        <span class="title">Quick Orders</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/branchManagerOrderController/getSpecialOrders"; ?>" class="hrf">
                        <span class="icon"><i class="fas fa-gift"></i></span>
                        <span class="title">Special Orders</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/branchManagerOrderController/getCompleteOrders"; ?>" class="hrf">
                        <span class="icon"><i class="fas fa-check-square"></i></span>
                        <span class="title">Completed Orders</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- <div class="toggle"><span onclick="leftBakeIt()"><i  id="menuBtn" class="fas fa-bars"></i></span></div> -->
   
    <div id="arrowAnim">
  <div class="arrowSliding">
    <div class="arrow"></div>
  </div>
  <div class="arrowSliding delay1">
    <div class="arrow"></div>
  </div>
  <div class="arrowSliding delay2">
    <div class="arrow"></div>
  </div>
  <div class="arrowSliding delay3">
    <div class="arrow"></div>
  </div>
</div>
</div>
       <header class="header-container">
            <div class="bake-it" id="bakeId">
                <span class="bakeit">Bake_it</span>
           </div>
            <div class="header-icons"> 
                <span class="user-icon"><a href="<?php echo BASEURL."/profileEmployeeController"; ?>"><i id="user" class="fas fa-user"></i></a>You logged in as : Branch Manager</span>
                <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                <span class ="sign-out"><a href="<?php echo BASEURL.'/loginController/logout' ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></span>
             </div>
        </header>
