<?php 

include('../includes/dbcon.php');
	
$id = $_POST['id'];
$cphase = $_POST['txt_phase'];
$cvolt = $_POST['txt_volt'];

	$result = mysqli_query($con,"SELECT * FROM cable_phase where phase='$cphase' AND volt='$cvolt' "); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO cable_phase(phase,volt) 
				VALUES('$cphase','$cvolt')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='cable_phase.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='cable_phase.php'</script>";  
		}	
?>