<?php 

include('../includes/dbcon.php');
	
$id = $_POST['id'];
$csize = $_POST['drop_size'];
$cname = $_POST['drop_name'];
$cvd = $_POST['txt_vd'];

	$result = mysqli_query($con,"SELECT * FROM cable_vd where size_id='$csize' AND type_id='$cname' AND vd='$cvd'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO cable_vd(size_id,type_id,vd) 
				VALUES('$csize','$cname','$cvd')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='cable_vd.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='cable_vd.php'</script>";  
		}	
?>