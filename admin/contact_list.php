<?php 
    error_reporting(0);
    include('header.php');

?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-body"><!-- Basic Tables start -->
      
<!-- Table head options end -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List of Contact </h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>First Name</th>
                        <th>Email Address</th>
                        <th>Contact Number</th>
                        <th>Website</th>
                        <th>Message</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php   
                             $i=1;
                            $query="select * from tblcontact ORDER BY UserId DESC";
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
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['EmailAddress']; ?></td>
                            <td><?php echo $row['ContactNumber']; ?></td>
                            <td><?php echo $row['Website']; ?></td>
                            <td><?php echo $row['Message']; ?></td>
                           
                         
                     
                         </tr>      
                            <?php
                               $i++;
                                    } } 
                                ?>  
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