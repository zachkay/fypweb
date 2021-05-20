<?php session_start();
if (empty($_SESSION['id'])) :
  header('Location:index.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Messages - <?php include('../includes/title.php'); ?></title>
  <?php include('../includes/links.php'); ?>

</head>

<body>

  <div>
    <?php include('../includes/topbar.php'); ?>
  </div>



  <!-- Main content starts -->

  <div class="content" style="margin-top:10px">

    <!-- Sidebar -->
    <?php include('../includes/sidebar.php'); ?>

    <!-- Sidebar ends -->

    <!-- Main bar -->
    <div class="mainbar">

      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-comments-o"></i> Feedback</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="fa fa-home"></i> Home</a>
          <!-- Divider -->
          <span class="divider">/</span>
          <a href="#" class="bread-current">Dashboard</a>
        </div>

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->



      <!-- Matter -->

      <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left"> Feedback

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
                              <th>Date Sent</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Subject</th>
                              <th>Feedback</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            include('../includes/dbcon.php');

                            $query = mysqli_query($con, "SELECT * FROM feedback ORDER BY date desc") or die(mysqli_error($con));
                            while ($row = mysqli_fetch_array($query)) {
                              $id = $row['feedback_id'];
                              $date = $row['date'];
                              $name = $row['name'];
                              $email = $row['email'];
                              $subject = $row['subject'];
                              $feedback = $row['feedback'];


                            ?>
                              <tr>
                                <td><?php echo date("F d, Y", strtotime($row['date'])); ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $subject; ?></td>
                                <td><?php echo $feedback; ?></td>
                                <td>

                                  <a href="#myModal" class="btn btn-sm btn-danger" data-target="#update<?php echo $id; ?>" data-toggle="modal">
                                    <i class="fa fa-times"></i>
                                  </a>


                                </td>
                              </tr>
                              <!-- Modal -->
                              <div id="update<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Delete Message</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body" style="height:120px">
                                      <!--start form-->
                                      <form class="form-horizontal" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <div class="alert alert-danger">
                                          Are you sure you want to delete this feedback from <?php echo $name; ?>?
                                        </div>
                                        <!-- Buttons -->
                                        <div class="form-group">
                                          <!-- Buttons -->
                                          <center>
                                            <button type="submit" class="btn btn-danger btn-sm" name="del">Delete</button>
                                            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal" aria-hidden="true">Close</button>
                                          </center>
                                        </div>
                                      </form>
                                      <!--end form-->
                                    </div>

                                  </div>
                                  <!--modal content-->
                                </div>
                                <!--modal dialog-->
                              </div>
                              <!--end modal-->
                            <?php } ?>
                          </tbody>
                          <tfoot>

                          </tfoot>
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
  <?php include('../includes/footer.php'); ?>

  <!-- Footer ends -->

  <!-- Scroll to top -->
  <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>
  <?php
  if (isset($_POST['del'])) {
    $id = $_POST['id'];

    // sending query
    mysqli_query($con, "delete from feedback WHERE feedback_id='$id'")
      or die(mysqli_error($con));
    echo "<script>document.location='feedback.php'</script>";
  }
  ?>
  <!-- JS -->
  <?php include('../includes/js.php'); ?>

</body>

</html>