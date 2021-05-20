<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
<?php include('../includes/links.php');?>
<?php include('../includes/js.php');?>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid whitesmoke;
  border-bottom: 16px solid blue;
  border-left: 16px solid whitesmoke;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  margin-top: 200px;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body style = "background-color:#808080 !important; background:none;">
<div style="width:100%; text-align:center; vertical-align:bottom">
		<div class="loader"></div>
<?php

	session_destroy();
	
 echo '<meta http-equiv="refresh" content="2;url=index.php">';
 
 echo'<h3 style=color:white;>Logging out... Please wait...!</h3>';
?>
</div>
</body>
</html>
