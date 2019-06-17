<!DOCTYPE html>
<html lang="en">
<?php session_start();
include 'db_connect.php';

 $sql = "SELECT * FROM `reservation` ORDER BY reservation_id DESC";
    $res = $con->query($sql);
    $count = $res->num_rows;
 ?>
    <head>
        
        <!-- Title -->
        <title>Reservation</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
        
        <?php include('header.php'); ?>
        
    </head>

        <?php include('menu.php'); ?>
		
		 <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Table Reservation</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="dashboard.php">Home</a></li>
                            <li class="active">Reservation</li>
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
                                  <th>Date</th>
                                  <th>Customer name</th>
                                  <th>Total Person</th>
                                  
                                  <th>Phone</th>
                                  <th>Table</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
							  <?php
							  $i = 1;
							  //echo("SELECT * FROM `reservation` ORDER BY reservation_id DESC");
							  //while($fet = mysql_fetch_array($query))
								  while($fet = $res->fetch_array()) 
							  {
								  $booked_by = $fet['booked_by'];
								  $user_id = $fet['user_id'];
								  if($booked_by == 'customer')
								  {
									 $sql2 = "SELECT * FROM `customer` WHERE `id`='$user_id'";
									 $res2 = $con->query($sql2);
									  //$getcustomer = mysql_query("SELECT * FROM `customer` WHERE `id`='$user_id'");
									  $fetname = $res2->fetch_array();
									  $name = $fetname['name'];
								  }
								  else
								  {
									 
									  $name = 'Employee';
								  }
							 
							  ?>
                                <tr>
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $fet['date']; ?> / <?php echo $fet['time']; ?></td>
                                  <td><?php echo $name; ?></td>
                                  <td><?php echo $fet['person']; ?></td>
                                  <td><?php echo $fet['phone']; ?></td>
                                  <td><?php echo $i; ?></td>
                                 
                                </tr>
								
								<?php 
								$i++;
							  }
								?>
                              </tbody>
                            </table>
                            </div>
                        </div>

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                  
                </div>
            </div><!-- Page Inner -->
    
            
            
        </main><!-- Page Content -->
      
        <div class="cd-overlay"></div>
		
		   <script>
            $(document).ready(function() {

                $('#example').DataTable();
                
            } );
        </script>
       
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
          
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
	

        <?php include('footer.php') ?>
        
    </body>
</html>