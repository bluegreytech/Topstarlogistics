<?php
		include('header.php');
		if(isset($_POST['save']))
    {
        $Title=$_POST['Title'];
		$LinkTitle=$_POST['LinkTitle'];
		
        $Status=$_POST['Status'];
        $CreatedOn=date('Y-m-d');
        $query="insert into tblpaps(Title,LinkTitle,Status,CreatedOn)values('$Title','$LinkTitle','$Status','$CreatedOn')";
        // echo $query;die;
        $result=mysqli_query($con,$query);
      
        if($result)
        {
							$_SESSION['check']=1;
							echo '<script>
							window.location="paps_list"
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
									}, 5000);	
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
					<h4 class="card-title" id="basic-layout-form">Add  Paps/Pars</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form  method="post" enctype="multipart/form-data" id="form_paps">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i>Paps/Pars</h4>

								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" placeholder="Title" required name="Title">
								</div>

								<div class="form-group">
									<label>Links</label>										
					                  	<input type="text" class="form-control" placeholder="Enter Url" required name="LinkTitle">
								</div>							

								<div class="form-group">
											<label>Status</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="Status" value="1" checked="" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Active</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="Status" value="0" class="custom-control-input">
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
<script>
$(document).ready(function()

{//alert('gfgf');

$("#form_paps").validate(

{

rules:{
	title:{
	required: true,
	},

	LinkTitle:{
	required: true,
	url: true
	},
},



});

});


</script>