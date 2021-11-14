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
		input[type=text]{
			margin-left: 20px;
			width: 80%;
		}
		input[type=submit]{

			margin-left: 20px;
			width: 80%;

		}
		hr{
			width: 90%;
			margin-top: 7px;
		}
		.modal-content1{
			background-color: #161d2f;
		    width: 500px;
		    height: 590px;
		    margin: auto;
		    margin-top: -50px; 
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
			margin-top: 0;
			width:100px;
			cursor: pointer;
			background-color: #0f435b
		}
		#btnadd:hover{
			cursor: pointer;
			background-color: #055e88
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
								<li><a href="../logout.php">LOGOUT</a></li>
							</ul>	
						</li>
					</ul>
					<BUTTON id="btnadd" TYPE="BUTTON" onclick="btn1()"><font color="#ffffff" size="3"><b>ADD</font></BUTTON>
							<div id="myModal1" class="modal">
								<div class="modal-content1">
								    	<div class="modal-header">
								      		<span class="close" onclick="span1()">&times;</span>
								    	</div>
								    <img src="../images/addinfo.png" width="220" height="60">
									<hr width="90%" color="#c2c2c2">
								   <form method="post" >
										<br><br>
										
										<input type="text" name="grade1" placeholder="Frontyard"><br><br><br>
										<input type="text" name="grade2" placeholder="Backyard"><br><br><br>
										<input type="text" name="grade3" placeholder="Bedroom"><br><br><br>
										<input type="text" name="grade4" placeholder="Kitchen"><br><br><br>
										<input type="text" name="grade5" placeholder="Comfortroom"><br><br><br>
										<input type="text" name="grade6" placeholder="Bathroom"><br><br><br>
										<?php
										include '../room.php';
										?>
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
	<b><div id="leftnav"><a href="user_home.php"><img src="../images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
	<?php 
			include 'connect.php';


			$sql = "SELECT * FROM student WHERE request='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><img src=\"../images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST<img src='../images/notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><img src=\"../images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST</a></font></div>";
				}
			}
		?>
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
	<th>Area</th>
	<th>Grade</th>
	<th>Date</th>

		<?php
			if(isset($_POST['submit']))
			{
					$room=$_POST['room'];
					$grade1=$_POST['grade1'];
					$grade2=$_POST['grade2'];
					$grade3=$_POST['grade3'];
					$grade4=$_POST['grade4'];
					$grade5=$_POST['grade5'];
					$grade6=$_POST['grade6'];
					$date=date("Y/m/d");
						
				include "connect.php";

				if(strlen($room)!=0 && strlen($grade1)!=0 && strlen($grade2)!=0 && strlen($grade3)!=0 && strlen($grade4)!=0 && strlen($grade5)!=0 && strlen($grade6)!=0){
				$qry = "INSERT INTO grade (area,grade,room_number,date,seen) values('Frontyard','$grade1','$room','$date', 0	);";
				$qry .= "INSERT INTO grade (area,grade,room_number,date,seen) values('Backyard','$grade2','$room','$date', 0 );";
				$qry .= "INSERT INTO grade (area,grade,room_number,date,seen) values('Bedroom','$grade3','$room','$date', 0 );";
				$qry .= "INSERT INTO grade (area,grade,room_number,date,seen) values('Kitchen','$grade4','$room','$date', 0 );";
				$qry .= "INSERT INTO grade (area,grade,room_number,date,seen) values('CR','$grade5','$room','$date', 0 );";
				$qry .= "INSERT INTO grade (area,grade,room_number,date,seen) values('BR','$grade6','$room','$date', 0 );";
				$result=mysqli_multi_query($con,$qry);
				if($result)
				{
				echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'user_areaRecord.php'</script>";
				}
				else{
					die('error'.mysqli_error($con));
				}
				}	
					
			
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'user_areaRecord.php'</script>";
			}
			}
		
			
			function displayimage()
			{
				include "connect.php";
			
				$qry="select * from grade;";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{

					$str = $str.	"<tr>
					<td>".$rows['room_number']."</td>
					<td>".$rows['area']."</td>
					<td>".$rows['grade']."</td>
					<td>".$rows['date']."</td>
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