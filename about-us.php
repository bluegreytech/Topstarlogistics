<?php include 'header.php'; ?>

	<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
		<div class="banner-text">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="border-title border-left">About Us</h1>
	        				<ol class="breadcrumb">
	        					<li><a href="<?php echo BASE_URL;?>">Home</a></li>
	        					<li>About Us</li>
	        				</ol>
	        			</div>
	        		</div><!-- Col end -->
	        	</div><!-- Row end -->
       	</div><!-- Container end -->
    	</div><!-- Banner text end -->
	</div><!-- Banner area end --> 


	<section id="main-container About-us" class="main-container">
		<div class="container">

			<div class="row">
				<div class="col-md-6 text-justify">
					 <h3 class="border-title border-left">Who We Are</h3>
					<?php   
						$i=1;
						$query="select * from tblabout ORDER BY AboutId  DESC";
						$res=mysqli_query($con,$query);
						$rowcount=mysqli_num_rows($res);
						if($rowcount>0){
					?>
					<?php
                    //  echo "<pre>";print_r($result->fetch_row($res));die;
						while($row=mysqli_fetch_assoc($res))
						{ 
							//echo "<pre>";print_r($row);
							//$row['']
						
					?>
					<p><?php echo  $row['AboutDescriotion']; ?></p>	
					<!-- <h3 class="border-title border-left">Who We Are</h3>
					<p>For carriers we are proud to let you know that our roots stem from a trucking background. At Top Star Logistics Inc, we feel that this is an essential ingredient for a great working relationship with our carrier-partners. We know what it’s like to be in your shoes! As a result we understand your needs and are committed to a positive experience for your greatest asset - your drivers. Our company was built on honesty.
					</p>
					<p>
					We look forward to working with you!
					You can be confident that we will provide the best solutions for your shipping needs - no matter how big or small. When you place your shipment in our hands you will have a single point of contact that is solely responsible for personally managing the entire process from pick-up to delivery. We are anxious to show you what we can do!</p>
 -->
				</div>
				<div class="col-md-6">
					<img src="<?php echo BASE_URL;?>/admin/upload/AboutImages/<?php echo $row['AboutImage']; ?>" class="img-responsive">
				</div>
			<?php } }  $i++; ?>
				<!-- Col end -->
			
				
			</div><!-- Content row end -->

		</div><!-- Container end -->
	</section><!-- Main container end -->

	<section class="content solid-bg" id="Mission" style="padding:0;padding-top: 70px;"> 
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">Mission & Vision</h2>
				<p style="font-size: 16px;">Provide for the safe and efficient movement of people and goods.</p>
				<p class="border-sub-title">
					Top Star Logistics Inc provide the highest level of transportation services while being safe and efficient.Our dedicated and professional global network of employees serves one purpose, to create an environment of trust and accountability.
				</p>
				<p>
				</p>
			</div><!--/ Title row end -->

			<div class="row">


			</div><!-- Content row 2 end -->

		</div><!-- Container end -->
	</section><!-- Content end -->


	<section class="content solid-bg" id="Delivery">
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">Shipments</h2>
				<p class="border-sub-title">
					We service Dry, Fresh, Heated and Frozen shipments to all points in Canada  and the United States.
				</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-12">
					<img src="images/c-map.png" class="img-responsive">
				</div><!-- col end -->

			</div><!-- Content row 2 end -->

		</div><!-- Container end -->
	</section><!-- Content end -->


<?php include 'footer.php';?>