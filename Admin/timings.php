<!DOCTYPE html>
<html lang="en">
<?php 
    
    session_start(); 
    include 'db_connect.php';

    $sqlx = "SELECT * FROM `timings`";
    $restx = $con->query($sqlx);
    $countx = $restx->num_rows;
?>
    <head>
        
        <!-- Title -->
        <title>Timings | Employee</title>
        
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
                    <h3 class="breadcrumb-header">table Listings</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="dashboard.php">Home</a></li>
                            <li class="active">Tables</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
				
				
					
                    <div class="row">
                        <div class="container">
                          <div class="table-responsive">          
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>SlNo</th>
                                  <th>Day</th>                                
                                  <th>From</th>
                                  <th>To</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
							  <?php
                $i = 1;
                while($fetz = $restx->fetch_array())  {   ?>
                        <tr>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $fetz['day']; ?></td>
                          <td><?php echo $fetz['from_time']; ?></td>
                          <td><?php echo $fetz['to_time']; ?></td>
                          <td>
                            <a href="update_timings_view.php?id=<?php echo $fetz['id']; ?>">Edit</a>
                          </td>
                        </tr>
                
    <?php    }   ?>
                
                              </tbody>
                            </table>
                            </div>
                        </div>

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                   
                </div>
            </div><!-- Page Inner -->
      
        <div class="cd-overlay"></div>
	      <?php include('footer.php') ?>
        
    </body>
</html>