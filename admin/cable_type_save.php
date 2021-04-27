<?php 

include('../includes/dbcon.php');
	
$id = $_POST['id'];
$cname = $_POST['txt_name'];
$ccore = $_POST['txt_core'];
$tab_ref = $_POST['txt_tabref'];
$inst_type = $_POST['txt_instype'];
$cphase = $_POST['drop_phase'];

	$result = mysqli_query($con,"SELECT * FROM cable_type where cable_name='$cname' AND cable_core='$ccore' AND table_reference='$tab_ref' AND installation_type='$inst_type' AND phase_id='$cphase'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO cable_type(cable_name,cable_core,phase_id,table_reference,installation_type) 
				VALUES('$cname','$ccore','$cphase','$tab_ref','$inst_type')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='cable_type.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='cable_type.php'</script>";  
		}	
?>