<?php     include('connection.php');
 define('BASE_URL', 'http://www.topstarlogistics.com');
//echo  BASE_URL ;
 $query="select * from tblsitesetting ORDER BY siteid DESC";
	$res=mysqli_query($con,$query);
	
	$rowcount=mysqli_num_rows($res);
	$resdata= array();
	while ($row=mysqli_fetch_assoc($res)) {
		//echo "<pre>";print_r($row['Email']);
		//echo $row['Email'];
		$resdata['Siteid']=$row['Siteid'];
		$resdata['Email']=$row['Email'];
	    $resdata['Phone']=$row['Phone']; 
	    $resdata['Timeing']=$row['Timeing'];
	    $resdata['Timeing2']=$row['Timeing2'];
	    $resdata['Docks_hours']=$row['Docks_hours'];
	    $resdata['Address']=$row['Address'];
	}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Top Star Logistics</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">
	
	<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	 <![endif]-->
	 <!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
	
<body>

	<div class="body-inner">

	<div class="preload">
		<span class="blink">
		<img src="images/logo.png">
		</span>
	</div>

	<div id="top-bar" class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
					<ul class="top-info">
						<li><i class="fa fa-phone">&nbsp;</i><p class="info-text"><a href="tel:<?php echo $resdata['Phone'];?>"><?php echo $resdata['Phone'];?></a></p></li>
						<li><i class="fa fa-envelope-o">&nbsp;</i><p class="info-text"><a href="mailto:<?php echo $resdata['Email'];?>" style="color:#fff;"><?php echo $resdata['Email'];?></a></p></li>
					</ul>
				</div><!--/ Top info end -->

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
					<ul class="unstyled">
						<li>
							<a title="Facebook" href="https://www.facebook.com/topstarlogistics" target="_blank">
								<span class="social-icon"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Twitter" href="#">
								<span class="social-icon"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="social-icon"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="Linkdin" href="#">
								<span class="social-icon"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Rss" href="#">
								<span class="social-icon"><i class="fa fa-rss"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="social-icon"><i class="fa fa-skype"></i></span>
							</a>
						</li>
					</ul>
				</div><!--/ Top social end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</div><!--/ Topbar end -->

	<!-- Header start -->
	<header id="header" class="nav-style-boxed">
		<div class="container">
			<div class="row">
				<div class="logo-area clearfix">
					<div class="logo col-xs-12 col-md-3">
						 <a href="<?php echo BASE_URL; ?>">
							<img src="images/logo.png" alt="" style="height: 120px;">
						 </a>
					</div><!-- logo end -->

					<div class="col-xs-12 col-md-9 header-right hidden-xs" style="padding-left: 0" >
						<ul class="top-info-box">
							<li>
								<div class="info-box"><span class="info-icon"><i class="fa fa-map-marker">&nbsp;</i></span>
									<div class="info-box-content">
										<p class="info-box-title">Find Us</p>
										<p class="info-box-subtitle"><?php echo $resdata['Address'];?></p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-box"><span class="info-icon"><i class="fa fa-phone">&nbsp;</i></span>
									<div class="info-box-content">
										<p class="info-box-title">Call Us</p>
										<p class="info-box-subtitle"><?php echo $resdata['Phone'];?></p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-box last"><span class="info-icon"><i class="fa fa-compass">&nbsp;</i></span>
									<div class="info-box-content">
										<p class="info-box-title">We are Open</p>
										<p class="info-box-subtitle"><b><?php echo $resdata['Timeing'];?></b></p>
										<p class="info-box-subtitle"><b><?php echo $resdata['Timeing2'];?></b></p>
										<p class="info-box-title">Dock Hours</p>
										<p class="info-box-subtitle"><b><?php echo $resdata['Docks_hours'];?></b></p>
									</div>
								</div>
							</li>
						</ul>
					</div><!-- header right end -->
				</div><!-- logo area end -->
				
			</div><!-- Row end -->
		</div><!-- Container end -->

		<nav class="site-navigation navigation">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="site-nav-inner pull-left">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							  <span class="sr-only">Toggle navigation</span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							  <span class="icon-bar"></span>
							</button>

							<div class="collapse navbar-collapse navbar-responsive-collapse">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="<?php echo BASE_URL; ?>">Home</a>
									</li>

									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="about-us">About Us</a></li>
											<li><a href="about-us#Mission">Mission & Vision</a></li>
											<li><a href="about-us#Delivery">Shipment</a></li>
										</ul>
									</li>

									<li class="dropdown">
										<a href="services">Services </a>
										<!--ul class="dropdown-menu" role="menu">
											<li><a href="services.php">Services All</a></li>
											<li><a href="services.php#frozen">Frozen Shipments</a></li>
											<li><a href="services.php#chilled">Chilled Shipments</a></li>
										</ul-->
									</li>

									<li>
										<a href="contact-us">Contact</a>
									</li>

									<li>
										<a href="pars">Paps/Pars</a>
									</li>

									<!--li class="header-get-a-quote">
										<a href="contact-us">Get Free Quote</a>
									</li-->

								</ul><!--/ Nav ul end -->
							</div><!--/ Collapse end -->

						</div><!-- Site Navbar inner end -->

					</div><!--/ Col end -->
				</div><!--/ Row end -->
			</div><!--/ Container end -->

		</nav><!--/ Navigation end -->
	</header><!--/ Header end -->
