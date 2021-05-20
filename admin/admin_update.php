<?php 
session_start();
include('../includes/dbcon.php');
	
	$id = $_POST['id'];
	$fname = $_POST['txt_fname'];
    $uname = $_POST['txt_uname'];
    $pwd = $_POST['txt_pwd'];

	mysqli_query($con,"UPDATE admin SET fullname='$fname', username='$uname', password='$pwd' where admin_id='$id'") or die(mysqli_error($con));
	echo "<script type='text/javascript'>alert('Successfully updated admin!');</script>";
	echo "<script>document.location='admin.php'</script>";   
	
	
?>