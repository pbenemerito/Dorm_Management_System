<?php	
	
	include "connect.php";
	
	$_GET['id'];
	$_GET['student'];
	$ID1=$_GET['id'];
	$ID2=$_GET['student'];
				

		$sql1 = "Update render SET status='CLEARED' where ID='$ID1'";
		if(mysqli_query($con,$sql1)) {
			echo "<script>window.alert('Data Updation Success!')
			document.location = 'user_studentRender.php'</script>";
		
	}
			
	else {echo "<script>window.alert('Failure!')
			document.location = 'user_studentRender.php'</script>";
	}

	
?>