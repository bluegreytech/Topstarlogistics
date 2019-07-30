<?php 
    include('connection.php');
    $FROMNAME=FROMNAME;
    $USERNAME=USERNAME;
    $USERPASSWORD=USERPASSWORD;
    $SETFROM=SETFROM;
    $SETTO=SETTO;
?>

<?php include 'header.php';?>
	<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg);">
		<div class="banner-text">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="border-title border-left">Contact</h1>
	        				<ol class="breadcrumb">
	        					<li><a href="index.php">Home</a></li>
	        					<li>Contact Us</li>
	        				</ol>
	        			</div>
	        		</div><!-- Col end -->
	        	</div><!-- Row end -->
       	</div><!-- Container end -->
    	</div><!-- Banner text end -->
	</div><!-- Banner area end --> 

	<section id="main-container" class="main-container">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-left">
						<div class="widget contact-info">
							<h3 class="widget-title">Contact Us</h3>

							<div class="contact-info-box">
								<i class="fa fa-map">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Visit Us</h4>
									<p><?php echo $resdata['Address'];?></p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-envelope">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Mail Us</h4>
									<p><?php echo $resdata['Email'];?></p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-phone-square">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Call Us</h4>
									<p><?php echo $resdata['Phone'];?></p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-fax">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Fax Us</h4>
									<p><?php echo $resdata['Phone'];?></p>
								</div>
							</div>

						</div><!-- Widget end -->
					</div><!-- Sidebar left end -->
				</div><!-- Sidebar col end -->

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					 <center><div class="alert alert-success" id="insert_rec" style="width:100%;display:none; margin:0px 0px 10px 0px">
									<strong>Thank You ! </strong> Your message has been sent.	
								</div>	  
						</center>
	    			<h3 class="border-title border-left">Contact Form</h3>
	    			<form method="post">
	    				<div class="error-container"></div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Your name</label>
								<input class="form-control form-control-name" name="FirstName" id="name" placeholder="Your name" type="text" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Email address</label>
									<input class="form-control form-control-email" name="EmailAddress" id="email" 
									placeholder="Email address" type="email" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Contact Number</label>
									<input class="form-control form-control-subject" name="ContactNumber" id="subject" 
									placeholder="Contact number" required pattern="^\d{10}$">
								</div>
							</div>
						
						<div class="col-md-6">
								<div class="form-group">
									<label>Website</label>
									<input class="form-control form-control-subject" name="Website" id="subject" 
									placeholder="Website link" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control form-control-message" name="Message" id="message" placeholder="Message" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit" name="contact">Send Message</button> 
						</div>
					</form>
	    		</div>
			
			</div><!-- Content row -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

	<section id="map-wrapper" class="no-padding">
		<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d720.4504485631436!2d-79.69941704396302!3d43.75621256008274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x882b3d1cf13ee1d9%3A0x58d096e6554b7fa9!2sTop+Star+Logistics%2C+70+Ward+Rd%2C+Brampton%2C+ON+L6S+4L5%2C+Canada!3m2!1d43.756248199999995!2d-79.6988691!4m5!1s0x882b3d1cf13ee1d9%3A0x58d096e6554b7fa9!2sTop+Star+Logistics%2C+70+Ward+Rd%2C+Brampton%2C+ON+L6S+4L5%2C+Canada!3m2!1d43.756248199999995!2d-79.6988691!5e0!3m2!1sen!2sin!4v1559622257407!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section><!-- Map end -->


<?php include 'footer.php';?>
  <?php if(isset($_POST['contact']))
    {

                $FirstName=$_POST['FirstName'];
                $EmailAddress=$_POST['EmailAddress'];
                $ContactNumber=$_POST['ContactNumber'];
                $Website=$_POST['Website'];
                $Message=$_POST['Message'];
                // $result="insert into tblcontact(FirstName,EmailAddress,ContactNumber,Website,Message)values('$FirstName','$EmailAddress','$ContactNumber','$Website','$Message')";
                // var_dump($result);
                // exit;
                 $result=mysqli_query($con,"insert into tblcontact(FirstName,EmailAddress,ContactNumber,Website,Message)values('$FirstName','$EmailAddress','$ContactNumber','$Website','$Message')")or die(mysql_error());
                    if($result)
                    {
                       
                            require_once('email/class.phpmailer.php');
                            $mail = new PHPMailer(); // create a new object
                            $mail->IsSMTP(); // enable SMTP
                            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                            $mail->SMTPAuth = true; // authentication enabled
                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
                            $mail->Host = "topstarlogistics.com";
                            $mail->Port = 465; // or 587
                            $mail->IsHTML(true);
                            $mail->FromName=FROMNAME;
                            $mail->Username=USERNAME;
                            $mail->Password=USERPASSWORD;
                            $mail->SetFrom=SETFROM;	
                            $mail->Subject = "Topstar Logistics user visited details";
                            $mail->Body ="Hello, <br/><br>
                            Please find below details for user visited your site.<br><br>
                            <b>Email Address</b>: $EmailAddress<br/>
                            <b>Name</b>: $FirstName <br/>
                            <b>Contact Number</b>: $ContactNumber<br/>

                            Kind Regards, <br/>
                            Thank You,<br/>
                            <b>Our web Team</b> <br/>";
                            $mail->AddAddress($SETTO);
                          //  echo $mail->Send();die;
                            if(!$mail->Send())
                            {
                            
                                echo 'Email Not sended';
                            }
                            else
                            { ?>
                            	<script type="text/javascript">
									$(document).ready(function () {
											$('#insert_rec').css('display','block');
											setTimeout(function(){
											$('#insert_rec').css('display','none');
											}, 5000);
										
									});
                            	</script>
                               
                           <?php }
	    	
                    }
                    else
                    { ?>
                       <center><div class="alert alert-danger" id="rec_not_insert" style="width:100%; display:inline-block; margin:0px 0px 10px 0px; fonnt-size:20px"><strong>Your record was not inserted!</strong> 
								 </div>  
								</center>
								<script>
									setTimeout(function() {
									$('#rec_not_insert').fadeOut('hide');
									}, 10000);	
							  </script>	
                   <?php }
    }

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
	    $resdata['Address']=$row['Address'];
	}
?>
