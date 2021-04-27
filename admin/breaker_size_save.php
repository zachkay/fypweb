<?php 

include('../includes/dbcon.php');
	
$id = $_POST['id'];
$bsize = $_POST['txt_breaker'];

	$result = mysqli_query($con,"SELECT * FROM breaker_size where size='$bsize'"); 
        $count = mysqli_num_rows($result);

        if ($count==0)
        {	
			mysqli_query($con,"INSERT INTO breaker_size(size) 
				VALUES('$bsize')")or die(mysqli_error($con));  
				echo "<script type='text/javascript'>alert('Successfully added new item!');</script>";
				echo "<script>document.location='breaker_size.php'</script>";   
		}
		else
		{
				echo "<script type='text/javascript'>alert('Item already added!');</script>";
				echo "<script>document.location='breaker_size.php'</script>";  
		}	
?>