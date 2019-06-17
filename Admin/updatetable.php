<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();

    
    include 'db_connect.php';

    $id = $_GET["id"]; 
    $sqlx = "SELECT * FROM `tables` WHERE `table_id`='$id'";
    $restx = $con->query($sqlx);
    $countx = $restx->num_rows;
?>
    <head>
        
        <!-- Title -->
        <title>Update Timings | Employee</title>
        
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
                    <h3 class="breadcrumb-header">Seats Update</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb breadcrumb-with-header">
                            <li><a href="#">Home</a></li>
                            <li class="active">Update Seats</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
    <?php  while($fetz = $restx->fetch_array())  {   ?>
        <form class="form-horizontal" method="post" action="table_update.php">
           

            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Table :</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" required id="day" placeholder="Day" name="table" value="<?php echo $fetz['table']; ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Total Seats:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" required  placeholder="Set Timings" name="sit" value="<?php echo $fetz['sit']; ?>" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Reserve:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" required  placeholder="Set Timings" name="reserve" value="<?php echo $fetz['action']; ?>" >
              </div>
            </div>
<input type="hidden" name="id" value="<?php echo $fetz['table_id']; ?>">
            
            
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="submit" value="Update" class="btn btn-default">
              </div>
            </div>
          </form>
    <?php } ?>
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