<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$bsize = $_POST['txt_breaker'];

	mysqli_query($con,"UPDATE breaker_size SET size='$bsize' where breaker_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='breaker_size.php'</script>";   
	
	
?>