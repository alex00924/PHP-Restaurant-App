<!DOCTYPE html>
<html lang="en">
<?php session_start();
// include('db_connect.php');
?>
    <head>
        
        <!-- Title -->
        <title>Restaurent | Employee</title>
        
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
                    <h3 class="breadcrumb-header">Dashboard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="#">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
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