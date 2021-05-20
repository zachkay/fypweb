<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$csize = $_POST['drop_size'];
	$cname = $_POST['drop_name'];
	$ciz = $_POST['txt_iz'];
	$cvd = $_POST['txt_vd'];
	$cprice = $_POST['txt_price'];

	mysqli_query($con,"UPDATE cable_spec SET size_id='$csize', type_id='$cname', iz='$ciz', vd='$cvd', price='$cprice' where spec_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='cable_spec.php'</script>";   
		
?>