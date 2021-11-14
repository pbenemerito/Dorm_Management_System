
<?php
				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
	$ID = $_POST['ID'];
	$user = $_POST['user'];
	$First = $_POST['First'];
	$Middle = $_POST['Middle'];
	$Last = $_POST['Last'];
	$Course = $_POST['Course'];
	$Year = $_POST['Year'];
	$dorm = $_POST['Dorm'];

	$room = $_POST['room'];

	
			if(!$con)
				die('Connection Error: ' . mysqli_error($con));
		$abc="SELECT count(*) as c FROM student WHERE dorm='6-7' AND room_number='3' AND request='Approve'";
			$result=mysqli_query($con,$abc);
			if($result){
				while($row=mysqli_fetch_assoc($result))
				{
					$count=$row['c'];
				}
			}
			$qry="select * from room where dorm='6-7' AND name='3';";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									$count1=$rows['max'];
								}
			if($count==$count1){
			echo "<script>window.alert('FULL!')</script>";
										
			}	

	if(strlen($ID)!=0 && strlen($First)!=0 && strlen($Middle)!=0 && strlen($Last)!=0 && strlen($Course)!=0 && strlen($Year)!=0 && strlen($dorm)!=0&& strlen($room)!=0){
	$qry="INSERT INTO student (student_id, fname, mname, lname, Course, Year,dorm_type, dorm_number,room_number,dorm) VALUES ('$ID','$First','$Middle','$Last','$Course','$Year','MD','$dorm','$room','$dorm')";
									$result=mysqli_query($con,$qry);
									if($result){	
										$sql = "Update student_accounts SET request='Pending' 
										WHERE student_id='$ID';";
										if(mysqli_query($con,$sql)) {
										echo "<script>window.alert('SUCCESSFUL!')</script>";
										include 'logout.php';
										}else{
									echo "<script>window.alert('Fails!')</script>";
									include 'logout.php';
									
									}
									}
									}
									else{
									echo "<script>window.alert('Empty Fields!')</script>";
									include 'logout.php';
									}
									


?>













