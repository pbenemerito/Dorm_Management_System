<?php	
	
	include "connect.php";
	
	$_GET['id'];
	$ID1=$_GET['id'];
	$sql = "Update student SET student_type='SA' where entry_id='$ID1'";
	if(mysqli_query($con,$sql)) {
	echo "<script>window.alert('Data Updation Success!')
			document.location = 'admin_studentRecord.php'</script>";
	}
			
	else {echo "<script>window.alert('Failure!')
			document.location = 'admin_studentRecord.php'</script>";
	}

	
?>