<?php 

include('../includes/dbcon.php');
	
$id = $_POST['id'];
$csize = $_POST['drop_size'];
$cname = $_POST['drop_name'];
$cprice = $_POST['txt_price'];

	$result = mysqli_query($con,"SELECT * FROM cable_price where size_id='$csize' AND type_id='$cname' AND price='$cprice'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO cable_price(size_id,type_id,price) 
				VALUES('$csize','$cname','$cprice')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='cable_price.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='cable_price.php'</script>";  
		}	
?>