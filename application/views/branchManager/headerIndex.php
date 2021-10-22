

    <div class="container">
        <div class="navigation" id="mySidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()" onmouseover="leftBakeIt()">
            <ul>
                <li>
                     <a href="index.php" class="active">
                        <span class="icon"><i class="fas fa-th-large"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="menu.php" class="hrf">
                        <span class="icon"><i class="fas fa-list-alt"></i></i></span>
                        <span class="title">Menu</span>
                    </a>
                </li>
                <li>
                    <a href="completeOrder.php" class="hrf">
                        <span class="icon"><i class="fas fa-truck"></i></span>
                        <span class="title">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="dailyRequirement.php" class="hrf">
                        <span class="icon"><i class="fas fa-tasks"></i></span>
                        <span class="title">Daily Requirement</span>
                    </a>
                </li>
                <li>
                    <a href="overview.php" class="hrf">
                        <span class="icon"><i class="fas fa-file-alt"></i></span>
                        <span class="title">Reports</span>
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


        <div id="arrowAnim-left">
            <div class="arrowSliding-left">
                <div class="arrow-left"></div>
            </div>
            <div class="arrowSliding delay1-letf">
                <div class="arrow-left"></div>
            </div>
            <div class="arrowSliding delay2-left">
                <div class="arrow-left"></div>
            </div>
            <div class="arrowSliding delay3-left">
                <div class="arrow-left"></div>
            </div>
        </div>
    </div>

    <header class="header-container">
            <div class="bake-it" id="bakeId">
                <span class="bakeit">Bake_it</span>
           </div>
            <div class="header-icons"> 
                <span class="user-icon"><a href="profile.php"><i id="user" class="fas fa-user"></i></a>You logged in as : Branch Manager</span>
                <span class="bell-icon"><a href="#"><i class="fas fa-bell"></i></a></span>
                <span class ="sign-out"><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></span>
             </div>
    </header>