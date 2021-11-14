<?php	
	
	include "connect.php";
	
	$_GET['id'];
	$ID1=$_GET['id'];

				$qry="select * from renderers WHERE ID='$ID1';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$student_id=$rows['student_id'];
			
				}
				
	$sql = "Update renderers SET status='Not Cleared' WHERE id='$ID1';";
	if(mysqli_query($con,$sql)) {
	$sql = "Update violations SET status='Standby' WHERE student_id='$student_id' AND status='Ongoing';";
	if(mysqli_query($con,$sql)) {
	echo "<script>window.alert('Data Updation Success!')
			document.location = 'user_studentRender.php'</script>";
	}
}
			
	else {echo "<script>window.alert('Failure!')
			document.location = 'user_studentRender.php'</script>";
	}

	
?>