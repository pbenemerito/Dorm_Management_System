<?php	
	include "connect.php";
	
	$_GET['id'];
	$ID1=$_GET['id'];
	
	$sql = "Update furlough SET arrival=Now() WHERE ID='$ID1'";
	if(mysqli_query($con,$sql)) {
			echo "<script>window.alert('Record Updated Successfully!')
			document.location = 'user_furlough.php'</script>";
	}
	else {echo "<script>window.alert('Failure!')
			document.location = 'user_furlough.php'</script>";
	}
?>