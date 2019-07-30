<?php 
    error_reporting(0);
    include('header.php');
   
    if(isset($_GET['ParsId']))
    {
        
        $ParsId=$_GET['ParsId'];
        $querydelete=mysqli_query($con,"delete from tblpars where ParsId='$ParsId'");
        $queryselect=mysqli_query($con,"select * from tblpars where ParsId='$ParsId'");
        $r1=mysqli_fetch_array($queryselect);
        
        if($querydelete)
        {
            $_SESSION['check']=2;
            echo '<script>
            window.location="link_list"
           </script>';
        }
        else
        {
            $_SESSION['check']=4;
            echo '<script>
            window.location="link_list"
           </script>';
        }	
    }


?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-body"><!-- Basic Tables start -->
        <center><div class="alert alert-danger" id="rec_not_deleted" style="width:100%;display:none; margin:0px 0px 10px 0px"><strong>Your record was deleted successfully! </strong> 
            </div></center> 
        <center><div class="alert alert-success" id="rec_deleted" style="width:100%;display:none; margin:0px 0px 10px 0px"><strong>Your record was deleted successfully! </strong> 
            </div></center>  
        <center><div class="alert alert-success" id="rec_updated" style="width:100%;display:none; margin:0px 0px 10px 0px">
									<strong>Record has been updated successfully!</strong>
								</div>	  
						</center>
        <center><div class="alert alert-success" id="insert_rec" style="width:100%;display:none; margin:0px 0px 10px 0px">
									<strong>Record has been inserted successfully!</strong>
								</div>	  
						</center>
<!-- Table head options start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List of Useful links
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <a  href="link_insert" class="btn btn-primary" style="float:right;"> Add Link</a>
                </h4>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="example" class="table display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>Links</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php   
                             $i=1;
                            $query="select * from tblpars ORDER BY parsid  DESC";
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
                            <td><?php echo $row['Title']; ?></td>
                            <td><?php echo $row['Links']; ?></td>
                            
                           
                            <td>
                                <a href="links_edit.php?ParsId=<?php echo $row['ParsId']; ?>"><i class="ficon icon-pencil2"></i></a>
                                <a title="Delete" data-toggle="modal" data-target="#myModal" onClick="delete1(<?php echo $row['ParsId']; ?>)"> <i class="ficon icon-bin"></i></a>
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
function delete1(ParsId)
{
	$('#deleteYes').attr('href','link_list?ParsId='+ParsId);	
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