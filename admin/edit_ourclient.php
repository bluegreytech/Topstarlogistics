<?php
		include('header.php');
   if(isset($_GET['OurclientId']))
   {
       $OurclientId=$_GET['OurclientId'];
       $getData=mysqli_query($con,"select * from tblourclient where ourclient_id='$OurclientId'");    
       $OurclientData=mysqli_fetch_assoc($getData);
       $ourclient_image=$OurclientData['ourclient_image'];
       $status=$OurclientData['status'];     
       if(isset($_POST['update']))
       {
		  
		   if($_FILES['OurclientImage']['name']==''){		  
		   	$ourclient_image=$OurclientData['ourclient_image'];      
		   }else{	

		   unlink("upload/OurclientImages/".$OurclientData['ourclient_image']);	
            $random1 = substr(number_format(time() * rand(),0,'',''),0,10);
            $ourclient_image=$random1.'_'.$_FILES['OurclientImage']['name'];
		   }
			
           $p1=$_FILES['OurclientImage']['tmp_name'];
           $path="upload/OurclientImages/$ourclient_image";
           move_uploaded_file($p1,$path);
           $status=$_POST['status'];
           $updateData="update tblourclient set ourclient_image='$ourclient_image',status='$status' where ourclient_id='$OurclientId'";
             
           $result=mysqli_query($con,$updateData);
           if($result)
           {

				$_SESSION['check']=3;
				echo '<script>
				window.location="ourclient_list"
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
					<h4 class="card-title" id="basic-layout-form">Edit Our Client Images</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
							<form class="form" method="post" enctype="multipart/form-data" id="form_Ourclientimages">
							<!-- <div class="form-body"> -->
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>		
								<div class="form-group">
									<label>Image</label>
                                   <p><img src="<?php echo BASE_URL;?>/admin/upload/OurclientImages/<?php echo $ourclient_image;?>" height="50" width="50" /></p>
									<!--  <label id="projectinput7" class="file center-block">  -->
										<input type="file" name="OurclientImage" id="OurclientImage" class="form-control">
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