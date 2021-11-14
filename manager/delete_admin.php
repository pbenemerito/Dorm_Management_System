
<?php
				include "connect.php";
			$_GET['id'];
$ID=$_GET['id'];
// delete query
$sql = "DELETE FROM user where ID = $ID";
if (mysqli_query($con,$sql)) {
				echo "<script>window.alert('Deleted Successfully!')
				document.location = 'accounts_view.php'</script>";
}
else{
	echo "Error deleting record: " . mysqli_error($con) . "<br />";
}
?>













