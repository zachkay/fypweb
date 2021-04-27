<div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="open"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
          </li>
          
          <li class="has_sub">
			<a href="#"><i class="fa fa-code-fork"></i> Cable Data  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="cable_type.php">Cable Type</a></li>
              <li><a href="cable_iz.php">Cable Iz</a></li>
              <li><a href="cable_vd.php">Cable Vd</a></li>
              <li><a href="cable_price.php">Cable Price</a></li> 
              <li><a href="cable_size.php">Cable Size</a></li>
              <li><a href="cable_phase.php">Cable Phase</a></li>
              <li><a href="breaker_size.php">Breaker Size</a></li>
            </ul>
          </li>

          <li class="has_sub">
          <a href="#"><i class="fa fa-bar-chart-o"></i> Report  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="#reserve" data-toggle="modal">Cable Data</a></li>
              <li><a href="#sales" data-toggle="modal">Calculation Data</a></li>
            </ul>
          </li>	

          <li class="has_sub">
          <a href="#"><i class="fa fa-users"></i> User Details <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="#reserv" data-toggle="modal">User</a></li>
              <li><a href="#sale" data-toggle="modal">Admin</a></li>
            </ul>
          </li>
          <li><a href="messages.php"><i class="fa fa-envelope"></i> Feedback</a></li> 
            
		  	  
          <!---<li><a href="backup.php"><i class="fa fa-bar-chart-o"></i> Backup/Restore</a></li>--->
        </ul>
    </div>
    <?php include 'report_modal.php'; ?>
    <?php include 'report_sales.php'; ?>