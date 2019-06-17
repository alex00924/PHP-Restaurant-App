<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
    include('db_connect.php');
    
    $sql = "SELECT * FROM `customer`";
    $res = $con->query($sql);
    $count = $res->num_rows;
?>
    <head>
        
        <!-- Title -->
        <title>Customer | Employee</title>
        
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
                    <h3 class="breadcrumb-header">Customer</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="#">Home</a></li>
                            <li class="active">Customer</li>
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
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Phone</th>
                                  <th>Email</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
<?php
$i = 1;
    while($fetch=$res->fetch_array()) { 
        
    ?>  <tr>
          <td><?php echo $i++; ?></td>
          <!-- <td><?php echo $fetch['id']; ?></td> -->
          <td><?php echo $fetch['name']; ?></td>
          <td><?php echo $fetch['phone']; ?></td>
          <td><?php echo $fetch['email']; ?></td>
        </tr>
  <?php  }
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
        <?php include('footer.php') ?>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
          
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    </body>
</html>