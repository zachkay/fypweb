<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$csize = $_POST['drop_size'];
	$cname = $_POST['drop_name'];
	$ciz = $_POST['txt_iz'];

	mysqli_query($con,"UPDATE cable_iz SET size_id='$csize', type_id='$cname', iz='$ciz' where iz_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated item!');</script>";
	echo "<script>document.location='cable_iz.php'</script>";   
		
?>