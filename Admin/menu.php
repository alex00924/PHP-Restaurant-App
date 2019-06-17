<body class="compact-menu">
        <div class="overlay"></div>
        
       
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="dashboard.php" class="logo-text"><span>Restaurent</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                               
                                <li class="dropdown">
                                   
                                    
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>	
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>
                               
    <li class="dropdown">
        <a href="layout-blank.html#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="user-name">
                <?php if($_SESSION['id']) { 
                    echo $_SESSION['name']; 
                    
                }?>
                <i class="fa fa-angle-down"></i>
            </span>
            <img class="img-circle avatar" src="" width="40" height="40" alt="">
        </a>
    <ul class="dropdown-menu dropdown-list" role="menu">
        <li role="presentation"><a href="profile.php">Profile</a></li>
        <li role="presentation"><a href="log_out.php">Log out</a></li>
    </ul>
    </li>
    
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->

    <div class="page-sidebar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <ul class="menu accordion-menu">
                <li>
                    <a href="Dashboard.php" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p></a>
                </li>
                <li>
                    <a href="Customer.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Customer</p>
                    </a>
                </li>
                <li>
                    <a href="Table.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Table</p>
                    </a>
                </li>
				<li>
                    <a href="TableStatus.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Table Status</p>
                    </a>
                </li>
                <li>
                    <a href="Reservation.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Reservation</p>
                    </a>
                </li>
				 <li>
                    <a href="timings.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Opening Timings</p>
                    </a>
                </li>
                <li>
                    <a href="Form.php" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Manual Booking</p>
                    </a>
                </li>
               
                
            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->