<?php
	include "connect.php";
	$ID = $_POST['ID'];
	$firstname = $_POST['Firstname'];
	$lastname = $_POST['Lastname'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];

	if(strlen($password) < 8){
			echo "<script>window.alert('Password must be atleast 8 characters!')
			document.location = 'index.php'</script>";
			
								mysqli_close($con);
	}

								$qry="select * from student_accounts;";
								$str="";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									if($ID==$rows['student_id']){
									echo "<script>window.alert('STUDENT ID ALREADY EXIST')
									document.location = 'index.php'</script>";

								mysqli_close($con);

									}
									elseif($username==$rows['Username']){
									echo "<script>window.alert('USERNAME ALREADY EXIST')
									document.location = 'index.php'</script>";

								mysqli_close($con);

									}

								}
	if(strlen($ID)!=0 && strlen($firstname)!=0 && strlen($lastname)!=0 && strlen($username)!=0 && strlen($password)!=0) {
	$sql = "INSERT INTO student_accounts (student_id, fname, lname, Username, Password) VALUES ('$ID','$firstname','$lastname','$username','$password')";
	if(mysqli_query($con,$sql)) {
		
			echo "<script>window.alert('Data insertion for new account is successful.')
			document.location = 'index.php'</script>";
		}
		

		else {
			echo "<script>window.alert('Data insertion fails.')
			document.location = 'index.php'</script>";
		}
		}
			
	else{
		echo "<script>window.alert('Empty Fields')
		document.location = 'index.php'</script>";
		}
?>