<?php

	session_start();
	if(!isset($_SESSION['login_user'])){
		header("location: index.php");
	}
?>
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
		    height: 550px;
		    text-align: center;
		    margin: auto;
		    margin-top: -40px; 
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

			position: absolute;
			margin-left: -870px;
			margin-top: -16px;
			background-color: #0f435b;
			width:100px;
		}
		#btnadd:hover{
			cursor: pointer;
			background-color: #055e88
		}
		#search{
				margin-left: -1270px;
				margin-top: 0px;
				width: 300px;
				height: 40px;
				position: absolute;
				font-size: 13px;
				outline: 0;
				border-radius: 0;
				padding: 5px;
		}

		#submit{
				position: absolute;
				margin-left: -970px;
				width: 100px;
				height:40px;
				background-color: #0e425a;
				border-right: 1px solid #c2c2c2; 
		}
		#submit:hover{
			cursor: pointer;
			background-color: #055e88;
		}
		</style>
		

		<header>
			<header>
		<?php

				include 'connect.php';
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$name = $rows['Username'];
				}

				mysqli_free_result($result);
		?>
			<font face="Century Gothic">
			<div id="nav">
					<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
					
						<li id="login"><a href=""><?php echo $name?></a>
							<ul>
								<li><a href="settings.php">EDIT ACCOUNT</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>	
						</li>
					</ul>
					<form action="user_viewRecord.php" method="post">
 							<input type="text" id="search" name="term" placeholder="  Search Firstname, Middlename or Lastname"/>
							<input type="submit" id="submit" name="submit1" value="Search">
 					</form>
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
										<input type="text" name="id" placeholder="ID"><br><br><br>
										<input type="text" name="fname" placeholder="Firstname"><br><br><br>
										<input type="text" name="mname" placeholder="Middlename"><br><br><br>
										<input type="text" name="lname" placeholder="Lastname"><br><br><br>
										<input type="text" name="course" placeholder="Course"><br><br><br>
										<input type="text" name="room" placeholder="Room number"><br><br><br>
										<select id="year" name="year">
									      <option value="">Year</option>
									      <option value="1st">1st</option>
									      <option value="2nd">2nd </option>
									      <option value="3rd">3rd</option>
									      <option value="4th">4th</option>
									    </select><br><br>
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
	<b><div id="leftnav"><a href="user_home.php"><img src="images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
	<?php 
			include 'connect.php';


			$sql = "SELECT * FROM student WHERE request='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><img src=\"images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><img src=\"images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST</a></font></div>";
				}
			}
		?>
		<?php 

			$sql = "SELECT * FROM lcard WHERE status='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><img src=\"images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE REQUEST<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><img src=\"images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE REQUEST</a></font></div>";
				}
			}
		?>
		<div id="leftnav"><a href="user_studentRender.php"><img src="images/render.png">&emsp;<font color="#ffffff">RENDERERS</a></font></div>
		<div id="leftnav"><a href="user_areaRecord.php"><img src="images/grades.png">&emsp;<font color="#ffffff">AREA GRADES</a></font></div>
		<div id="leftnav"><a href="user_violationRecord.php"><img src="images/violation.png">&emsp;<font color="#ffffff">VIOLATIONS </a></font><br></div>
		<div id="leftnav"><a href="user_meritsRecord.php"><img src="images/merit.png">&emsp;<font color="#ffffff">POINTS </a></font><br></div>
		<div id="leftnav"><a href="user_furlough.php"><img src="images/furlough.png">&emsp;<font color="#ffffff">FURLOUGH</a></font><br></div>
		<div id="leftnav"><a href="user_studentRecord.php"><img src="images/student.png">&emsp;<font color="#ffffff">STUDENT RECORD </a></font><br></div>
		
	</b>
	</article>
	<aside>
	<div id="right">
	
	
		<table class="alternate">
	<tr>

	<th>Room</th>
	<th>Student ID</th>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Last Name</th>
	<th>Course</th>

	<th>Year</th>
	<th colspan="2"><center>ACTION</center></th>

		<?php
			if(isset($_POST['submit']))
			{
					$ID=$_POST['id'];
					$fname=$_POST['fname'];
					$mname=$_POST['mname'];
					$lname=$_POST['lname'];
					$course=$_POST['course'];
					$year=$_POST['year'];
					$room=$_POST['room'];
					$request="Approve";

				include "connect.php";

					$qry="select * from student;";
								$str="";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									if($ID==$rows[1]){
									echo "<script>window.alert('STUDENT ID ALREADY EXIST')
									document.location = 'user_studentRecord.php'</script>";

								mysqli_close($con);

								}
							}
						
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$dorm=$rows['dorm'];
					$area=$rows['3'];
					$type=$rows['4'];
					
				}
				if(strlen($ID)!=0 && strlen($fname)!=0 && strlen($mname)!=0 && strlen($lname)!=0 && strlen($course)!=0 && strlen($year)!=0  && strlen($room)!=0){
				$qry="insert into student (student_id,fname,mname,lname,course,year,request,room_number) values('$ID','$fname','$mname','$lname','$course','$year','$request','$room')";
				$result=mysqli_query($con,$qry);
				if($result)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'user_studentRecord.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'user_studentRecord.php'</script>";
			}
			}
			
			function displayimage()
			{
				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
			
				$qry="select * from student";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					
					$str = $str.	"<tr>
					<td>".$rows['room_number']."</td>
					<td>".$rows['student_id']."</td>
					<td>".$rows['fname']."</td>
					<td>".$rows['mname']."</td>
					<td>".$rows['lname']."</td>
					<td>".$rows['course']."</td>
					<td>".$rows['year']."</td>
					<td><button><a href = 'user_edit_student.php?id=".$rows['0']."'><center><img src='up.png'/></a></button>&emsp;
					<button><a href = 'user_delete.php?id=".$rows['0']."'><center><img src='del.png'/></a></button></td>
					</tr>"
		;			
				}
				mysqli_close($con);
				
		 echo $str;
			}
			
			displayimage();
		?>

		</form>
		
	
		</table>
</div>
</aside>
	</body>
</html>