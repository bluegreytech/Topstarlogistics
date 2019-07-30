<?php
		include('header.php');
   if(isset($_GET['SgalleryId']))
   {
       $SgalleryId=$_GET['SgalleryId'];
       $getData=mysqli_query($con,"select * from tblservices_gallery where 	sgallery_id='$SgalleryId'");    
       $SgalleryData=mysqli_fetch_assoc($getData);
       $services_image=$SgalleryData['services_image'];
       $status=$SgalleryData['status'];     
       if(isset($_POST['update']))
       {
		   $services_id=$_POST['services_id'];
		   if($_FILES['ServicesImage']['name']==''){		  
		   	$services_image=$SgalleryData['services_image'];      
		   }else{		
            $random1 = substr(number_format(time() * rand(),0,'',''),0,10);
            $services_image=$random1.'_'.$_FILES['ServicesImage']['name'];
		   }
			
           $p1=$_FILES['ServicesImage']['tmp_name'];
           $path="upload/ServicesImage/$services_image";
           move_uploaded_file($p1,$path);
           $status=$_POST['status'];
           $updateData="update tblservices_gallery set services_id='$services_id',services_image='$services_image',status='$status' where sgallery_id='$SgalleryId'";
             
           $result=mysqli_query($con,$updateData);
           if($result)
           {

				$_SESSION['check']=3;
				echo '<script>
				window.location="services_gallery"
				</script>';
			}else{?>
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
					<h4 class="card-title" id="basic-layout-form">Edit Services images</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
							<form class="form" method="post" enctype="multipart/form-data" id="form_servicesimages">
							<!-- <div class="form-body"> -->
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>

								

								<div class="form-group">
									<label>Services Name</label>
									<select name="services_id" class="form-control">
										<option value="0" selected="" disabled="">Please Select</option>
										<?php
											$query="select * from tblservices ORDER BY ServiceId DESC";
											$res=mysqli_query($con,$query);
											$rowcount=mysqli_num_rows($res);
											while($row=mysqli_fetch_array($res))
											{?>
												<option value="<?php echo $row['ServiceId'] ?>" <?php if($SgalleryData['services_id']== $row['ServiceId']){ echo "selected";} ?>><?php echo $row['ServicesTitle']; ?></option>

											<?php } ?>

									</select>
								</div>

								<div class="form-group">
									<label>Services Image</label>
                                   <p><img src="<?php echo BASE_URL;?>/admin/upload/ServicesImage/<?php echo $services_image;?>" height="50" width="50" /></p>
									<!--  <label id="projectinput7" class="file center-block">  -->
										<input type="file" name="ServicesImage" id="ServicesImage" class="form-control">
										<span class="file-custom"></span>

									 <!-- </label> -->

								</div>

								<div class="form-group">
											<label>Status</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="status" value="1" checked="" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Active</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="status" value="0" class="custom-control-input">
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
<script type="text/javascript">
		$(document).ready(function()

{//alert('gfgf');

$("#form_servicesimages").validate(
{
rules:{
	services_id:{
	required: true,
	},
	ServicesImage:{
	required: true,	
	},
	status:{
	required: true,	
	},
},
});
});
</script>