<nav class="nav-main">
        	<div class="container">
            	<div class="nav-header">
                    <a class="logo" href="index.php"><img alt="" src="images/logo.png"></a>
                    <div class="small-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </div>
                <div class="nav-link">
                	<ul class="nav-ul">
                    	<li class="menu active">
                        	<a href="index.php">Home <i class="fa fa-angle-down"></i></a>
                            
                        </li>
                     
                        <li class="menu">
                        	<a href="booking.php">Booking <i class="fa fa-angle-down"></i></a>
                           
                        </li>
                       
                       

            <?php if ($_SESSION["id"]) { ?>

                        <li class="menu">
                            <a href="my-visits.php">My Visits<i class="fa fa-angle-down"></i></a>
                        </li>
            <?php   } ?>
					 
                   	
            <?php if ($_SESSION["id"]) { ?>

                        <li class="menu">
                            <a href="#"><?php echo $_SESSION["name"]; ?><i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="menu">
                            <a href="logout.php">Log Out<i class="fa fa-angle-down"></i></a>
                        </li>
                    </ul>

            <?php   } else { ?>
                        </ul>

                        <a href="#" class="btn fill login-btn" data-toggle="modal" data-target="#logoinPopup">Login / sign up</a>

            <?php } ?>
                    
                </div>
            </div>
        </nav>