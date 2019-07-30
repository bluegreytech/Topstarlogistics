<?php
include('header.php');
if(isset($_POST['save']))
{
		$Email=$_POST['Email'];
		$Phone=$_POST['Phone'];
	    $Timeing=$_POST['Timeing'];
	    $Timeing2=$_POST['Timeing2'];
	    $Docks_hours=$_POST['Docks_hours'];
		$Address=$_POST['Address'];		
		$query="insert into tblsitesetting(Email,Phone,Timeing,Timeing2,Docks_hours,Address)values('$Email','$Phone','$Timeing','$Timeing2','$Docks_hours','$Address')";
		//echo $query;die;
		$result=mysqli_query($con,$query);

		if($result)
		{
		$_SESSION['check']=1;
		echo '<script>
			window.location="site_setting";
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
}elseif(isset($_POST['update'])){
	//echo "gfgf";die;
		$siteid=$_POST['siteid'];
		$Email=$_POST['Email'];
		$Phone=$_POST['Phone'];
	    $Timeing=$_POST['Timeing'];
	    $Timeing2=$_POST['Timeing2'];
	    $Docks_hours=$_POST['Docks_hours'];
		$Address=$_POST['Address'];	
		$updateData="update tblsitesetting set Email='$Email',Phone='$Phone',Timeing='$Timeing',Timeing2='$Timeing2',Docks_hours='$Docks_hours',Address='$Address' where siteid=".$siteid;	
		//$query="update set tblsitesetting(Email,Phone,Timeing,Address)values('$Email','$Phone','$Timeing','$Address')";
		//echo $updateData;die;
		$result=mysqli_query($con,$updateData);

		if($result)
		{
		$_SESSION['check']=1;
		echo '<script>
			window.location="site_setting";
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
		</script> ?> 


<?php } }

	$query="select * from tblsitesetting ORDER BY siteid DESC";
	$res=mysqli_query($con,$query);
	
	$rowcount=mysqli_num_rows($res);
	$resdata= array();
	while ($row=mysqli_fetch_assoc($res)) {
		//echo "<pre>";print_r($row['Email']);
		//echo $row['Email'];
		$resdata['Siteid']=$row['Siteid'];
		$resdata['Email']=$row['Email'];
	    $resdata['Phone']=$row['Phone']; 
	    $resdata['Timeing']=$row['Timeing'];
	    $resdata['Timeing2']=$row['Timeing2'];
	    $resdata['Docks_hours']=$row['Docks_hours'];
	    $resdata['Address']=$row['Address'];
	}
	//echo "<pre>";print_r($resdata['Siteid']);die;

?>

  <div class="app-content content container-fluid">
    <div class="content-wrapper">
        
      <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Site Setting</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form" method="post" enctype="multipart/form-data" id="form_sitesetting">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4>

								<div class="form-group">
									<label>Email</label>
									
										<input type="hidden" class="form-control" placeholder="siteid"  name="siteid" value="<?php echo $resdata['Siteid']; ?>">
									<input type="text" class="form-control" placeholder="Email"  name="Email" value="<?php echo $resdata['Email']; ?>">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control" placeholder="Phone"  name="Phone"  value="<?php echo $resdata['Phone']; ?>">
								</div>
								<div class="form-group">
									<label>Timeing 1</label>
									<input type="text" class="form-control" placeholder="Timeing"  name="Timeing" value="<?php echo $resdata['Timeing']; ?>">
								</div>
								<div class="form-group">
									<label>Timeing 2</label>
									<input type="text" class="form-control" placeholder="Timeing 2"  name="Timeing2" value="<?php echo $resdata['Timeing2']; ?>">
								</div>
								<div class="form-group">
									<label>Docks Hours</label>
									<input type="text" class="form-control" placeholder="Dock hours"  name="Docks_hours" value="<?php echo $resdata['Docks_hours']; ?>">
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea name="Address" id="Address" class="form-control"><?php echo $resdata['Address'];?></textarea>
								</div>

							</div>

							<div class="form-actions">
								<?php if($resdata['Siteid']!=''){ ?> 
									<button type="submit" name="update" class="btn btn-primary">
									<i class="icon-check2"></i>Update
								</button>
								<?php }else{ ?>
								<button type="submit" name="save" class="btn btn-primary">
									<i class="icon-check2"></i>Add
								</button>
							<?php } ?>
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

$("#form_sitesetting").validate(
{
rules:{
	Email:{
		required: true,
		email:true,
	},
	Phone:{
		required: true,	
		//digits:true,
		minlength:10,
		maxlength:20,
	},
	Timeing:{
		required: true,			
	},
	Address:{
		required: true,	
		minlength:10,
		maxlength:100,		
	},

	
},
});
});
</script>