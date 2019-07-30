<?php include 'header.php';?>
<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:0,d:1400,x:1008,y:-9}],
              [{b:0,d:1200,x:2,y:-222}],
              [{b:0,d:1400,x:-1031,y:-7}],
              [{b:0,d:1200,x:2,y:-222}],
              [{b:0,d:1400,x:1008,y:-9}],
              [{b:0,d:1200,x:2,y:-222}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#0101FD;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#0101FD;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1349px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/slider-main/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1349px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/slider-main/bg1.jpg" />
                <div data-t="0" style="position:absolute;top:224px;left:-602px;width:590px;height:40px;font-size:32px;color:#000000;line-height:1.2;text-align:center;">
                    <span class="slide-sub-title">Working Less But Smarter!!</span>
                </div>
                <div data-t="1" style="position:absolute;top:513px;left:587px;width:200px;height:40px;font-size:32px;color:#000000;line-height:1.2;text-align:center;"><a href="contact-us.php" class="slider btn btn-primary">Contact Us</a>
                </div>
            </div>
            <div>
                <img data-u="image" src="images/slider-main/bg2.jpg" />
                <div data-t="2" style="position:absolute;top:222px;left:1437px;width:590px;height:40px;font-size:32px;color:#000000;line-height:1.2;text-align:center;">
                    <span  class="slide-sub-title">Working Less But Smarter!!</span>
                </div>
                <div data-t="3" style="position:absolute;top:513px;left:587px;width:200px;height:40px;font-size:32px;color:#000000;line-height:1.2;text-align:center;"><a href="contact-us.php" class="slider btn btn-primary">Contact Us</a></div>
            </div>
            <div>
                <img data-u="image" src="images/slider-main/bg3.jpg" />
                <div data-t="4" style="position:absolute;top:224px;left:-602px;width:590px;height:40px;font-size:32px;color:#000000;line-height:1.2;text-align:center;">
                    <span class="slide-sub-title">Working Less But Smarter!!</span>
                </div>
                <div data-t="5" style="position:absolute;top:513px;left:587px;width:200px;height:40px;font-size:32px;color:#000000;line-height:1.2;text-align:center;"><a href="contact-us.php" class="slider btn btn-primary">Contact Us</a></div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->  
	

	<section id="ts-features-top" class="ts-features-top">
		<div class="container">
			<div class="row">
					<?php   
							
							$query="select * from tblabout ORDER BY AboutId  DESC";
							$res=mysqli_query($con,$query);
							$rowcount=mysqli_num_rows($res);
							if
								($rowcount>0){

						while($row=mysqli_fetch_assoc($res))
						{
					?>
					<div class="col-md-6">
					<img src="<?php echo BASE_URL;?>/admin/upload/AboutImages/<?php echo $row['AboutImage']; ?>" class="img-responsive">
				</div>
				<div class="col-md-6 text-justify">
					 <h3 class="border-title border-left">Who We Are</h3>
						
				
					<p><?php $pos=strpos($row['AboutDescriotion'],' ', 760);
					echo substr($row['AboutDescriotion'],0,$pos );  ?></p>						
				
					<div class="text-right"><br>
						<a href="about-us" class="btn btn-primary solid blank">Read More</a> 
					</div>
					<?php } }   ?>
				</div>
		</div><!-- Container end -->
	</section><!-- Feature are end -->

	<section id="facts" class="facts-area bg-overlay no-padding">
		<div class="container">
			<div class="row">
				<div class="facts-wrapper">
					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="images/icon-image/fact1.png" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">6</span>Years</h2>
							<h3 class="ts-facts-title">Experience In <br/> Transportation</h3>
						</div>
					</div><!-- Col 1 end -->

					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="images/icon-image/fact2.png" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">2</span>Plus</h2>
							<h3 class="ts-facts-title">Countries Servicing <br/> Worldwide</h3>
						</div>
					</div><!-- Col 2 end -->

					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="images/icon-image/fact3.png" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">100</span>Plus</h2>
							<h3 class="ts-facts-title">Owned<br/>  Vehicles  </h3>
						</div>
					</div><!-- Col 3 end -->

					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="images/icon-image/fact4.png" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">10</span>Million</h2>
							<h3 class="ts-facts-title">Miles Driven <br/> Per Year</h3>
						</div>
					</div><!-- Col 4 end -->

				</div> <!-- Facts end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Facts end -->

	
<section id="news" class="news">
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">Choosing Top Star Logistics</h2>
				<p class="border-sub-title">
					4 Top reasons to choose Top Star Logistics
				</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-shield"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a>Safety & Secure</a></h3>
							<p>We understand that safety and security trumps any other aspects of the process. </p>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-truck"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a>Delivery On Time</a></h3>
							<p> Expedite and Rush Deliveries</p>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-archive"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a>Packaging & Storage</a></h3>
							<p>We monitor all our carriersand only work with those above the acceptable threshold in every measurement</p>
					  </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="ts-service-box text-center">
						<div class="ts-service-icon">
							<i class="fa fa-users"></i>
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a>Care for Environment</a></h3>
							<p>We will be innovative in providing careful and thoughtful training to our employees</p>
					  </div>
					</div>
				</div>
				
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->

	<section>
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">Loading Dock, Warehouse & Forklift</h2>
			</div><!--/ Title row end -->
			<div class="row">
				<div class="col-md-6">
					<img src="images/dock-warehouse.png" class="img-responsive">
				</div>
				<div class="col-md-6 dock-content">
					<p>Loading docks are a crucial element of warehouses and freight terminals for the delivery and warehousing of good across the industry spectrum.
					By enabling the use of specialized equipment when loading and unloading freight, loading docks help increase the efficiency of the entire process, cutting costs and getting products to their destinations faster. This can help businesses that rely on the delivery of goods grow and thrive. As long as a loading dock is built to the right specifications and safety standards, it will be the single best way to transfer freight into and out of a facility.

‍				</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 dock-content">
					<p>This might come as a surprise, but forklift trucks can be utilized to transport people. They’re used as a substitute tool to aerial lifts and cranes to hoist people to higher places, especially when these people need to perform a variety of tasks. When transporting people, however, there are very specific safety practices that you must always take into consideration.Forklifts vary in size, ranging from one ton capacity for general warehouse related work to 50 ton capacity for shipping container work. A plate on the forklift determines the highest weight it can lift. Forklift operators can lift up and lower the forks, use side shifters to move loads and tilt the mast so the load doesn’t slide off the forks.</p>
				</div>
				<div class="col-md-6">
					<img src="images/forklift.jpg" class="img-responsive">
				</div>
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Testimonial end -->


	<section id="testimonial-area" class="testimonial-area bg-overlay">
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">What People Said</h2>
				<!--p class="border-sub-title">
					Collaboratively administrate empowered markets via plug-and-play networks.
				</p-->
			</div><!--/ Title row end -->

			<div class="row">
				<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
				    	<?php   
							
							$query="select * from tbltestimonial ORDER BY TestimonialId  DESC";
							$res=mysqli_query($con,$query);
							$rowcount=mysqli_num_rows($res);
							if
								($rowcount>0){
                         //echo "<pre>";print_r($res);
						while($row=mysqli_fetch_assoc($res))
						{
						   
					?>
					 <div class="item">
					  <div class="quote-item">
							<span class="quote-text">
							<?php echo $row['TestimonialDescription'];?>
							</span>

							<div class="quote-item-footer">
							    <img src="<?php echo BASE_URL;?>/admin/upload/TestimonialImages/<?php echo $row['TestimonialImage']; ?>" class="testimonial-thumb" alt="testimonial"style="width: 70px; height: 70px;">
							
								<div class="quote-item-info">
									<h3 class="quote-author"><?php echo $row['TitleName'];?></h3>
									<span class="quote-subtext"><?php echo $row['Designation'];?></span>
								</div>
							</div>
					  </div><!-- Quote item end -->
				  </div><!--/ Item 1 end -->
					<?php } } ?>

				</div><!--/ Testimonial carousel end-->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Testimonial end -->

	
	<!-- Partners start -->
	<section id="partners-area" class="partners-area">
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">Our Clients</h2>
				<p class="border-sub-title">
					Collaboratively administrate empowered markets via plug-and-play networks.
				</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
				  <?php   
					$i=1;
					$query="select * from tblourclient ORDER BY ourclient_id  DESC";
					$res=mysqli_query($con,$query);
					$rowcount=mysqli_num_rows($res);
					if($rowcount>0){
					?>	
					<?php

					while($row=mysqli_fetch_array($res))
					{
					?>
					  <figure class="item partner-logo">
					 <img class="img-responsive" src="<?php echo BASE_URL;?>/admin/upload/OurclientImages/<?php echo $row['ourclient_image']; ?>" alt="client">
				  </figure>
					<?php
					$i++;
					}
					} 
					?>
				  
				</div><!--/ Owl carousel end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Partners end -->


<?php include 'footer.php';?>