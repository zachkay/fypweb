<?php include 'header.php';?>

<body class = "admin_body" style = "background-color:#808080 !important; background:none;">
<!-- <div>
<center>
<h1 style = "color:white; font-size:55px">Adminstrator System</h1>
</center>
</div> -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    
    <a style = "color:white; font-family: Lucida Console, monospace" href="../admin/index.php">BuDEE</a>
    
  </div>
  <!-- User name -->
  <!-- <div class="lockscreen-name">Administrator</div> -->

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="../img/BuDEE.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action = "login.php" method = "POST">
      <div class="input-group">
        <input type="text" name = "username" class="form-control" placeholder="Username">
        <input type="password" name = "password" class="form-control" placeholder="Password">

        <div class="input-group-btn">
          <button name = "login"class="btn"><i class="fa fa-arrow-right "></i></button>
        </div>
      </div>
    </form>
	
	
	
    <!-- /.lockscreen credentials -->

  </div>
</div>

<!-- JS -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>