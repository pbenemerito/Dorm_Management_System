<?php
	session_start();
	if(!isset($_SESSION['login_user'])){
		header("location: index.php");
	}
	?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php include "page_title.php"; ?></title>
		<link rel="stylesheet" type="text/css" href="Blog.css">
		<link rel="stylesheet" type="text/css" href="user.css">
		<link rel="stylesheet" type="text/css" href="modal.css">
		<script src="modal.js" type="text/javascript"></script>
		<style>
		*{
			color: #ffffff;
		}
		input, .inp,select{
			background-color: #161d2f;
			text-decoration: underline #79a6d0 2px;
		}
		input[type=submit],input[type=text],select{
			border: none;
		}
		hr{
			width: 90%;
			margin-top: 7px;
		}
		.modal-content1{
			background-color: #161d2f;
		    width: 450px;
		    height: 510px;
		    text-align: center;
		    margin: auto;
		    margin-top: 120px; 
		}
		.close {
		    color: white;
		    float: right;
		    font-size: 30px;
		    color: gray;
		    margin-right: -10px;
		    margin-top: -10px; 
		}
		#titlename{
			color: #fff;
			font-weight: bold;
			font-size: 31px;
			font-family: Space Age;
			padding-top: 4px;
			margin-left: -1150px;
			background-color: #0e425a;
		}
		#titlename:hover{
			background-color: #0e425a;
		}
		#btnadd{

			background-color: #0e425a;
			position: absolute;
			margin-left: -870px;
			margin-top: 0px;
			width:100px;
		}
		#btnadd:hover{
			
			background-color: #055e88;
		}
		</style>
			<header>
			<?php

				include 'connect.php';
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$fname = $rows['Username'];
					$area = $rows['area'];
					$type = $rows['type'];

					
				}
		?>
			<font face="Century Gothic">
			<div id="nav">
					<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
						<li id="login"><a href=""><?php echo $fname?></a>
							<ul>
								<li><a href="settings.php">EDIT ACCOUNT</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>	
						</li>
					</ul>
					<BUTTON id="btnadd" TYPE="BUTTON" onclick="btn1()"><font color="#ffffff" size="3"><b>ADD</font></BUTTON>
							<div id="myModal1" class="modal">
								<div class="modal-content1">
								    	<div class="modal-header">
								      		<span class="close" onclick="span1()">&times;</span>
								    	</div>
								    <img src="addinfo.png" width="220" height="60">
									<hr width="90%" color="#c2c2c2">
								   <form method="post" >
										<br><br>
										<input type="text" name="id" placeholder="Student ID"><br><br><br>
										<input type="text" name="fname" placeholder="First Name"><br><br><br>
										<input type="text" name="lname" placeholder="Lastname"><br><br><br>
										<select id="type" name="gender" placeholder="Dorm Type">
										<option placeholder="Dorm Type">Gender</option>
						      			<option value="Male">Male</option>
						      			<option value="Female">Female </option>
						    			</select><br><br><br>
										<input type="text" name="username" placeholder="Username"><br><br><br>
						    			<input type="text" name="password" placeholder="Password">
										<br><br>
										<input type="submit" name="submit" value="ADD" />
									</form></center> </p>
							    </div>
							</div>
				</nav>
			</div></font>
		</header>
	</head>
	
	<body>
	<article><br><br>
	<b>
		<div id="leftnav"><a href="admin_home.php"><img src="images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
			<?php 
			include 'connect.php';


			$sql = "SELECT * FROM student WHERE request='Pending' AND seen1 = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"admin_studentRequest.php\"><img src=\"images/studentreq.png\">&emsp;<font color=\"#ffffff\"> REQUEST<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"admin_studentRequest.php\"><img src=\"images/studentreq.png\">&emsp;<font color=\"#ffffff\"> REQUEST</a></font></div>";
				}
			}
			?>
		<div id="leftnav"><a href="admin_studentRecord.php"><img src="images/record.png">&emsp;<font color="#ffffff"> RECORD</a></font></div>
		<div id="leftnav"><a href="admin_accountRecord.php"><img src="images/student.png">&emsp;<font color="#ffffff"> ACCOUNTS</a></font></div>
		<div id="leftnav"><a href="accounts_view.php"><img src="images/admin.png">&emsp;<font color="#ffffff">ADMINISTRATORS </a></font><br></div>
	
	
	</b>			
	</article>
		<aside>
			<div id="right">
			
				<table class="alternate">
					<tr>
					<th>STUDENT ID</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
	<th colspan="2"><center>ACTION</center></th>
					</b>
						<?php
						
							if(isset($_POST['submit']))
							{
									$id=$_POST['id'];
									$fname=$_POST['fname'];
									$lname=$_POST['lname'];
									$gender=$_POST['gender'];
									$username=$_POST['username'];
									$password=$_POST['password'];	
									$request="Pending";


								include 'connect.php';
								$qry="select * from student_accounts;";
								$str="";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									if($username==$rows['Username']){
									echo "<script>window.alert('USERNAME ALREADY EXIST')
									document.location = 'admin_accountRecord.php'</script>";

								mysqli_close($con);

								}
								}
							
								
								if(strlen($id)!=0 && strlen($fname)!=0 && strlen($lname) && strlen($gender)!=0 && strlen($username)!=0 && strlen($password))
								//{
									$qry="insert into student_accounts (student_id,fname,lname,gender,Username,Password,request) values('$id','$fname','$lname','$gender','$username','$password','$request')";
									$result=mysqli_query($con,$qry);
									if($result)
									{
										echo "<script>window.alert('SUCCESSFUL!')
										document.location = 'admin_accountRecord.php'</script>";
									}
									else{
									echo "<script>window.alert('Fails!')
										document.location = 'admin_accountRecord.php'</script>";
									
									}
								//}
						//	else{
								echo "<script>window.alert('Empty Fields')
								document.location = 'admin_accountRecord.php'</script>";
						//	}
							}
							function displayimage()
							{
								$con = mysqli_connect("localhost","root","","dorm");
								if(!$con)
								die('Connection Error: ' . mysqli_error($con));
								$qry="select * from student_accounts;";
								$str="";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									//echo "$row[1]";
									//echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';
									
								$str = $str.	"<tr>

						<td>".$rows[1]."</td>
						<td>".$rows[2]."</td>
						<td>".$rows[3]."</td>
						<td>".$rows[6]."</td>
						<td>".$rows[7]."</td>
						<td><button><a href = 'edit_account.php?id=".$rows['0']."'><center><img src='up.png'/></a></button>&emsp;
						<button><a href = 'delete_user.php?id=".$rows['0']."'><center><img src='del.png'/></a></button></td>
		
						
						</tr>"
						;
									
								}
								mysqli_close($con);
								
						 echo $str;
							}
							
							displayimage();
						?>					
						</table>
			</div>
		</aside>
	</body>
</html>