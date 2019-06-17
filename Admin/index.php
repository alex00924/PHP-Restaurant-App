<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Restaurent | Login - Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
        
        <!-- Styles -->
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="assets/css/meteor.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
      
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href="index.php" class="logo-name text-lg text-center m-t-xs">Restaurent</a>
    <p class="text-center m-t-md">Please login into your account.</p>
    <p class="text-center m-t-md" id="nodata" style="color: red;"></p>
    <form class="m-t-md" action="#">
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" class="form-control password" placeholder="Password" required>
    </div>
    <button type="submit" id="loginbutton" class="btn btn-success btn-block">Login</button>
  
                                            <!-- <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                            <a href="register.php" class="btn btn-default btn-block m-t-md">Create an account</a> -->
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/meteor.min.js"></script>

        <script>
            $("#loginbutton").click(function() {
                
                email = $("#email").val();
                password = $("#password").val();
                
                var dataString = 'email=' + email + '&password='+ password ;

                if(email =='') {
                    $("#email").focus();
                    $("#email").css('border-color', 'red');
                    return false;
                }
                if(email !='') {
                  $("#email").css('border-color', '');  
                }

                if(password =='') {
                    $("#password").focus();
                    $("#password").css('border-color', 'red');
                    return false;
                }
                if(password !='') {
                  $("#password").css('border-color', '');  
                }
                
                if(email != '' && password != '') {
                    $.ajax({
                        type: "POST",
                        url: "authenticity_check.php",
                        data: dataString,                        
                        success: function(response) {

                            console.log(response);
                           if($.trim(response) == 'success') {

                            window.location.href = 'http://cpuma.com/Applications/restaurent/Admin/Dashboard.php';
                           } 
                           if($.trim(response) == 'wrong') {
                            $("#password").focus();
                            $("#nodata").html('Wrong Password');
                            $("#password").css('border-color', 'red');

                           } 
                           if($.trim(response) == 'not') {  
                               $("#email").focus();    
                               $("#nodata").html('No Data Found');                      
                               $("#email").css('border-color', 'red');
                               $("#password").css('border-color', 'red');
                           }
                                                        
                        }
                    });   
                     
                    return false;           
                } else {

                   return false;
                }

                return false;
            });
        </script>
        
    </body>
</html>