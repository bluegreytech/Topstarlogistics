<?php
	include('header.php');
	if(isset($_POST['save']))
    {
    	$TitleName=$_POST['TitleName'];
		$TestimonialDescription=$_POST['TestimonialDescription'];
		$Designation=$_POST['Designation'];
		
		$TestimonialImage=$_POST['TestimonialImage'];
		$random1 = substr(number_format(time() * rand(),0,'',''),0,10);
        $TestimonialImage=$random1.'_'.$_FILES['TestimonialImage']['name'];
        $p1=$_FILES['TestimonialImage']['tmp_name'];
        $path="upload/TestimonialImages/$TestimonialImage";
	    move_uploaded_file($p1,$path);
       	$IsActive=$_POST['IsActive'];
		$query="insert into tbltestimonial(TitleName,TestimonialDescription,Designation,TestimonialImage,IsActive)values('$TitleName','$TestimonialDescription','$Designation','$TestimonialImage','$IsActive')";
		//echo "<pre>";print_r($query);die;
        $result=mysqli_query($con,$query);
        if($result)
        {
							$_SESSION['check']=1;
						echo '<script>
						window.location="services_list"
						</script>';
				}
				else
				{
					 ?>
								<center><div class="alert alert-danger" id="rec_not_insert" style="width:100%; display:inline-block; margin:0px 0px 10px 0px; fonnt-size:20px"><strong>Your record was not inserted!</strong> 
								 </div>  
								</center>
								<script>
									setTimeout(function() {
									$('#rec_not_insert').fadeOut('hide');
									}, 10000);	
							  </script>					
			<?php
				}
    }
?>

  <div class="app-content content container-fluid">
    <div class="content-wrapper">
        
      <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Add Testimonial</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" enctype="multipart/form-data" id="form_valid">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>

								<div class="form-group">
									<label>Testimonial Title</label>
									<input type="text" class="form-control" placeholder="Testimonial Title" required name="TitleName" minlength="3" maxlength="100">
								</div>

								<div class="form-group">
									<label>Testimonial Description</label>
									<textarea id="editor1" rows="5" class="form-control" required name="TestimonialDescription" placeholder="Testimonial Description"></textarea>
					                  <script>
					                    CKEDITOR.replace('editor1');
					                  </script>
								</div>

								<div class="form-group">
									<label>Designation</label>
									<input type="text" class="form-control" placeholder="Designation" required name="Designation" minlength="3" maxlength="100">
								</div>

								<!-- <div class="form-group">
									<label>Testimonial Image</label> -->
									<!-- <label id="projectinput7" class="file center-block"> -->
										<!-- <input type="file" required name="TestimonialImage" id="TestimonialImage">
										<span class="file-custom"></span> -->
									<!-- </label> -->
								<!-- </div> -->

								<div class="form-group">
									<label>Testimonial Image</label>
									<!-- <label id="projectinput7" class="file center-block"> -->
										<input type="file" name="TestimonialImage" id="TestimonialImage" class="form-control">
										<span class="file-custom"></span>
									<!-- </label> -->
								</div>

								<div class="form-group">
											<label>Status</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="IsActive" value="1" checked class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Active</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="IsActive" value="0" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Inactive</span>
												</label>
											</div>
								</div>

							</div>

							<div class="form-actions">
								<button type="submit" name="save" class="btn btn-primary">
									<i class="icon-check2"></i> Add
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		
			
	</div>
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>

<?php include 'footer.php';?>
<script>
$(document).ready(function () {
  $('#form_valid').validate({ // initialize the plugin
  	rules: {
				TitleName: {
							required: true,
							
							
				},
				Designation: {
							required: true,
							
							
				},
				TestimonialImage: {
							required: true,
							
							
				},
    		},

	messages:
			{
				TitleName: {
							required: "Please enter a title",
							pattern : "Enter only characters,number and -,space",
							},
				Designation: {
							required: "Please enter a designation",
							pattern : "Enter only characters,number and -,space",
				},
				TestimonialImage: {
							required: "Please enter a testimonial image",
							
				},

			}
  });
});

</script>