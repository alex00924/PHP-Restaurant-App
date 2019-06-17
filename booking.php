<!DOCTYPE html>
<html lang="en">
  
<?php 
session_start();
    include('connection.php');

    $sqltab = "SELECT * FROM `tables`";
    $restab = $con->query($sqltab);
    $counttab = $restab->num_rows;

    include 'include/head.php';
?>

  <body>
	<div id="wapper">
    	
    	<?php 
		include 'include/menu.php';
		?>
    <section class="banner">
        	<div id="inner_banner"> 
                <div class="item">
                	<img src="images/top-slider/slide-img5.jpg" alt="">
                    <div class="page-title">
                        <h2>Booking</h2>
                    </div>
                </div>
            </div>
        </section>
        
        <!---<section class="book-tabel" style="background-image:url(images/parallax-img/img2.jpg)">-->
        <section class="book-tabel">
        	<div class="container">
            	<div class="top-title white">
                	
                    <h2>Book your table</h2>
                </div>
            	<div class="form-view">
                    <form id="bookin_form" method="post" action="reserve_table.php">
                        <div class="row">
                           
                            <div class="col-sm-4">
                                <div class="input-box">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" placeholder="Select Date" name="Date" id="date_picker" data-validation="date" data-validation-format="mm/dd/yyyy">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="input-box">
                                    <i class="fa fa-clock-o"></i>
                                    <input type="text" placeholder="8:00 pm" name="Time" id="time_picker" data-validation="required">
                                </div>
                            </div>
                       
                            
                            <div class="col-sm-4">
                                <div class="input-box">
                                    <i class="fa fa-phone"></i>
                                    <input type="text" placeholder="Phone Number" name="Phone" data-validation="required">
                                </div>
                            </div>
                          
                          
                        </div>
						<div class="row">
						<div class="col-sm-3">
                                <div class="input-box">
                                    <i class="fa fa-users"></i>
                                    <input type="text" placeholder="Number of Person" name="People" data-validation="required">
                                </div>
                            </div>
							<div class="col-sm-3">
                                <div class="input-box">
                                   
                                    <select name="table" data-validation="required">
         <?php while($fetchtab=$restab->fetch_array()) { ?>

            <option value="<?php echo $fetchtab['table_id']; ?>"><?php echo $fetchtab['table']; ?></option>

        <?php   } ?> 
									
									</select>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
						</div>
                        <div class="row">
                           
                            <div class="col-sm-12 text-center">
                                <div class="submit-slide">
                                    <i class="fa fa-paper-plane"></i>
                                    <?php if ($_SESSION['id']) { ?>
                                    	<input type="submit" name="submit" value="make a reservation">
                                  <?php  } else { ?>

                                  	<input type="submit" id="dummy" value="make a reservation">

                                  <?php } ?>
                                    
                                </div>
                            </div>
                    	</div>
                    </form>
                </div>
            </div>
        </section>
      
       
       

    <?php include 'footer.php';  ?> 
<script>
	$("#dummy").click(function() {
		alert('Please Login to Reserve a Table !');
		return false;
	});
</script>
  </body>

</html>

