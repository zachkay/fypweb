<?php 

include('../includes/dbcon.php');
	
// $id = $_POST['id'];
$fname = $_POST['txt_fname'];
$uname = $_POST['txt_uname'];
$pwd = $_POST['txt_pwd'];

	$result = mysqli_query($con,"SELECT * FROM admin where fullname='$fname' AND username='$uname' "); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO admin(fullname,username,password) 
				VALUES('$fname','$uname','$pwd')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new admin!');</script>";
				echo "<script>document.location='admin.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Admin already added!');</script>";
				echo "<script>document.location='admin.php'</script>";  
		}	
?>