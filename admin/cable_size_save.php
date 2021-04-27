<?php 

include('../includes/dbcon.php');
	
$id = $_POST['id'];
$csize = $_POST['txt_size'];

	$result = mysqli_query($con,"SELECT * FROM cable_size where size='$csize'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO cable_size(size) 
				VALUES('$csize')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='cable_size.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='cable_size.php'</script>";  
		}	
?>