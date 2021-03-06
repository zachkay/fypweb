<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Breaker Size - <?php include('../includes/title.php');?></title>
  <?php include('../includes/links.php');?>
  
</head>

<body>

<div>    
      <?php include('../includes/topbar.php');?>
</div>
  <!-- Main content starts -->

<div class="content">

    <!-- Sidebar -->
    <?php include('../includes/sidebar.php');?>

    <!-- Sidebar ends -->

        <!-- Main bar -->
    <div class="mainbar">
      
      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-code-fork"></i> Cable Data</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="dashboard.php"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Cable Data</a>
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Breaker Size</a>
        </div>

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->


      <!-- Page heading ends -->



       <!-- Matter -->

      <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left"> Breaker Size  &nbsp
                  <a href="#addModal" class="btn btn-dark btn-sm" data-toggle="modal">Add New Item</a>
                  </div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
              <!-- Table Page -->
              <div class="page-tables">
                <!-- Table -->
                <div class="table-responsive">
                  <table cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                    <thead>
                      <tr>
                        <th>Breaker Id</th>
                        <th>Breaker Size</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../includes/dbcon.php');

    $query=mysqli_query($con,"SELECT * FROM breaker_size")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['breaker_id'];
        $bsize=$row['size'];
?>                      
                      <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $bsize;?></td>
                        <td>
                      
                              <a href="#update" class="btn btn-warning btn-sm" data-target="#update<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="#myModal" class="btn btn-danger btn-sm" data-target="#delete<?php echo $id;?>" data-toggle="modal">
                                <i class="fa fa-times"></i>
                              </a>
                          
                        </td>
                      </tr> 

<!-- Modal -->
<div id="update<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Update Item Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>              
            </div>
            <div class="modal-body" style="height:160px">
              
            <!--start form-->
              <form class="form-horizontal" method="post" action="breaker_size_update.php" enctype='multipart/form-data'>
                  <!-- Title -->
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Breaker Size</label>
                      <div class="col-lg-12"> 
                        <input type="number" class="form-control form-control-sm" name="txt_breaker" id="title" value="<?php echo $bsize;?>" placeholder="Enter Breaker Size" required>
                      </div>
                  </div>
                              
                  <!-- Buttons -->
                  <div class="form-group">
                      <center>
                        <br><button type="submit" class="btn btn-sm btn-primary" name="update">Update</button>
                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal" aria-hidden="true">Close</button>
                      </center>
                  </div>  
              </form>
              <!--end form-->
            </div>
           
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->   

<!-- Modal -->
<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                
              <h4 class="modal-title">Add New Item</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
            </div>
            <div class="modal-body" style="height:160px">
              
            <!--start form-->
            <form class="form-horizontal" method="post" action="breaker_size_save.php" enctype='multipart/form-data'>
                  
                  <!-- Title -->
                  <div class="form-group">
                      <label class="control-label col-lg-4" for="title">Breaker Size</label>
                      <div class="col-lg-12"> 
                        <input type="number" class="form-control form-control-sm" name="txt_breaker" id="title" placeholder="Enter Breaker Size" required>
                      </div>
                  </div>
                              
                  <!-- Buttons -->
                  <div class="form-group">
                      <center>
                        <br><button type="submit" class="btn btn-sm btn-success">Save</button>
                        <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal" aria-hidden="true">Close</button>
                      </center>
                  </div>  
              </form>
              <!--end form-->
            </div>
            
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal--> 

<!-- Modal -->
<div id="delete<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                
              <h4 class="modal-title">Delete Item</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
            </div>
            <div class="modal-body" style="height:120px">
              <!--start form-->
              <form class="form-horizontal" method="post">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
                  <div class="alert alert-danger">
                      Are you sure you want to delete this item, <?php echo "Breaker Size= ",$bsize;?>?
                    </div>                     
                  <!-- Buttons -->
                  <div class="form-group">
                      <!-- Buttons -->
                      <center>
                        <button type="submit" class="btn btn-sm btn-danger" name="del">Delete</button>
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
                      </center>
                  </div>
              </form>
              <!--end form-->
            </div>
           
        </div><!--modal content-->
    </div><!--modal dialog-->
</div>
<!--end modal-->

<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

  // sending query
  mysqli_query($con,"DELETE FROM breaker_size WHERE breaker_id='$id'")
  or die(mysqli_error($con));
  echo "<script>document.location='breaker_size.php'</script>";
    }
?>

<?php }?>
                    
                  </table>
                  <div class="clearfix"></div>
                </div>
                </div>
              </div>

          
                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  
              
            </div>
          </div>
        </div>
      </div>

    <!-- Matter ends -->


    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<?php include('../includes/footer.php');?>  

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- JS -->
<?php include('../includes/js.php');?>  

</body>
</html>