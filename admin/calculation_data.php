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
  <title>Calculation Data - <?php include('../includes/title.php');?></title>
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
        <h2 class="pull-left"><i class="fa fa-bar-chart-o"></i> Calculation Data</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="dashboard.php"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Report</a>
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Calculation Data</a>
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
                  <div class="pull-left"> Calculation Data 
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
						            <th>Date</th>
                        <th>User ID</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Estimated Distance</th>
                        <th>Cable Type</th>
                        <th>Cable Vd (mV)</th>
                        <th>Cable Iz (A)</th>
                        <th>Calculated VD (V)</th>
                        <th>Calculated VD %</th>
                        <th>Allowed VD %</th>
                        <th>Cable Quantity</th>
                        <th>Cable Price (RM)</th>
                        <th>Overall Price (RM)</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../includes/dbcon.php');

    $query=mysqli_query($con,"SELECT * FROM calculation_data")or die(mysqli_error($con));
      while ($row=mysqli_fetch_array($query)){
        $id=$row['data_id'];
        $u_id=$row['user_id'];
        $date=$row['date'];
        $locA=$row['loc_a'];
        $locB=$row['loc_b'];
        $estDist=$row['est_dist'];
        $ctype=$row['c_type'];
        $cvd=$row['c_vd'];
        $ciz=$row['c_iz'];
        $calcVd=$row['calc_vd'];
        $calcVdPercent=$row['calc_vd_percent'];
        $allowedVd=$row['allowed_vd'];
        $cqty=$row['c_qty'];
        $cprice=$row['c_price'];
        $oprice=$row['o_price'];
?>                      
                      <tr>						    
                        <td><?php echo $date;?></td>
                        <td><?php echo $u_id;?></td>
                        <td><?php echo $locA;?></td>
                        <td><?php echo $locB;?></td>
                        <td><?php echo $estDist;?></td>
                        <td><?php echo $ctype;?></td>
                        <td><?php echo $cvd;?></td>
                        <td><?php echo $ciz;?></td>
                        <td><?php echo $calcVd;?></td>
                        <td><?php echo $calcVdPercent;?></td>
                        <td><?php echo $allowedVd;?></td>
                        <td><?php echo $cqty;?></td>
                        <td><?php echo $cprice;?></td>
                        <td><?php echo $oprice;?></td>
                      </tr> 

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