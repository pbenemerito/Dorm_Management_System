<?php	
	
	include "connect.php";
	
	$_GET['id'];
	$ID1=$_GET['id'];
				$qry="select * from student WHERE entry_id='$ID1';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$asd=$rows['1'];
			
				}
	
	$sql = "Update student_accounts,student SET student_accounts.request='Disapprove',student.request='Disapprove' 
	WHERE student_accounts.student_id='$asd' and student.entry_id='$ID1';";
	if(mysqli_query($con,$sql)) {
	echo "<script>window.alert('Data Updation Success!')
			document.location = 'user_studentRequest.php'</script>";
	}
			
	else {echo "<script>window.alert('Failure!')
			document.location = 'user_studentRequest.php'</script>";
	}

	
?>