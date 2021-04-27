<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$csize = $_POST['txt_size'];

	mysqli_query($con,"UPDATE cable_size SET size='$csize' where size_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='cable_size.php'</script>";   
	
	
?>