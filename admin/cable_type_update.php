<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$cname = $_POST['txt_name'];
	$ccore = $_POST['txt_core'];
	$tab_ref = $_POST['txt_tabref'];
	$inst_type = $_POST['txt_instype'];
	$cphase = $_POST['drop_phase'];

	mysqli_query($con,"UPDATE cable_type SET cable_name='$cname', cable_core='$ccore', table_reference='$tab_ref', installation_type='$inst_type', phase_id='$cphase' where type_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='cable_type.php'</script>";   
	
	
?>