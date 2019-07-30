<?php
		include('header.php');
		if(isset($_POST['save']))
    {
        $services_id=$_POST['services_id'];
        $OurclientImage=$_POST['OurclientImage'];
         $Createddate=date('Y-m-d');
		//		$BlogDescription=$_POST['BlogDescription'];
		$random1 = substr(number_format(time() * rand(),0,'',''),0,10);
        $OurclientImage=$random1.'_'.$_FILES['OurclientImage']['name'];
        $p1=$_FILES['OurclientImage']['tmp_name'];
        $path="upload/OurclientImages/$OurclientImage";
        move_uploaded_file($p1,$path);
        $status=$_POST['status'];
        $result=mysqli_query($con,"insert into tblourclient(ourclient_image,status,Createddate)values('$OurclientImage','$status','$Createddate')");

        if($result)
		{
				$_SESSION['check']=1;
				echo '<script>
				window.location="ourclient_list"
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
					<h4 class="card-title" id="basic-layout-form">Add Our client Images</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" enctype="multipart/form-data" id="form_ourclientimages">
								<div class="form-group">
									<label>Ourclient Image</label>
									<!-- <label id="projectinput7" class="file center-block"> -->
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
								<button type="submit" name="save" class="btn btn-primary">
									<i class="icon-check2"></i> Add
								</button>
								<button type="button" onclick="history.back();"  name="save" class="btn btn-danger">
									Cancel
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

$("#form_ourclientimages").validate(
{
rules:{
	OurclientImage:{
	required: true,	
	},
	status:{
	required: true,	
	},
},
});
});
</script>