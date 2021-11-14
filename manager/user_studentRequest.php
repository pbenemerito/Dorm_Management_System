<?php

	session_start();
	if(!isset($_SESSION['login_user'])){
		header("location: ../index.php");
	}
?>
<html>
<head>
		<title><?php include "../page_title.php"; ?></title>
		<link rel="stylesheet" type="text/css" href="../css/Blog.css">
		<link rel="stylesheet" type="text/css" href="../css/user.css">
		<link rel="stylesheet" type="text/css" href="../css/modal.css">
		<script src="../modal.js" type="text/javascript"></script>
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
		    height: 450px;
		    text-align: center;
		    margin: auto;
		    margin-top: 9%; 
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
					
				}
				$sql = "UPDATE student SET seen=1";

				if(mysqli_query($con, $sql)) {
					///
				}	
		?>
			<font face="Century Gothic">
			<div id="nav">
				<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
						<li id="login"><a href=""><?php echo $fname?></a>
							<ul>
								<li><a href="../logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div></font>
		</header>
	</head>
	
	<body>
<article><br><br>
	<b><div id="leftnav"><a href="user_home.php"><img src="../images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
	<div id="leftnav"><a href="user_studentRequest.php"><img src="../images/studentreq.png">&emsp;<font color="#ffffff">STUDENT REQUEST</a></font></div>
				
		<?php 

			$sql = "SELECT * FROM lcard WHERE status='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><img src=\"../images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE REQUEST<img src='../images/notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><img src=\"../images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE REQUEST</a></font></div>";
				}
			}
		?>
		<div id="leftnav"><a href="user_studentRender.php"><img src="../images/render.png">&emsp;<font color="#ffffff">RENDERERS</a></font></div>
		<div id="leftnav"><a href="user_areaRecord.php"><img src="../images/grades.png">&emsp;<font color="#ffffff">AREA GRADES</a></font></div>
		<div id="leftnav"><a href="user_violationRecord.php"><img src="../images/violation.png">&emsp;<font color="#ffffff">VIOLATIONS </a></font><br></div>
		<div id="leftnav"><a href="user_furlough.php"><img src="../images/furlough.png">&emsp;<font color="#ffffff">FURLOUGH</a></font><br></div>
		<div id="leftnav"><a href="user_studentRecord.php"><img src="../images/student.png">&emsp;<font color="#ffffff">STUDENT RECORD </a></font><br></div>
		
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
			
			function displayimage()
			{
			include 'connect.php';
				
				$qry="select * from student where request='Pending';";
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
					<td><button><a href = 'edit_request.php?id=".$rows['0']."'><center><img src='../images/app.png'/></a></button>&emsp;
					<button><a href = 'edit_request1.php?id=".$rows['0']."'><center><img src='../images/disapp.png'/></a></button></td>
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