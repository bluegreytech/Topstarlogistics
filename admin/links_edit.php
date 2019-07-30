<?php
//echo "dsds";die;
include('header.php');
   if(isset($_GET['ParsId']))
   {
       $ParsId=$_GET['ParsId'];
       $getData=mysqli_query($con,"select * from tblpars where ParsId='$ParsId'");
       $parData=mysqli_fetch_assoc($getData);
       

       if(isset($_POST['update']))
       {
          $Title=$_POST['Title'];
					$LinkTitle=$_POST['useLinks'];
					$UpdatedOn=date('Y-m-d');
              $updateData="update tblpars set Title='$Title',Links='$LinkTitle',UpdatedOn='$UpdatedOn' where ParsId='$ParsId'";
							$result=mysqli_query($con,$updateData);
							//	echo "<pre>";print_r($updateData);die;
		          if($result)
		          {

										$_SESSION['check']=3;
										echo '<script>
											window.location="link_list"
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
					<h4 class="card-title" id="basic-layout-form">Add  Paps/pares</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form  method="post" enctype="multipart/form-data" id="form_paps">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i>  Paps/pares</h4>

								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" value="<?php echo $parData['Title'];?>" placeholder="Title" required name="Title">
								</div>

								<div class="form-group">
									<label>Links</label>										
					                  	<input type="text" class="form-control" placeholder="Links" required name="useLinks" value="<?php echo $parData['Links'];?>">
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