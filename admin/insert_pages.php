<?php
		include('header.php');
		if(isset($_POST['save']))
    {
        $BlogTitle=$_POST['BlogTitle'];
				$BlogDescription=$_POST['BlogDescription'];
				$random1 = substr(number_format(time() * rand(),0,'',''),0,10);
        $BlogImage=$random1.'_'.$_FILES['BlogImage']['name'];
        $p1=$_FILES['BlogImage']['tmp_name'];
        $path="upload/BlogImages/$BlogImage";
        move_uploaded_file($p1,$path);
        $IsActive=$_POST['IsActive'];
        $result=mysql_query("insert into tblblogs(BlogTitle,BlogDescription,BlogImage,IsActive)values('$BlogTitle','$BlogDescription','$BlogImage','$IsActive')");
        if($result)
        {
							$_SESSION['check']=1;
							echo '<script>
							 			 window.location="blog_list.php"
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
					<h4 class="card-title" id="basic-layout-form">Add  Paps/pares</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" enctype="multipart/form-data">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i>  Paps/pares</h4>

								<div class="form-group">
									<label>Tilte</label>
									<input type="text" class="form-control" placeholder="Tilte" required name="BlogTitle">
								</div>

								<div class="form-group">
									<label>Links</label>										
					                  	<input type="text" class="form-control" placeholder="Links" required name="links">
								</div>

								

								<div class="form-group">
											<label>Status</label>
											<div class="input-group">
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="IsActive" value="1" checked="" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Active</span>
												</label>
												<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="IsActive" value="0" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">Deactive</span>
												</label>
											</div>
								</div>

							</div>

							<div class="form-actions">
								<button type="submit" name="save" class="btn btn-primary">
									<i class="icon-check2"></i> Insert
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

	bkLib.onDomLoaded(function () {

	new nicEditor({fullPanel: true, maxHeight: 100}).panelInstance('area1');
	});

</script>