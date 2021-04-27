<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$cphase = $_POST['txt_phase'];
    $cvolt = $_POST['txt_volt'];

	mysqli_query($con,"UPDATE cable_phase SET phase='$cphase', volt='$cvolt' where phase_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='cable_phase.php'</script>";   
	
	
?>