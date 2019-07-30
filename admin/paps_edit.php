<?php
//echo "dsds";die;
include('header.php');
   if(isset($_GET['PapsId']))
   {
       $PapsId=$_GET['PapsId'];
       $getData=mysqli_query($con,"select * from tblpaps where PapsId='$PapsId'");
       $PapsData=mysqli_fetch_assoc($getData);
       $PapsData['Status'];

       if(isset($_POST['update']))
       {
          $Title=$_POST['Title'];
					$LinkTitle=$_POST['LinkTitle'];
					$Status=$_POST['Status'];
				
       
          
              $updateData="update tblpaps set Title='$Title',LinkTitle='$LinkTitle',Status='$Status' where PapsId='$PapsId'";
		          $result=mysqli_query($con,$updateData);
		          if($result)
		          {

								$_SESSION['check']=3;
								echo '<script>
								window.location="paps_list"
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
							 }, 1000);	
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
					<h4 class="card-title" id="basic-layout-form">Add  Paps/Pars</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form  method="post" enctype="multipart/form-data" id="form_paps">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i>  Paps/Pars</h4>

								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" value="<?php echo $PapsData['Title'];?>" placeholder="Title" required name="Title">
								</div>

								<div class="form-group">
									<label>Links</label>										
					                  	<input type="text" class="form-control" placeholder="Links" required name="LinkTitle" value="<?php echo $PapsData['LinkTitle'];?>">
								</div>

								

								<div class="form-group">
											<label>Status</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="Status" value="1" checked="" 
													<?php
													if($PapsData['Status']=='1')
													{
														echo "checked";
													}
													?>
													class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Active</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="Status" value="0"
													<?php
													if($PapsData['Status']=='0')
													{
														echo "checked";
													}
													?>
													 class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Inactive</span>
												</label>
											</div>
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