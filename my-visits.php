<!DOCTYPE html>
<html lang="en">
  
<?php 

    session_start();
    include('connection.php');
    $user = $_SESSION['id'];

    // $query = " SELECT * FROM `reservation` WHERE `user_id` = '$_SESSION['id']' ";
    $query = "SELECT * FROM `reservation` WHERE `user_id`='$user'";
    $resquery = $con->query($query);
    $countquery = $resquery->num_rows;
    
    include 'include/head.php';

?>

<style>
h2 {
  text-align: center;
}

table caption {
	padding: .5em 0;
}

@media screen and (max-width: 767px) {
  table caption {
    border-bottom: 1px solid #ddd;
  }
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
</style>

  <body>
	<div id="wapper">
    	<?php 
		include 'include/menu.php';
		?>
    	
    	<section class="banner">
        	<div id="inner_banner">
                <div class="item">
                	<img src="images/top-slider/slide-img4.jpg" alt="">
                    <div class="page-title">
                        <h2>My Previous Visits</h2>
                    </div>
                </div>
            </div>
        </section>

        <h2>My Previous Visits</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
        
          <thead>
            <tr>
              <th>Sl No</th>
              <th>Date</th>
              <th>Time</th>
              <th>table No</th>
              <th>No. of Person</th>
             
            </tr>
          </thead>
          <tbody>
    <?php if ($countquery) {
          $i = 1;
            while ($fetchresult = $resquery->fetch_array()) { ?>
                
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $fetchresult['date']; ?></td>
                  <td><?php echo $fetchresult['time']; ?></td>
                  <td><?php echo $fetchresult['table_id']; ?></td>
                  <td><?php echo $fetchresult['person']; ?></td>
                 
                </tr>
          <?php  }
        } ?> 
           
          </tbody>
          
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>
       
 <!--        <footer id="footer">
        	
            <div class="footer-bottom">
            	<div class="container">
                	<p>Copyright © 2018 <a href="#">cpuma.com</a>. All rights reserved.</p>
                </div>
                <a href="javascript:void(0);" id="goTop"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
            </div>

        </footer>
	</div>
    <div class="modal fade" id="logoinPopup" role="dialog">
    	<div class="vertical-alignment-helper">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                	<h2>Welcome to Belle</h2>
                    <div class="close-btn"  data-dismiss="modal" ><i class="fa fa-close"></i></div>
                	<div class="login-info">
                        <div class="left-form">
                        	<div class="note">Please enter your details below to login</div>
                            <div class="input-box">
                            	<input type="text" placeholder="Your Email *">
                            </div>
                            <div class="input-box">
                            	<input type="text" placeholder="Password *">
                            </div>
                            <div class="submit-slide">
                            	<input type="submit" value="Login">
                            </div>
                            <a href="#" class="forgot-password">Forgot password ?</a>
                            <div class="sign-upLink">
                            	<label>New User ?</label>
                                <a href="#">Sign Up Now</a>
                            </div>
                        </div>
                        <div class="or-text">
                        	<span>OR</span>
                        </div>
                        <div class="sosiyal-midiya">
                        	<div class="note">You can also login using one of your social/email accounts</div>
                            <a href="#" class="midiya-btn facebook"><i class="fa fa-facebook"></i>Login with Facebook</a>
                            <a href="#" class="midiya-btn twitter"><i class="fa fa-twitter"></i>Login with Twitter</a>
                            <a href="#" class="midiya-btn googlePluse"><i class="fa fa-google-plus"></i>Login with Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
 -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- <script type="text/javascript" src="js/jquery-1.12.4.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
    <script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/map-style.js"></script>
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?key=AIzaSyAciPo9R0k3pzmKu6DKhGk6kipPnsTk5NU'></script>
    <script type="text/javascript" src="js/map-styleMain.js"></script> -->
    <?php include 'footer.php';  ?> 
  </body>

</html>