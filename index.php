<?php	
include "connect.php";

	session_start();
	if(isset($_SESSION['login_user'])){
		if(isset($_SESSION['counter'])) {
		if($_SESSION['counter']=="1")
		{
		header("location:student/home.php");
		}
		elseif($_SESSION['counter']=="3")
		{
		header("location:manager/user_home.php");
		}
				
	}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DORM MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="css/Blog.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<script src="modal.js" type="text/javascript"></script>
	<header>
	    <?php
	    if(isset($_SESSION['msg'])) {
		$msg=($_SESSION['msg']);
		echo "<script>window.alert('".$msg."')</script>";
		session_destroy();
		session_unset();
		}
	    ?>
	</header>
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
	position: fixed;
}
nav {
	text-align: center;
	background-color: #0e425a; 
	position: relative; 
	padding: 0px 60px 0px 750px;
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
nav ul li {
	background-color: #0e425a;
	color: #ffffff;
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
	cursor: pointer;
}
nav ul li button:hover {
	background-color: #055e88;
	height: 45px;
	cursor: pointer;
}
button{
	width: 200px;
	height: 45px;
	background-color: #0e425a;
	z-index: 3;
	border:none;
	font-family: Century Gothic;
	font-weight: bold;
	color: #fff;
}
#signup{
	background-color: #f09c16;
	width: 230px;
}
#signup:hover{
	background-color: #fff;
	color: #f09c16;
	width: 230px;
}
img{
	margin-top: 5px;
}
#banner{
	background: url(background.jpg);
	background-size: cover;
	width: 1400px;
	height: 700px;
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
	margin-top: -190px;
	margin-left: 160px;
}
#style
{
	border: 2px solid #075e89;
	background-color: rgba(0,0,0,.7);
	border-radius: 15px;
	padding-top: 40px;
	padding-bottom: 100px;
	height: 230px;
}
#titlename{
	color: #fff;
	font-weight: bold;
	font-size: 31px;
	font-family: Space Age;
	padding-top: 4px;
	margin-left: -730px;
}
#titlename:hover{
	background-color: #0e425a;
}

#submit{
    background-color:#f09c16;
    height: 37px;
    width: 507px;
    border: none;
    outline: none;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    transition-timing-function: linear;
}
#submit:hover{
    background: #bd8519;
    color: #fff;
}
input, select{
	background-color: #161d2f;
	border: none;
	text-decoration: underline #79a6d0 2px;
	color: #fff;
}
hr{
	width: 90%;
	margin-top: 7px;
}
select{
	margin-left: 0px;
	width: 385px;
}
.modal-content3 {
	background-color: #161d2f; 
	width: 450px;
    height:420px;
    margin-top: 2.5%; 
    margin: auto;
    border-radius: 5px;
}
.modal-content1, .modal-content2{
	background-color: #161d2f;
    width: 450px;
    height: 255px;
    text-align: center;
    margin: auto;
    margin-top: 15%; 
    border-radius: 5px;
}
.inp1,.inp2, #submit{
	width: 380px;
	margin-left: 3px;
}
/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 30px;
    color: gray;
    margin-right: -10px;
    margin-top: -10px; 
}
</style>
<header>
		<a class="logo"><span>DORM MANAGEMENT SYSTEM<span></a>
		<font face="Century Gothic" color="#000000" size="4.8">
		<div id="nav">
			<nav>
				<ul>
					<li id="titlename">DORM MANAGEMENT SYSTEM</li>
					
					<li><BUTTON TYPE="BUTTON" onclick="btn2()">MANAGER</BUTTON>
							<div id="myModal2" class="modal">
								<div class="modal-content1">
								    	<div class="modal-header">
								      		<span class="close" onclick="span2()">&times;</span>
								    	</div>
								    <img src="images/login.png" width="220" height="60">
									<hr width="90%" color="#c2c2c2">								    <p><center>
								    <form action="check_admin.php" method="post">
									<table>
										<tr>
											<td><input class="inp2" type="Text" name="username" placeholder="Username"> </td>
										</tr>	

										<tr>
											<td><input class="inp2" type="password" name="password" placeholder="Password"> </td>
										</tr>

										<tr>
											<td><input id="submit" type="Submit" name="button" value="Login"/></td>
										</tr>
									</table>  
									</form></center> </p>
							    </div>
							</div></a></li>
						<li><BUTTON TYPE="BUTTON" onclick="btn3()">STUDENT</BUTTON>
							<div id="myModal3" class="modal">
								<div class="modal-content1">
								    	<div class="modal-header">
								      		<span class="close" onclick="span3()">&times;</span>
								    	</div>
								    <img src="images/login.png" width="220" height="60">
									<hr width="90%" color="#c2c2c2">								    <p><center>
								    <form action="checkuser.php" method="post">
									<table>
										<tr>
											<td><input class="inp2" type="Text" name="username" placeholder="Username"> </td>
										</tr>	

										<tr>
											<td><input class="inp2" type="password" name="password" placeholder="Password"> </td>
										</tr>

										<tr>
											<td><input id="submit" type="Submit" name="button" value="Login"/></td>
										</tr>
									</table>  
									</form></center> </p>
							    </div>
							</div></a></li>
						<li><BUTTON id="signup"  id="signup" TYPE="BUTTON" onclick="btn1()">CREATE ACCOUNT</BUTTON>
					<div id="myModal1" class="modal">
						<div class="modal-content3">
						    	<div class="modal-header">
						      		<span class="close" onclick="span1()">&times;</span>
						    	</div>
						    <img src="images/signup.png" width="220" height="60">
							<hr width="90%" color="#c2c2c2">
						    <p><center>
						    <form action="addacc.php" method="post">
							<table>
								<tr>
									<td><font color="#000"><input class="inp1" type="text" onkeypress="isInputNumber(event)" name="ID" placeholder="Student ID" > </td>
									<script>
/*
									function isInputNumber(evt) {
										var ch = String.fromCharCode(evt.which);

										if(!(/[0-9]/.test(ch))) {
											evt.preventDefault();
										}
									}*/

								</script>
								</tr>	

								<tr>
									<td><input class="inp1" type="Text" name="Firstname" placeholder="Firstname"> </td>
								</tr>

								<tr>
									<td><input class="inp1" type="Text" name="Lastname" placeholder="Lastname"></td>
								</tr>

								<tr>
									<td><input class="inp1" type="Text" name="Username" placeholder="Username"></td>
								</tr>

								<tr>
									<td><input class="inp1" type="password" name="Password" placeholder="Password"></td>
								</tr>

								<tr>
									<td><input class="inp1" type="password" name="Confirm" placeholder="Confirm Password"></td>
								</tr>

								<tr>
									<td><input id="submit" type="Submit" name="button" value="Enter Information"/></td>
								</tr>
							</table>   
							</form></p></center>
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
	</div>
</body>
</html>