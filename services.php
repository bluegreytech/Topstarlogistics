<?php include 'header.php';?>
<style type="text/css">
	hr.style-two {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
</style>

	<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
		<div class="banner-text">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="border-title border-left">Services</h1>
	        				<ol class="breadcrumb">
	        					<li><a href="index">Home</a></li>
	        					<li>Services</li>
	        				</ol>
	        			</div>
	        		</div><!-- Col end -->
	        	</div><!-- Row end -->
       	</div><!-- Container end -->
    	</div><!-- Banner text end -->
	</div><!-- Banner area end --> 
 
		<?php   
		$i=1;
		$query="select * from tblservices ORDER BY ServiceId  ASC";
		$res=mysqli_query($con,$query);
		$rowcount=mysqli_num_rows($res);
		if($rowcount>0){
		?>	
		<?php

		while($row=mysqli_fetch_array($res))
		{
		?>
		<section id="<?php echo $row['ServiceId']; ?>" class="main-container" style="padding:0;padding-top: 70px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="content-inner-page">


							<h2 class="border-title border-left"><?PHP echo $row['ServicesTitle']; ?></h2>

							<div class="row" id="<?php echo $row['ServiceId']; ?>">
								<div class="col-md-8">
									<p><?PHP echo $row['ServicesDescription']; ?></p>
								</div><!-- col end -->
								<div class="col-md-4">
									<div id="page-slider" class="owl-carousel owl-theme page-slider page-slider-small">

											<?php 
											$squery="select * from tblservices_gallery where services_id=".$row['ServiceId']; 
											$result=mysqli_query($con,$squery);
											$rowcount=mysqli_num_rows($result);
											if($rowcount>0){
                                          	while($srow = mysqli_fetch_assoc($result))
											{												
                                    	?>
                                		
										<div class="item">
											<img src="<?php echo BASE_URL;?>/admin/upload/ServicesImage/<?php echo $srow['services_image']; ?>" alt="" />
										</div>
									<?php }  }?>
									</div><!-- Page slider end -->
								</div><!-- col end -->
							</div><!-- 1st row end-->

							<hr class="style-two">
						</div>
					</div>
				</div>
			</div>
		</section>
		 
		<?php
			$i++;
			}
			} 
		?>
		                
	
	<!-- Main container end -->


<?php include 'footer.php';?>