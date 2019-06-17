<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
include 'db_connect.php'; ?>
    <head>
        
        <!-- Title -->
        <title>Profile | Employee</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
        

        <?php include('header.php'); ?>

        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
          
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->

    </head>
            
        <?php include('menu.php'); ?>
    
            
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Form</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="dashboard.php">Home</a></li>
                            <li class="active">Employee Profile</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
					<?php
					$sql = "SELECT * FROM `employee` WHERE `id`='1'";
					$res = $con->query($sql);
					$fet = $res->fetch_array();
					?>
                        <form class="form-horizontal" action="update_profile.php" method="post">
                           
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Name:</label>
                              <div class="col-sm-10">          
                                <input type="text" class="form-control" value="<?php echo $fet['name']; ?>" required  name="name">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Phone:</label>
                              <div class="col-sm-10">          
                                <input type="text" class="form-control" required id="phone" value="<?php echo $fet['phone']; ?>"  name="phone">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Email:</label>
                              <div class="col-sm-10">          
                                <input type="email" class="form-control" required id="persons" value="<?php echo $fet['email']; ?>"  name="email">
                              </div>
                            </div>
							
							 <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Password:</label>
                              <div class="col-sm-10">          
                                <input type="text" class="form-control" required value="<?php echo $fet['password']; ?>" id="persons"  name="password">
                              </div>
                            </div>

                           
                            
                            <div class="form-group">        
                              <div class="col-sm-offset-2 col-sm-10">
                                 <input type="submit" name="submit" value="Submit" class="btn btn-default">
                              </div>
                            </div>
                          </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                   
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
      
        <div class="cd-overlay"></div>
	      <?php include('footer.php') ?>
        
    </body>
</html>