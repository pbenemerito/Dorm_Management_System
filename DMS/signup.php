
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
	<div class="loginBox">
		<img src="img/user.png" class="user">
		<h2>Sign Up Here</h2>
		<p>----------------------------------------------</p>
	
	<form method="post" action="register.php">


		<p>Username</p>
			<input type="text" name="username" placeholder="Username">
		<p>Name</p>
			<input type="text" name="name" placeholder="Name" >

		<p>Address</p>
			<input type="text" name="address" placeholder="Address" >
		<p>Phone</p>
			<input type="text" name="phone" placeholder="Phone" >
		<p>Email</p>
			<input type="text" name="email" placeholder="Anthony.coco.tatoo@gmail.com" >
		<p>Password</p>
			<input type="password" name="password_1" placeholder="Password">
		<p>Confirm password</p>
			<input type="password" name="password_2" placeholder="Confirm Password">
		<input type="submit" name="reg_user" value="Register">
		<center>
		<a href="log.php">Log In</a>
		</center>
	</form>
	</div>
</body>
</html>