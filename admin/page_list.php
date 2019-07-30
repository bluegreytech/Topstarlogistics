<?php 
    error_reporting(0);
    include('header.php');
    if(isset($_GET['BlogId']))
    {
        $BlogId=$_GET['BlogId'];
        $queryselect=mysqli_query($con,"select * from tblblogs where BlogId='$BlogId'")or die(mysql_error());
        $r1=mysqli_fetch_array($queryselect);
        $BlogImage=$r1['BlogImage'];
        $querydelete=mysqli_query($con,"delete from tblblogs where BlogId='$BlogId'")or die(mysql_error());
        unlink("upload/BlogImages/".$r1['BlogImage']);
        if($querydelete)
        {
            $_SESSION['check']=2;
            echo '<script>
            window.location="blog_list.php"
           </script>';
        }
        else
        {
            $_SESSION['check']=4;
            echo '<script>
            window.location="blog_list.php"
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
									<strong>Your record was updated successfully!</strong>
								</div>	  
						</center>
        <center><div class="alert alert-success" id="insert_rec" style="width:100%;display:none; margin:0px 0px 10px 0px">
									<strong>Your record was inserted successfully!</strong>
								</div>	  
						</center>
<!-- Table head options start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List of Pages</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Page Title</th>                              
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                </div>
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
    $(document).ready(function() {
    $('#example').DataTable( {
       
    } );
} );
</SCRIPT>