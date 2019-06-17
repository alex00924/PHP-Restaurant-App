<!DOCTYPE html>
<html lang="en">
  

<?php 
session_start();
include 'include/head.php';
?>

  <body>
	<div id="wapper">
   		<!--<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
		</div>-->
    	
    	<?php 
		include 'include/menu.php';
		?>
    	<section class="banner">
        	<div class="owl-carousel" id="main_banner">
                <div class="item">
                	<img src="images/top-slider/home-slide-img1.jpg" alt="">
                    <div class="banner-text">
                        <div class="container">
                            <div class="top-title">
                                <label >Welcome to Our Εστιατόριο</label>
                                <h2>The Real Taste of Food</h2>
                            </div>
                            <a href="booking.php" class="btn">Book a Table</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                	<img src="images/top-slider/home-slide-img2.jpg" alt="">
                    <div class="banner-text">
                        <div class="container">
                            <div class="top-title">
                                <label>Welcome to Belle</label>
                                <h2>The Real Taste of Food</h2>
                            </div>
                            <a href="booking.php" class="btn">Book a Table</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                	<img src="images/top-slider/home-slide-img3.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="our-dishes">
        	<div class="container">
            	<div class="top-title white">
                	<label>Tasty Dishes</label>
                    <h2>Our Most Loved Dishes</h2>
                </div>
            	<div class="row">
                	<div class="col-sm-6 col-md-3">
                    	<div class="dish-box">
                        	<div class="img">
                            	<img src="images/product-img/img1.jpg" alt="">
                                <div class="price">$29.9</div>
                            </div>
                            <div class="name">Banh Mi Breakfast Bialy</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                    	<div class="dish-box">
                        	<div class="img">
                            	<img src="images/product-img/img2.jpg" alt="">
                                <div class="price">$29.9</div>
                            </div>
                            <div class="name">Avocado Lime Rice</div>
                            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                    	<div class="dish-box">
                        	<div class="img">
                            	<img src="images/product-img/img3.jpg" alt="">
                                <div class="price">$29.9</div>
                            </div>
                            <div class="name">Simple Pasta Bolognese</div>
                            <p> but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                    	<div class="dish-box">
                        	<div class="img">
                            	<img src="images/product-img/img4.jpg" alt="">
                                <div class="price">$29.9</div>
                            </div>
                            <div class="name">Roasted Vegetable Casserole</div>
                            <p> sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-story" style="background-image:url(images/parallax-img/img1.jpg);">
        	<div class="container bounceIn wow">
            	<div class="top-title">
                	<label>Our Story</label>
                	<h2>Behind The Scenes</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
            </div>
        </section>
          <section class="contact-us contact-style1">
        	<div class="container">
            	
                <div class="contact-detail">
            		<div class="row">
                    	
						
	<div class="col-md-6">
    	  <div class="contact-box">
 

                <label>Opening Hours:</label>
   <?php 
   include('connection.php');
       $sqlx = "SELECT * FROM `timings`";
       $restx = $con->query($sqlx);
       $countx = $restx->num_rows;
            while($fetz = $restx->fetch_array())  {   ?>
                <p>
                    <div class="col-md-3">
                        <?php echo $fetz['day']; ?> :
                    </div> 
                    <?php echo $fetz['from_time']; ?> To <?php echo $fetz['to_time']; ?>
                </p>                            
                    
    <?php   }   ?>

                              
            </div>
    </div>
                       
                    </div>
                </div>

            </div>
        </section>
       
       
        
      <?php include 'footer.php';  ?> 
  </body>

</html>

