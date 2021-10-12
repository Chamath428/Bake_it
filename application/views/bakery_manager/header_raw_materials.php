

    <div class="container">
        <div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()" onmouseover="leftBakeIt()">
            <ul>
                <li>
                     <a href="index.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Available_Materials.php" class="hrf">
                        <span class="icon"><i class="fas fa-warehouse"></i></span>
                        <span class="title">Available Materials</span>
                    </a>
                </li>
                <li>
                    <a href="add_stock.php" class="hrf">
                        <span class="icon"><i class="fas fa-truck"></i></span>
                        <span class="title">Add Stock</span>
                    </a>
                </li>
                <li>
                    <a href="summary.php" class="hrf">
                        <span class="icon"><i class="fas fa-tasks"></i></span>
                        <span class="title">Summary</span>
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
                <span class="user-icon"><a href="profile.php"><i id="user" class="fas fa-user"></i></a>You logged in as : Bakery Manager</span>
                <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                <span class ="sign-out"><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></span>
             </div>
    </header>
 
