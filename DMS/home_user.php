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
		</style>
		<header>
		<?php

				include 'connect.php';
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				$student_id ='';
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$name = $rows['Username'];
					$name=$fname." ".$lname;
					$dorm=$rows['dorm'];
					$type=$rows['dorm_type'];
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
								<li><a href="settings2.php">ACCOUNT SETTINGS</a></li>
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
	<b><div id="leftnav"><a href="user_home.php"><font color="#ffffff">HOME</a></font></div>
	<?php 
			include 'connect.php';


			$sql = "SELECT * FROM student WHERE dorm_number = '$area' AND dorm_type = '$type' AND request='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><font color=\"#ffffff\">STUDENT REQUEST<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><font color=\"#ffffff\">STUDENT REQUEST</a></font></div>";
				}
			}
		?>
		<?php 

			$sql = "SELECT * FROM lcard WHERE dorm_number = '$area' AND dorm_type = '$type' AND status='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><font color=\"#ffffff\">LEAVE REQUEST<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><font color=\"#ffffff\">LEAVE REQUEST</a></font></div>";
				}
			}
		?>
		<div id="leftnav"><a href="user_studentRender.php"><font color="#ffffff">RENDER</a></font></div>
		<div id="leftnav"><a href="user_areaRecord.php"><font color="#ffffff">AREA GRADES</a></font></div>
		<div id="leftnav"><a href="user_ironingRecord.php"><font color="#ffffff">IRONING RECORD </a></font><br></div>
		<div id="leftnav"><a href="user_violationRecord.php"><font color="#ffffff">VIOLATIONS </a></font><br></div>
		<div id="leftnav"><a href="user_meritsRecord.php"><font color="#ffffff">MERITS </a></font><br></div>
		<div id="leftnav"><a href="user_demeritsRecord.php"><font color="#ffffff">DEMERITS</a></font><br></div>
		<div id="leftnav"><a href="user_studentRecord.php"><font color="#ffffff">STUDENT RECORD </a></font><br></div>
		
	</b>
	</article>
	<aside>
	<div id="right">
	<div class="wrapper">
		<div id="header">
    	<br><br>
    	<h1><a href="index.php">SAMPAGUITA RESIDENCE</a></h1>
    	<br><br>
    	<p>Womens Dorm 6</p>
  		</div>
		</div>	
</div>
</aside>
	</body>
</html>