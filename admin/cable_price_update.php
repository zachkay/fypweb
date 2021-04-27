<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$csize = $_POST['drop_size'];
	$cname = $_POST['drop_name'];
	$cprice = $_POST['txt_price'];

	mysqli_query($con,"UPDATE cable_price SET size_id='$csize', type_id='$cname', price='$cprice' where price_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='cable_price.php'</script>";   
		
?>