
<footer id="footer" class="footer bg-overlay">
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-12 footer-widget footer-about text-justify">
						<h3 class="widget-title">About Us</h3>
						<?php   
							
							$query="select * from tblabout ORDER BY AboutId  DESC";
							$res=mysqli_query($con,$query);
							$rowcount=mysqli_num_rows($res);
							if
								($rowcount>0){

						while($row=mysqli_fetch_assoc($res))
						{
					?>
					<p><?php  $pos=strpos($row['AboutDescriotion'],' ', 388);
					echo substr($row['AboutDescriotion'],0,$pos ); 
					 ?></p>	
					<?php } }  ?>
					
						<div class="footer-social">
							<ul>
								<li><a href="https://www.facebook.com/topstarlogistics" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div><!-- Footer social end -->
					</div><!-- Col end -->

					<div class="col-md-4 col-sm-12 footer-widget">
						<h3 class="widget-title">Services</h3>
							<?php   
							
							$query="select * from tblservices ORDER BY ServiceId  ASC";
							$res=mysqli_query($con,$query);
							$rowcount=mysqli_num_rows($res);
							if($rowcount>0){
							?>
							<ul class="list-arrow">
							<?php

							while($row=mysqli_fetch_array($res))
							{
							?>
							<li><a href="services#<?php echo $row['ServiceId']; ?>"><?php echo $row['ServicesTitle']; ?></a></li>
							<!-- <li><a href="services#chilled">Chilled Shipments</a></li> -->
							<?php
							$i++;
							}
							} 
							?>
						
						
						</ul>
					</div><!-- Col end -->

					<div class="col-md-4 col-sm-12 footer-widget">
						<h3 class="widget-title">Working Hours</h3>
						<div class="working-hours">
							We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our Hotline and Contact form.
							<br><br><b><?php echo $resdata['Timeing'];?></b>
							<br><b><?php echo $resdata['Timeing2'];?></b>
							<br><b><?php echo $resdata['Docks_hours'];?></b>
					
						</div>
					</div><!-- Col end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer main end -->

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © 2019 Top Star Logistics Inc. All Rights Reserved.</span>
						</div>
					</div>

					<!--div class="col-xs-12 col-sm-6">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="#">Investors</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Events</a></li>
								<li><a href="#">Case Studies</a></li>
								<li><a href="#">Videos</a></li>
							</ul>
						</div>
					</div-->
				</div><!-- Row end -->

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-double-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
		</div><!-- Copyright end -->

	</footer><!-- Footer end -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d3949ed9b94cd38bbe92a8a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/ini.isotope.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>

</html>