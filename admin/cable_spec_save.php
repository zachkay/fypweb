<?php 

include('../includes/dbcon.php');
	
// $id = $_POST['id'];
$csize = $_POST['drop_size'];
$cname = $_POST['drop_name'];
$ciz = $_POST['txt_iz'];
$cvd = $_POST['txt_vd'];
$cprice = $_POST['txt_price'];

	$result = mysqli_query($con,"SELECT * FROM cable_spec where size_id='$csize' AND type_id='$cname' AND iz='$ciz' AND vd='$cvd' AND price='$cprice'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO cable_spec(size_id,type_id,iz) 
				VALUES('$csize','$cname','$ciz')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='cable_spec.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='cable_spec.php'</script>";  
		}	
?>