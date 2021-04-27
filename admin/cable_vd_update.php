<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$csize = $_POST['drop_size'];
	$cname = $_POST['drop_name'];
	$cvd = $_POST['txt_vd'];

	mysqli_query($con,"UPDATE cable_vd SET size_id='$csize', type_id='$cname', vd='$cvd' where vd_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='cable_vd.php'</script>";   
		
?>