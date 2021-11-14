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
	<link rel="stylesheet" type="text/css" href="modal.css">
	<script src="modal.js" type="text/javascript"></script>
</head> 
<style>
a{
	color: #fff;
}
*{
	font-size: 17px;
	color: gray;
}
body{
	background: url(bg.jpg);
}
nav {
	text-align: center;
	background-color: #075e89; 
	position: relative; 
	padding: 0px 60px 0px 965px;
	width: 100%;
	position: fixed;
	z-index: 2;
	box-shadow: 0px 0px 0px 4px rgba(0,0,0,.3); 
	font-weight: bold;  
}
nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
nav > ul > li {				
	float: left;
}
nav ul li:hover {
	background-color: #79a6d0;
	color: #ffffff;
}
nav ul li:hover > ul{		
	display: block;
}
nav ul li  a {				
	display: inline-block;
	color: #fff;
	padding: 10px 20px;
	text-decoration: none;
	width: 160px;
}
nav ul li  a:hover{
	background-color: #79a6d0;
}
nav ul li button:hover {
	background-color: #79a6d0	;
	height: 45px;
}
nav ul ul {					
	display: none;
	position: absolute;			
	top: 100%;
	background-color: #075e89;
	width: 180px;
}
nav ul ul li {
	position: relative;
	background-color: #075e89;
}
nav ul ul li:hover button{
	background-color: #79a6d0;
}
button{
	width: 200px;
	height: 45px;
	background-color: #075e89;
	z-index: 3;
	border:none;
	font-family: Century Gothic;
	font-weight: bold;
	color: #fff;
}

#login{
	background-color: #f09c16;
	font-color: #ffffff;
	margin-top: -5px;
	padding-top: 10px;
}
#login{
	height: 40px;
}
input{
	background-color: #161d2f;
	border: none;
	text-decoration: underline #79a6d0 2px;
}
.modal-content {
	background-color: #161d2f;
}	
hr{
	width: 90%;
	margin-top: 7px;
}
img{
	margin-top: 5px;
}
#banner{
	background: url(bghome.png) no-repeat;
	text-align: center;
	height: 700px;
	width: 1600px;
	float: left;
	
}
#title{
	color: #fff;
	font-size: 4.5em;
	font-family: Hobo STD;
	text-align: center;
	text-shadow: 1px 1px black;
	padding-top: 23%;
	width:65%;
	margin-left:18%;
	margin-top: -150px;
}
#style
{
	border: 2px solid #075e89;
	background-color: rgba(0,0,0,.7);
	border-radius: 15px;
	padding-top: 200px;
	padding-bottom: 100px;
	height: 100px;
}

</style>
<header>
		<a class="logo"><span>DORM MANAGEMENT SYSTEM<span></a>
		<font face="Century Gothic" color="#000000" size="4.8">
		<div id="nav">
			<nav>
				<ul>
					<li id="sign-p"><BUTTON TYPE="BUTTON" onclick="btn1()">CREATE ACCOUNT</BUTTON>
					<div id="myModal1" class="modal">
						<div class="modal-content">
						    	<div class="modal-header">
						      		<span class="close" onclick="span1()">&times;</span>
						    	</div>
						    <img src="signup.png" width="220" height="60">
							<hr width="90%" color="#c2c2c2">
							<br>
						    <p><center>

							<table>
								<tr>
									<td><font color="#000"><input type="Text" name="ID" placeholder="Student ID"> </td>
								</tr>	

								<tr>
									<td><input class="inp1" type="Text" name="Firstname" placeholder="Firstname"> </td>
								</tr>

								<tr>
									<td><input class="inp1" type="Text" name="Middlename" placeholder="Middlename"></td>
								</tr>

								<tr>
									<td><input class="inp1" type="Text" name="Lastname" placeholder="Lastname"></td>
								</tr>

								<tr>
									<td><input class="inp1" type="Text" name="Course" placeholder="Course"></td>
								</tr>
								
								<tr>
									<td><input class="inp1" type="Text" name="Year" placeholder="Year"> </td>
								</tr>

								<tr>
									<td><input id="submit" type="Submit" name="button" value="Enter Information"/></td>
								</tr>
							</table>   </p></center>
					    </div>
					</div></a></li>
					<li id="login"><a href="#"> LOGIN ▼ </a>
						<ul><center>
							<li><BUTTON TYPE="BUTTON" onclick="btn2()">ADMIN</BUTTON>
							<div id="myModal2" class="modal">
								<div class="modal-content">
								    	<div class="modal-header">
								      		<span class="close" onclick="span2()">&times;</span>
								    	</div>
								    <img src="login.png" width="220" height="60">
									<hr width="90%" color="#c2c2c2">
									<br>
								    <p>
								    <form action="check_admin.php" method="post">
									<table>
										<tr>
											<td><input class="inp2" type="Text" name="username" placeholder="Username"> </td>
										</tr>	

										<tr>
											<td><input class="inp2" type="Text" name="password" placeholder="Password"> </td>
										</tr>

										<tr>
											<td><a href="check_admin.php"><button id="submit" type="Submit" name="button" value="Login"/></a></td>
										</tr>
									</table>  
									</form> </p>
							    </div>
							</div></a></li>
							<li><BUTTON TYPE="BUTTON" onclick="btn2()">STUDENT</BUTTON>
							<div id="myModal2" class="modal">
								<div class="modal-content">
								    	<div class="modal-header">
								      		<span class="close" onclick="span2()">&times;</span>
								    	</div>
								    <img src="login.png" width="220" height="60">
									<hr width="90%" color="#c2c2c2">
									<br>
								    <p>
									<table>
										<tr>
											<td><input class="inp2" type="text" name="username" placeholder="Username..."> </td>
										</tr>	

										<tr>
											<td><input class="inp2" type="text" name="password" placeholder="Password..."> </td>
										</tr>

										<tr>
											<td><a href="check_admin.php"><input id="submit" type="Submit" name="button" value="Login..."/></a></td>
										</tr>
									</table>   </p></center>
							    </div>
							</div></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div></font>
	</header>
<body>
	<div id="banner">
		<div id="title">
		<div id="style">
			<font family>WELCOME
		</div>
	</div>
</body>
</html>