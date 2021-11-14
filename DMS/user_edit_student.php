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
			border: none;
		}
		input[type=submit],input[type=text],input[type=inp],select{
			border: none;
			width: 350px;
		}
		hr{
			width: 90%;
			margin-top: 7px;
		}
		#content-container{
			width:400px;
			height:400px;
			background-color:#161d2f;
			border-radius:10px;
			position:fixed;
			margin-left:35%;
			margin-right:40%;
			margin-top:8%;
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
		#search{
				margin-left: -1270px;
				margin-top: 0px;
				width: 300px;
				height: 40px;
				position: absolute;
				font-size: 13px;
				outline: 0;
				border-radius: 0;
		}
		#submit{
				position: absolute;
				margin-left: -970px;
				width: 100px;
				height:40px;
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
		#leftnav,#leftnav:hover{
			width: 185px;
		}
		article{
			width: 210px;
		}
		aside{
			padding: 40px 10px 10px 40px;
		}
		</style>
		<header<?php

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
			<div id="logo"></div>
			<div id="nav">
				<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
						<li id="login"><a href=""><?php echo $name?></a>
							<ul>
								<li><a href="settings2.php">ACCOUNT SETTINGS</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul><form action="user_viewRecord.php" method="post">
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
										<input type="text" name="lname" placeholder="Lastame"><br><br><br>
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
	<?php	

	include "connect.php";
	$_GET['id'];
	$ID1=$_GET['id'];
	$sql = "SELECT * FROM student WHERE entry_id = $ID1";
	$result = mysqli_query($con,$sql);
?>
	
       
			<div id="update-background" style="position:absolute;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:10;">
				<center>
				<?php
		while($rows = mysqli_fetch_array($result)){
			?>
				<div id="content-container">
				<span id="close" style="margin-left: 350px;font-size: 30px;cursor: pointer;"><a href="user_studentRecord.php"><b>&times;</b></span></a>
                <form id="edit" action="" method="post">
                    <input type="hidden" value=".$rows[0]." name="id">
                    <input type="inp" placeholder="Firstname" name="fname" value="<?php echo $rows['fname']?>"><br><br>
                    <input type="inp" placeholder="Middlename" name="mname" value="<?php echo $rows['mname']?>"><br><br>
                    <input type="inp" placeholder="Lastname" name="lname" value="<?php echo $rows['lname']?>"><br><br>
                    <input type="inp" placeholder="Course" name="course"  value="<?php echo $rows['course']?>"><br><br>
                    <input type="inp" placeholder="Year" name="year"  value="<?php echo $rows['year']?>"><br><br>
                    <input type="inp" placeholder="Room Number" name="room"  value="<?php echo $rows['room_number']?>"><br><br>
                    <input type="submit" name=" submit" value="✔">
                </form></center>
          </div>
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
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><img src=\"images/leavereq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST</a></font></div>";
				}
			}
		?>
		<?php 

			$sql = "SELECT * FROM lcard WHERE status='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><img src=\"images/studentreq.png\">&emsp;<font color=\"#ffffff\">LEAVE REQUEST<img src='notif.png'/></a></font></div>";
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
						
				include "connect.php";
				if(strlen($fname)!=0 && strlen($lname)!=0 && strlen($lname)!=0 && strlen($course)!=0 && strlen($year)!=0&& strlen($room)!=0){
				$qry="update student set fname='$fname',mname='$mname',lname='$lname',course='$course',year='$year',room_number='$room' where entry_id='$ID1'";
				$result1=mysqli_query($con,$qry);
				if($result1)
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
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$area=$rows['dorm'];
					$type=$rows['4'];
				}

				$qry="select * from student where request='Approve'";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					//echo "$row[1]";
					//echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';
				
		
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
		<?php }?>

</div>
</aside>
	</body>
</html>