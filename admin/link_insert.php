<?php
		include('header.php');
		if(isset($_POST['save']))
    {
				$title=$_POST['Title'];
				$link=$_POST['useLink'];
				$CreatedOn=date('Y-m-d');
			//$BlogDescription=$_POST['BlogDescription'];
				$query="insert into tblpars(Title,Links,CreatedOn)values('$title','$link','$CreatedOn')";
			//	echo "<pre>";print_r($query);die;
				$result=mysqli_query($con,$query);
			//echo "<pre>";print_r($result);die;
        if($result)
        {
							$_SESSION['check']=1;
							echo '<script>
							 			 window.location="link_list"
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
					<h4 class="card-title" id="basic-layout-form">Add useful link </h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" enctype="multipart/form-data" id="form_pars">
							<!-- <div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>

								<div class="form-group">
									<label>Blog Tilte</label>
									<input type="text" class="form-control" placeholder="Blog Tilte" required name="AboutDescriotion">
								</div> -->

								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" placeholder="Title" name="Title">
								</div>
								<div class="form-group">
									<label>Link</label>
									<input type="text" class="form-control" placeholder="Link" name="useLink">
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

$("#form_pars").validate(
{
rules:{
	Title:{
	required: true,
	},
	useLink:{
	required: true,
	url: true
	},
},
});
});
</script>