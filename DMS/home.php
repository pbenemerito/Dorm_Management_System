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
		body{
			height: 590px
		}
		div.wrapper{
			display:block;
			 margin:0 0 1px 0;
			  text-align:left;
			}
		div.wrapper h1{
			margin:0 0 15px 0;
			padding:0; 
			font-size:20px;
			font-weight:normal;
			line-height:normal;
		}
		.wrapper{
			font-family:Georgia, "Times New Roman", Times, serif;
		}
		#header{
			display:block; 
			position:relative; 
			width:960px; 
			margin:0 auto;
			height: 100%
		}
		#header{
			text-align:center;
			text-transform:uppercase;
			}
		#header h1, #header p{
			margin:0;
		 	padding:0;
		 	list-style:none; 
		 	line-height:normal;
		 }
		#header h1 a{
			font-size:140px; 
			color:#292929; 
		}
		#right{
			height: 100%

		}
		#header p{
			margin-top:-20px; 
			font-size:20px; color:#4A4A4A; 
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
		#leftnav_lc, #leftnav_lc:hover{
			height: 75px;
		}
		</style>
		<header>
		<?php

				include 'connect.php';
				$user=$_SESSION['login_user'];
				$qry="select * from student_accounts where Username='$user';";
				$student_id ='';
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$fname = $rows['fname'];
					$lname = $rows['lname'];
					$name=$fname." ".$lname;
					$student_id = $rows['student_id'];
				}

				mysqli_free_result($result);

				$sql = "SELECT room_number FROM student WHERE student_id = {$student_id}";
				$result = mysqli_query($con, $sql);

				if($result) {
					$row = mysqli_fetch_assoc($result);
					$roomNum = $row['room_number'];
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
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div></font>
		</header>
	</head>

	<body>
	<article><br><br>

	<b>
	<div id="leftnav"><a href="home.php"><img src="images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
	
		<?php 
			include 'connect.php';

			

			$sql = "SELECT * FROM grade WHERE room_number = {$roomNum} AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"grade.php\"><img src=\"images/grades.png\">&emsp;<font color=\"#ffffff\">CURRENT GRADES<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"grade.php\"><img src=\"images/grades.png\">&emsp;<font color=\"#ffffff\">CURRENT GRADES</a></font></div>";
				}
			}
		?>
		<?php 
			include 'connect.php';

			$sql = "SELECT * FROM lcard WHERE name = '$name' AND status = 'Approve' AND seen1 = 0 ";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav_lc\"><a href=\"\"><img src=\"images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE FORM<img src='notif.png'/></a></font><br>
					<a href=\"lcard.php\"><font color=\"#ffffff\" size=\"2\">&emsp;&emsp;&emsp;APPROVE</a></font><br>
						<a href=\"lcard2.php\"><font color=\"#ffffff\" size=\"2\">&emsp;&emsp;&emsp;DISAPPROVE</a></font><br>
						<a href=\"lcard1.php\"><font color=\"#ffffff\" size=\"2\">&emsp;&emsp;&emsp;PENDING</a></font><br></div>";
				} else {
					echo "<div id=\"leftnav_lc\"><a href=\"\"><img src=\"images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE FORM</a></font><br>
					<a href=\"lcard.php\"><font color=\"#ffffff\" size=\"2\">&emsp;&emsp;&emsp;APPROVE</a></font><br>
						<a href=\"lcard2.php\"><font color=\"#ffffff\" size=\"2\">&emsp;&emsp;&emsp;DISAPPROVE</a></font><br>
						<a href=\"lcard1.php\"><font color=\"#ffffff\" size=\"2\">&emsp;&emsp;&emsp;PENDING</a></font><br></div>";
				}
			}
		?>
		<div id="leftnav"><a href="ironing.php"><img src="images/merit.png">&emsp;<font color="#ffffff">POINTS</a></font></div>
		<div id="leftnav"><a href="furlough.php"><img src="images/furlough.png">&emsp;<font color="#ffffff">FURLOUGH</a></font></div>
		
	
	</b>			
	</article>	
	<aside>
	<div id="right">
	<div class="wrapper">
	<div id="header">
    	<br><br>
    	<h1><a href="">SAMPAGUITA RESIDENCE</a></h1>
    	<br><br>
    	<p>Womens Dorm 6</p>
  		</div>
		</div>	
</div>
</aside>
	</body>
</html>