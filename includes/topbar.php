<div class="navbar navbar-fixed-top bs-docs-nav justify-content-between" role="banner">
	<div class="container">
      <!-- Menu button for smallar screens -->
      <!-- <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			
		  </button>
		  
		</div> -->
		<!-- Navigation starts -->
    <nav>  
	      <ul class="nav navbar-nav">  
          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big ">
            <a href="#"><span class = "label label-info"><i class="fa fa-calendar"></i></span> 
            <?php date_default_timezone_set('Asia/Kuala_Lumpur'); echo date("l jS \of F Y h:i:s A");?></a>            
          </li>
          <!-- Sync to server link -->
        </ul>

        <!-- Search form -->
       
        <!-- Links -->
       <ul class="nav navbar-nav pull-right">
       <li class="dropdown pull-right">            
           <a href="#login" data-toggle="dropdown">
              <i class="fa fa-user"></i> Admin
            </a>		        
            <!-- Dropdown menu -->
           <ul class="dropdown-menu">            
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </nav> 

    </div>
	</div>
	