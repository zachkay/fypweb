<?php 

include('../includes/dbcon.php');
	
$id = $_POST['id'];
$csize = $_POST['drop_size'];
$cname = $_POST['drop_name'];
$ciz = $_POST['txt_iz'];

	$result = mysqli_query($con,"SELECT * FROM cable_iz where size_id='$csize' AND type_id='$cname' AND iz='$ciz'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO cable_iz(size_id,type_id,iz) 
				VALUES('$csize','$cname','$ciz')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='cable_iz.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='cable_iz.php'</script>";  
		}	
?>