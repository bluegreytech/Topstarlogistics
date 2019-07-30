<?php
		include('header.php');
		if(isset($_POST['save']))
    {
        $services_id=$_POST['services_id'];
        $ServicesImage=$_POST['ServicesImage'];
         $Createddate=date('Y-m-d');
		//		$BlogDescription=$_POST['BlogDescription'];
		$random1 = substr(number_format(time() * rand(),0,'',''),0,10);
        $ServicesImage=$random1.'_'.$_FILES['ServicesImage']['name'];
        $p1=$_FILES['ServicesImage']['tmp_name'];
        $path="upload/ServicesImage/$ServicesImage";
        move_uploaded_file($p1,$path);
        $status=$_POST['status'];
        $result=mysqli_query($con,"insert into tblservices_gallery(services_id,services_image,status,Createddate)values('$services_id','$ServicesImage','$status','$Createddate')");

        if($result)
		{
				$_SESSION['check']=1;
				echo '<script>
				window.location="services_gallery"
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
					<h4 class="card-title" id="basic-layout-form">Add Service images</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" enctype="multipart/form-data" id="form_servicesimages">
						

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
												<option value="<?php echo $row['ServiceId'] ?>"><?php echo $row['ServicesTitle']; ?></option>

											<?php } ?>

									</select>
								</div>

								<div class="form-group">
									<label>Services Image</label>
									<!-- <label id="projectinput7" class="file center-block"> -->
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
								<button type="submit" name="save" class="btn btn-primary">
									<i class="icon-check2"></i> ADD
								</button>
							</div>

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