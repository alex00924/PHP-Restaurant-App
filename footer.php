
	
    <div class="modal fade" id="logoinPopup" role="dialog">
    	<div class="vertical-alignment-helper">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Welcome to Belle</h2>
                        <div class="close-btn"  data-dismiss="modal" ><i class="fa fa-close"></i></div>
                        <div class="login-info">
                            <form action="#" method="post">
                            <div class="left-form">
                                <div class="note">Please enter your details below to login</div>
                                
                                <div class="input-box">
                                    <input type="text" placeholder="Your Email *" name="email" id="email" required="required">
                                </div>
                                
                                <div class="input-box">
                                    <input type="text" placeholder="Password *" name="password" id="password" required="required">
                                </div>
                                <div class="submit-slide">
                                    <input type="submit" id="login" value="Login">
                                </div>
                                <!-- <a href="#" class="forgot-password">Forgot password ?</a> -->
                                <div class="sign-upLink">
                                    <label>New User ?</label>
                                    <a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Sign Up Now</a>
                                </div>
                            </div>
                            </form>
                            <!-- <div class="or-text">
                                <span>OR</span>
                            </div>
                            <div class="sosiyal-midiya">
                                <div class="note">You can also login using one of your social/email accounts</div>
                                <a href="#" class="midiya-btn facebook"><i class="fa fa-facebook"></i>Login with Facebook</a>
                                <a href="#" class="midiya-btn twitter"><i class="fa fa-twitter"></i>Login with Twitter</a>
                                <a href="#" class="midiya-btn googlePluse"><i class="fa fa-google-plus"></i>Login with Google</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <div class="modal fade" id="myModal" role="dialog">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Welcome to Belle</h2>
                        <div class="close-btn"  data-dismiss="modal" ><i class="fa fa-close"></i></div>
                        <div class="login-info">
                            <form action="#" method="post">
                            <div class="left-form">
                                <div class="note">Please enter your details below to login</div>
                                <div class="input-box">
                                    <input type="text" placeholder="Your Name *" name="rusername" id="rusername" required="required">
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="Your Email *" name="remail" id="remail" required="required">
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="Your Phone Number *" name="rphone" id="rphone" required="required">
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="Password *" name="rpassword" id="rpassword" required="required">
                                </div>
                                <div class="submit-slide">
                                    <input type="submit" id="rlogin" value="Sign Up">
                                </div>
                                <!-- <a href="#" class="forgot-password">Forgot password ?</a> -->
                                <div class="sign-upLink">       
                                    <a href="#" data-toggle="modal" data-target="#logoinPopup">Log In Now</a>
                                </div>
                            </div>
                            </form>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="js/jquery-1.12.4.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
    <script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function() {
          
            $('#login').click(function() {
                       
                var password = $("#password").val();
                var email = $("#email").val();
                    
                    var dataString = 'email=' + email + '&password='+ password;
                    
                    if(password=="" || email=="")  {
                        alert('Fill all fields');
                    
                    } else {
                        
                        $.ajax({
                            type: "POST",
                            url: "authentication.php",
                            data: dataString,
                            success: function(response) {
                                //$('#success__para').html("Your data will be saved");
                                if ($.trim(response) == 'Not') {

                                    console.log(response);
                                    alert('Sorry Email / Password wrong !');

                                } else {

                                    $('#logoinPopup').modal('hide');
                                    // window.location.href= "/index.php";
                                    location.reload();
                                }
                                
                            }
                        });
                        return false;
                    }
            });

            $('#rlogin').click(function() {
                
                var username = $("#rusername").val();
                var email = $("#remail").val();
                var phone = $("#rphone").val();  
                var password = $("#rpassword").val();
                
                    
                    var dataString = 'username=' + username + '&email='+ email+ '&phone='+ phone+ '&password='+ password;
                    
                    if(username == "" || email == "" || phone == "" || password == "")  {
                        alert('Fill all fields');
                    
                    } else {
                        
                        $.ajax({
                            type: "POST",
                            url: "registration.php",
                            data: dataString,
                            success: function(response) {
                                //$('#success__para').html("Your data will be saved");
                                
                                if ($.trim(response) == 'available') {

                                    console.log(response);
                                    alert('Sorry Email already available in our database !');

                                } else {

                                    $('#myModal').modal('hide');
                                }
                                // window.location.href= "/index.php";
                            }
                        });
                        return false;
                    }
            });
          
        });
    
    </script>