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
					$room=$rows['room_number'];
			
				}
	  $abc="SELECT count(*) as e1 FROM student WHERE room_number='$room' AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $e1=$row['e1'];
        }
      }
      if($e1==10){
      	echo "<script>window.alert('Room is full!')
			document.location = 'user_studentRequest.php'</script>";
			
				mysqli_close($con);
      }
	
	$sql = "Update student_accounts,student SET student_accounts.request='Approve',student.request='Approve' 
	WHERE student_accounts.student_id='$asd' and student.entry_id='$ID1';";
	if(mysqli_query($con,$sql)) {
	echo "<script>window.alert('Data Updation Success!')
			document.location = 'user_studentRequest.php'</script>";
	}
			
	else {echo "<script>window.alert('Failure!')
			document.location = 'user_studentRequest.php'</script>";
	}

	
?>