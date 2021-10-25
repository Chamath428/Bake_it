

    <div class="container">
        <div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()" onmouseover="leftBakeIt()">
            <ul>
                <li>
                     <a href="<?php echo BASEURL ?>" class="active">
                        <span class="icon"><i class="fas fa-th-large"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo BASEURL."/bakeryManagerOrderController" ?>" class="hrf">
                        <span class="icon"><i class="fas fa-spinner"></i></span>
                        <span class="title">Pending Orders</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASEURL."/bakeryManagerOrderController/pendingOrderBakery" ?>" class="hrf">
                        <span class="icon"><i class="fas fa-check-square"></i></span>
                        <span class="title">Complete Order</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- <div class="toggle"><span ><i  id="menuBtn" class="fas fa-bars"></i></span></div> -->
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
                <span class="user-icon"><a href="<?php echo BASEURL."/profileEmployeeController"; ?>"><i id="user" class="fas fa-user"></i></a>You logged in as : Bakery Manager</span>
                <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                <span class ="sign-out"><a href="<?php echo BASEURL.'/loginController/logout' ?>"><i class="fas fa-sign-out-alt"></i>Logout</a></span>
             </div>
    </header>
 
