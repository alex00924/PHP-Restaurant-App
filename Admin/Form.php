<!DOCTYPE html>
<html lang="en">
<?php 
  
  session_start();
  include('db_connect.php');
  $sqltab = "SELECT * FROM `tables`";
  $restab = $con->query($sqltab);
  $counttab = $restab->num_rows; 
?>
    <head>
        
        <!-- Title -->
        <title>Form | Employee</title>
        
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
                            <li><a href="#">Home</a></li>
                            <li class="active">Form</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <form class="form-horizontal" method="post" action="manual_book.php">
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Date:</label>
                              <div class="col-sm-10">
                                <input type="date" class="form-control" id="date" placeholder="Enter Date" name="Date">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Time:</label>
                              <div class="col-sm-10">          
                                <input type="time" class="form-control" id="time" placeholder="Enter Time" name="Time">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Phone:</label>
                              <div class="col-sm-10">          
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="Phone">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Persons:</label>
                              <div class="col-sm-10">          
                                <input type="number" class="form-control" id="persons" placeholder="Number of Persons" name="People">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Table:</label>
                              <div class="col-sm-10">
                                  <select name="table" data-validation="required">
         <?php while($fetchtab=$restab->fetch_array()) { ?>

            <option value="<?php echo $fetchtab['table_id']; ?>"><?php echo $fetchtab['table']; ?></option>

        <?php   } ?> 
                  
                  </select>          
                                <!-- <input type="text" class="form-control" name="table"> -->
                              </div>
                            </div>
                            
                            <div class="form-group">        
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                              </div>
                            </div>
                          </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
      
        <div class="cd-overlay"></div>
	      <?php include('footer.php') ?>
        
    </body>
</html>