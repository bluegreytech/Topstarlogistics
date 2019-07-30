<?php
    session_start();
    include('connection.php');
    define('BASE_URL', 'http://localhost/topstartlogistics');
    if(isset($_POST['login']))
    {
        $UserName=$_POST['UserName'];
        $Password=md5($_POST['Password']);
        $query="select * from tbladmin where BINARY UserName='$UserName' AND Password='$Password'";
        $select=mysqli_query($con,$query);
       
        $result=mysqli_fetch_assoc($select);
      
        $count=mysqli_num_rows($select);
        if($count > 0)
        {
            $_SESSION['UserName']=$UserName;
            header('location:paps_list.php');
        }
        else
        {
            $_SESSION['check']=1;
        }
    }

?>

<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  
<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/ltr/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 06:04:43 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Top Star Logistics</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="favicon/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.html">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page" style="background-image: url(images/bg.jpg);">
    
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header no-border">
                <div class="card-title text-xs-center">
                    <div class="p-1"><img src="app-assets/images/logo/logo.png" alt="branding logo"></div>
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login with Top Star Logistics</span></h6>
            </div>
            <center><div class="alert alert-danger" id="rec_not_matched" style="width:90%;display:none; margin:0px 0px 10px 0px"><strong>Your User Name or Password is wrong! </strong> 
            </div></center> 
       
        
            <div class="card-body collapse in">
                <div class="card-block">
                    <form class="form-horizontal form-simple" method="post" >
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" required name="UserName" class="form-control form-control-lg input-lg" placeholder="Type your Username">
                            <div class="form-control-position">
                                <i class="icon-head"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="Password" required name="Password" class="form-control form-control-lg input-lg"  placeholder="Type your Password">
                            <div class="form-control-position">
                                <i class="icon-key3"></i>
                            </div>
                        </fieldset>
                        <fieldset class="form-group row">
                            <!-- <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                <fieldset>
                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                    <label for="remember-me"> Remember Me</label>
                                </fieldset>
                            </div> -->
                            <!-- <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="recover-Password.php" class="card-link">Forgot Password?</a></div> -->
                        </fieldset>
                        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" style="background-color: #FE0000;border:none;"><i class="icon-unlock2"></i> Login</button>
                    </form>
                </div>
            </div>
            <!--div class="card-footer">
                <div class="">
                    <p class="float-sm-left text-xs-center m-0"><a href="recover-Password.html" class="card-link">Recover Password</a></p>
                    <p class="float-sm-right text-xs-center m-0">New to Robust? <a href="register-simple.html" class="card-link">Sign Up</a></p>
                </div>
            </div-->
        </div>
    </div>
</section>

        </div>
      </div>
    </div>
   

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/ltr/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Apr 2019 06:04:47 GMT -->
</html>

<script>
<?php
        if(isset($_SESSION['check']))
        {
    ?>
	var check = <?php echo $_SESSION['check'];?> 					
    <?php
            unset($_SESSION['check']);
    }
    ?>
	$(document).ready(function () {
	if(check==1) {
	$('#rec_not_matched').css('display','block');
		setTimeout(function(){
		    $('#rec_not_matched').css('display','none');
            }, 10000);
		}
	});
</script>
