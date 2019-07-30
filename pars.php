<?php include 'header.php';?>

	<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
		<div class="banner-text">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="border-title border-left">Pars/Paps</h1>
	        				<ol class="breadcrumb">
	        					<li><a href="index.php">Home</a></li>
	        					<li>Pars/Paps</li>
	        				</ol>
	        			</div>
	        		</div><!-- Col end -->
	        	</div><!-- Row end -->
       	</div><!-- Container end -->
    	</div><!-- Banner text end -->
	</div><!-- Banner area end --> 

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 sidebar-right">
						
						<div class="widget recent-posts par-link">
							<h3 class="widget-title">Links</h3>
							 <table id="example" class="table" cellspacing="0" width="100%">
							 <thead>
									<tr>
           							    <th></th>
           							</tr>
           						</thead>
								<?php   
									
									$query="select * from tblpaps ORDER BY papsid  DESC";
									$res=mysqli_query($con,$query);
									$rowcount=mysqli_num_rows($res);
									if($rowcount>0){
								?>	
								<?php
									while($row=mysqli_fetch_array($res))
									{
								?>
								<tr>
									<td>
										<a data-toggle="modal" data-target="#myModal<?php echo $row['PapsId']; ?>"><i class="fa fa-hand-o-right" ></i> <?php echo $row['Title']; ?></a>
		                   				<div class="clearfix"></div>
									</td>
								</tr>
								
								

							
								
								
		               
		                <div id="myModal<?php echo $row['PapsId']; ?>" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
						  <div class="modal-dialog"  style="width:90%;">

							     Modal content
							     <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal">&times;</button>
							        <iframe src="<?php echo $row['LinkTitle']; ?>" name="myFrame" style="width: 100%;height:500px;"></iframe>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							      </div>
							    </div>

						  </div>
						</div> 
						
							</tr>
		               	  
		                <?php
							
							}
						} 
						?>
						 </table>
		               	</div> 
					
							
						<!-- Modal -->
						
						
						<!--Modal End-->

				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget recent-posts">
							<h3 class="widget-title">Useful Links</h3>
							<ul class="unstyled clearfix">
								<?php   
									$i=1;
									$query="select * from tblpars ORDER BY parsid  DESC";
									$res=mysqli_query($con,$query);
									$rowcount=mysqli_num_rows($res);
									if($rowcount>0){
								?>	
									<?php

									while($row=mysqli_fetch_array($res))
									{
									?>
									 <li>
											<a href="<?php echo $row['Links']?>" target="_blank"><i class="fa fa-hand-o-right"></i><?php echo $row['Title']?></a>
											<div class="clearfix"></div>
										</li><!-- 1st post end-->

										<?php
												$i++;
												}
											} 
										?>
		                  
		         				 </ul>
							
						</div><!-- Recent post end -->					
					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->
			</div><!-- Main row end -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
<?php include 'footer.php';?>
<script type="text/javascript">
	$(document).ready(function() {
		//alert();
    $('#example').DataTable( {
     "bFilter": false, 
     "pageLength": 100, 
      "bInfo": false, 
    
    });
});
</script>