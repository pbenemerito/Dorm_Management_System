<?php	
/*include "connect.php";
	$sql = "SELECT * FROM user";
	$result= mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
		$a=$row['1'];
	
}


	$sql = "SELECT * FROM student_accounts";
	$result= mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
		$b=$row['2'];
	
	}
	if(isset($_SESSION['login_user'])==$b){
	header("location:user.php");

	}*/


	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DORM MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="Blog.css">
</head> 
<body>
<font face="Century Gothic">
		<div class="loginBox">
			<img src="img/user.png" class="user">
			<h2>LOGIN</h2>
			
		<form method="post" action="check_admin.php">
				
				<p>Username</p>
					<input type="text" name="username" placeholder="Username" >
				<p>Password</p>
					<input type="password" name="password" placeholder="......" >

					<input type="submit" name="login_user" value="LOGIN">
					<?
					?>
				<center>
					<a href="checkuser.php">Sign up</a>
				</center>
			
		</form>
	</div>
		
<body>
</html>
</html>
</html>