<?php
		include('header.php');
   if(isset($_GET['AboutId']))
   {
       $AboutId=$_GET['AboutId'];
       $getData=mysqli_query($con,"select * from tblabout where AboutId='$AboutId'");
       $AboutData=mysqli_fetch_assoc($getData);
       $AboutImage=$AboutData['AboutImage'];
       $IsActive=$AboutData['IsActive'];
     	// echo $AboutImage;   die;
       if(isset($_POST['update']))
       {
       
		   $AboutDescriotion=$_POST['AboutDescriotion'];
		   if($_FILES['AboutImage']['name']==''){
		   	$AboutImage=$AboutData['AboutImage'];
      
		   }else{
            $random1 = substr(number_format(time() * rand(),0,'',''),0,10);
           $AboutImage=$random1.'_'.$_FILES['AboutImage']['name'];
		   }

			
           $p1=$_FILES['AboutImage']['tmp_name'];
           $path="upload/AboutImages/$AboutImage";
           move_uploaded_file($p1,$path);
           $IsActive=$_POST['IsActive'];
           // if($AboutData['AboutImage']!='')
           // {
           	
                $updateData="update tblabout set AboutDescriotion='$AboutDescriotion',AboutImage='$AboutImage',IsActive='$IsActive' where AboutId='$AboutId'";
              //  echo "<pre>";print_r($updateData);die; 
           //}
           // else
           // {
           
           //      // $updateData="update tblabout set AboutDescriotion='$AboutDescriotion',IsActive='$IsActive' where AboutId='$AboutId'";
           //      //  echo "<pre>";print_r($updateData);die; 
           // }
           $result=mysqli_query($con,$updateData);
           if($result)
           {

										$_SESSION['check']=3;
										echo '<script>
										window.location="about_list"
									 </script>';
					 }
					 else
					 {
							?>
									 <center><div class="alert alert-danger" id="rec_not_updated" style="width:100%; display:inline-block; margin:0px 0px 10px 0px; fonnt-size:20px"><strong>Your record was not Updated!</strong> 
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
					<h4 class="card-title" id="basic-layout-form">Edit a About</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" id="editBlogs" enctype="multipart/form-data">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>

								

								<div class="form-group">
									<label>About Description</label>
									<textarea id="editor1" rows="5" class="form-control"  required name="AboutDescriotion" placeholder="About Description"><?php echo $AboutData['AboutDescriotion']?></textarea>
					                  <script>
					                    CKEDITOR.replace('editor1');
					                  </script>
								</div>
							</div>

								<div class="form-group">
									<label>Blog Image</label>
									<label id="projectinput7" class="file center-block">
									<p><img src="<?php echo BASE_URL;?>/admin/upload/AboutImages/<?php echo $AboutImage;?>" height="50" width="50" /></p>
								
										<input type="file" name="AboutImage" id="file" value="<?php echo $_FILES['AboutImage']['name'];?>">
										<span class="file-custom"></span>
									</label>
								</div>

								<div class="form-group">
											<label>Status</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="IsActive"
													<?php
													if($AboutData['IsActive']==1)
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
														if($AboutData['IsActive']==0)
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
								<button type="button" onclick="history.back();"  name="save" class="btn btn-danger">
									Cancel
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