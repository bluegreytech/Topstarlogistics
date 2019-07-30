<?php 
    error_reporting(0);
    include('header.php');
   
    if(isset($_GET['OurclientId']))
    {
        
        $OurclientId=$_GET['OurclientId'];
        $queryselect=mysqli_query($con,"select * from tblourclient where ourclient_id='$OurclientId'");
        $r1=mysqli_fetch_array($queryselect);
        $OurclientImage=$r1['ourclient_image'];
        unlink("upload/OurclientImages/".$OurclientImage);
        $querydelete=mysqli_query($con,"delete from tblourclient where ourclient_id='$OurclientId'");      
        if($querydelete)
        {
            $_SESSION['check']=2;
            echo '<script>
            window.location="ourclient_list"
           </script>';
        }
        else
        {
            $_SESSION['check']=4;
            echo '<script>
            window.location="ourclient_list"
           </script>';
        }	
    }


?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-body"><!-- Basic Tables start -->
        <center><div class="alert alert-danger" id="rec_not_deleted" style="width:100%;display:none; margin:0px 0px 10px 0px"><strong>Record has been deleted successfully! </strong> 
            </div></center> 
        <center><div class="alert alert-success" id="rec_deleted" style="width:100%;display:none; margin:0px 0px 10px 0px"><strong>Record has been deleted successfully! </strong> 
            </div></center>  
        <center><div class="alert alert-success" id="rec_updated" style="width:100%;display:none; margin:0px 0px 10px 0px">
									<strong>Record has been updated successfully!</strong>
								</div>	  
						</center>
        <center><div class="alert alert-success" id="insert_rec" style="width:100%;display:none; margin:0px 0px 10px 0px">
									<strong>Record has been  inserted successfully!</strong>
								</div>	  
						</center>
<!-- Table head options start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List of Our Client Gallery
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                 <a  href="add_ourclient" class="btn btn-primary" style="float:right;"> Add Images</a>
              
                </h4>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sr No</th>                      
                        <th>Image</th>                              
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php   
                             $i=1;
                            $query="select * from tblourclient ORDER BY ourclient_id DESC";
                            $res=mysqli_query($con,$query);
                            $rowcount=mysqli_num_rows($res);
                            if($rowcount>0){
                        ?>
                         <tr>
                         <?php

                            while($row=mysqli_fetch_array($res))
                            {                               

                            ?>
                            <td><?php echo $i ?></td>                          
                            <td>
                                        <?php
                                        if($row['ourclient_image']=='')
                                        {
                                            echo "N/A";
                                        }
                                        else
                                        {
                                            ?>
                                            <img src="upload/OurclientImages/<?php echo $row['ourclient_image']; ?>" alt="" height="70" width="70">
                                            <?php
                                        }
                                        ?>
                                    </td>
                            <td><?php 
                            if($row['status']==1)
                            {
                                echo "Active";
                            }
                            else
                            {
                                echo "Inactive";
                            }
                            ?></td>
                            <td>
                                <a href="edit_ourclient?OurclientId=<?php echo $row['ourclient_id']; ?>"><i class="ficon icon-pencil2"></i></a>
                                <a title="Delete" data-toggle="modal" data-target="#myModal" onClick="delete1(<?php echo $row['ourclient_id']; ?>)"> <i class="ficon icon-bin"></i></a>
                            </td>
                         </tr>      
                            <?php
                                    $i++;
                                    }
                                 } 
                                ?>  
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document" style="margin:20% auto;">
        <div class="modal-content">
            <div class="modal-body" >
              	<p>Are you sure you want to delete this record?</p>
              </div>
              <div class="modal-footer text-center">
              	<!--<button type="button" class="next_btn" id="yes_btn" name="update">Yes</button>-->
				<center><button type="button" class="btn-md btn-icon btn-link p4" id="yes_btn"><a href="" id="deleteYes" value="Yes"  class="btn btn-success">Yes</a></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button></center>
            </div>
        </div>
    </div>
</div>
<!-- Table head options end -->



        </div>
      </div>
    </div>

<?php include('footer.php');?>
<SCRIPT>
function delete1(OurclientId)
{
	$('#deleteYes').attr('href','ourclient_list?OurclientId='+OurclientId);	
}

$(document).ready(function() {
    $('#example').DataTable( {
       
    });
});

<?php
        if(isset($_SESSION['check']))
        {
    ?>
	var check = <?php echo $_SESSION['check'];?> 					
    <?php
            unset($_SESSION['check']);
    }
    ?>
	$(document).ready(function () {
	if(check==1) {
	$('#insert_rec').css('display','block');
		setTimeout(function(){
		    $('#insert_rec').css('display','none');
            }, 5000);
		}
	});


    <?php
        if(isset($_SESSION['check']))
        {
    ?>
	var check = <?php echo $_SESSION['check'];?> 					
    <?php
            unset($_SESSION['check']);
    }
    ?>
	$(document).ready(function () {
	if(check==2) {
	$('#rec_deleted').css('display','block');
		setTimeout(function(){
		    $('#rec_deleted').css('display','none');
            }, 5000);
		}
	});

    <?php
	if(isset($_SESSION['check']))
	{
    ?>
        var check = <?php echo $_SESSION['check'];?> 					
    <?php
		unset($_SESSION['check']);
    }
    ?>
	$(document).ready(function () {
	if(check==3) {
	$('#rec_updated').css('display','block');
		setTimeout(function(){
		    $('#rec_updated').css('display','none');
            }, 5000);
		}
	});

    <?php
	if(isset($_SESSION['check']))
	{
    ?>
        var check = <?php echo $_SESSION['check'];?> 					
    <?php
		unset($_SESSION['check']);
    }
    ?>
	$(document).ready(function () {
	if(check==4) {
	$('#rec_not_deleted').css('display','block');
		setTimeout(function(){
		    $('#rec_not_deleted').css('display','none');
            }, 5000);
		}
	});

</script>