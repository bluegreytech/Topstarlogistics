<?php
	include('header.php');
	echo BASE_URL;
	if(isset($_GET['TestimonialId']))
	{
       $TestimonialId=$_GET['TestimonialId'];
       $getData=mysqli_query($con,"select * from tbltestimonial where TestimonialId='$TestimonialId'");
	   $tetimonialData=mysqli_fetch_assoc($getData);
	  // $TitleName=$tetimonialData['TitleName'];
	   $TestimonialImage=$tetimonialData['TestimonialImage'];
	   //$Designation=$tetimonialData['Designation'];
       $IsActive=$tetimonialData['IsActive'];

	   if(isset($_POST['update']))
       {
		   $TitleName=$_POST['TitleName'];
		   $TestimonialDescription=$_POST['TestimonialDescription'];
		   $Designation=$_POST['Designation'];

		   if($_FILES['TestimonialImage']['name']==''){
			$TestimonialImage=$tetimonialData['TestimonialImage'];
		 
		  }else{
			   $random1 = substr(number_format(time() * rand(),0,'',''),0,10);
			  $TestimonialImage=$random1.'_'.$_FILES['TestimonialImage']['name'];
		  }

	
           $p1=$_FILES['TestimonialImage']['tmp_name'];
           $path="upload/TestimonialImages/$TestimonialImage";
           move_uploaded_file($p1,$path);
           $IsActive=$_POST['IsActive'];
        //    if($AboutData['AboutImage']!='')
        //    {
           	
			$updateData="update tbltestimonial set TitleName='$TitleName',TestimonialDescription='$TestimonialDescription' ,Designation='$Designation',TestimonialImage='$TestimonialImage',IsActive='$IsActive' where TestimonialId='$TestimonialId'";
			//echo "<pre>";print_r($updateData);die; 
        //    }
        //    else
        //    {
           
        //         $updateData="update tblabout set AboutDescriotion='$AboutDescriotion',IsActive='$IsActive' where AboutId='$AboutId'";
        //          echo "<pre>";print_r($updateData);die; 
          // }
           $result=mysqli_query($con,$updateData);
           if($result)
           {

										$_SESSION['check']=3;
										echo '<script>
										window.location="testimonial_list"
									 </script>';
					 }
					 else
					 {
							?>
									 <center><div class="alert alert-danger" id="rec_not_updated" style="width:100%; display:inline-block; margin:0px 0px 10px 0px; fonnt-size:20px"><strong>Record not Updated!</strong> 
										</div>  
									 </center>
									 <script>
										 setTimeout(function() {
										 $('#rec_not_updated').fadeOut('hide');
										 }, 10000);	
									 </script>					
				 <?php
					 }
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
					<h4 class="card-title" id="basic-layout-form">Edit Testimonial</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" id="form_valid" enctype="multipart/form-data">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>

								 <div class="form-group">
									<label>Testimonial Title</label>
									<input type="text" class="form-control" placeholder="Testimonial Title" required name="TitleName" value="<?php echo $tetimonialData['TitleName'];?>"  minlength="3" maxlength="100">
								</div>

								<div class="form-group">
									<label>Testimonial Description</label>
										<textarea id="editor1" rows="5" class="form-control" required name="TestimonialDescription" placeholder="Testimonial Description"><?php echo $tetimonialData['TestimonialDescription']?></textarea>
					                  <script>
					                    CKEDITOR.replace('editor1');
					                  </script>
								</div>
							</div>

							<div class="form-group">
									<label>Designation</label>
									<input type="text" class="form-control" placeholder="Designation " required name="Designation" value="<?php echo $tetimonialData['Designation'];?>"  minlength="3" maxlength="100">
								</div>

								<div class="form-group">
									<label>Testimonial Image </label>
									
									<p>
									<img src="upload/TestimonialImages/<?php echo $TestimonialImage;?>" height="50" width="50" />
									</p>
									<input type="file" name="TestimonialImage" id="file" value="<?php echo $_FILES['TestimonialImage']['name'];?>">
										<span class="file-custom"></span>
									
								</div>

								<div class="form-group">
											<label>Status</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="IsActive"
													<?php
													if($tetimonialData['IsActive']==1)
													{
															echo "checked";
													}
													?>
													 value="1" checked="" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Active</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="IsActive"
													<?php
														if($tetimonialData['IsActive']==0)
														{
																echo "checked";
														}
													?>
													 value="0" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Inactive</span>
												</label>
											</div>
								</div>

							<div class="form-actions">
								<button type="submit" name="update" class="btn btn-primary">
									<i class="icon-check2"></i> Update
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
				

			}
  });
});

</script>