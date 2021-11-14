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
		    height: 320px;
		    text-align: center;
		    margin: auto;
		    margin-top: 170px; 
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
		.not-active{
			pointer-events: none;
			cursor: default;
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
					
				</nav>
			</div></font>
		</header>
	</head>
	
	<body>
	<article><br><br>
	<b>
	<div id="leftnav"><a href="user_home.php"><img src="images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
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
	<th>Name</th>
	<th>Destination</th>
	<th>Departure</th>
	<th>Arrival</th>
	<th colspan="2"><center>ACTION</center></th>
		<?php
			if(isset($_POST['submit']))
			{
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$room=$_POST['room'];
						
				include "connect.php";
			
			$sql = "SELECT * FROM student";
			$result=mysqli_query($con,$sql);
								while($rows=mysqli_fetch_array($result))
								{
									if($fname!=$rows['fname'] && $lname!=$rows['lname']){
									echo "<script>window.alert('Student does not exist!')
									document.location = 'user_demeritsRecord.php'</script>";

								mysqli_close($con);

								}
								
							}
				if(strlen($fname)!=0 && strlen($lname)!=0 && strlen($room)!=0){
				$qry="insert into demerits (fname,lname,room_number) values('$fname','$lname','$room')";
				$result=mysqli_query($con,$qry);
				if($result)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'user_demeritsRecord.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'user_demeritsRecord.php'</script>";
			}
			}
			
			function displayimage()
			{
				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
				
				$qry="select * from furlough";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
				
					if(strlen($rows['arrival'])==0){
						$str = $str.	"<tr>
						<td>".$rows['room_number']."</td>
						<td>".$rows['name']."</td>
						<td>".$rows['destination']."</td>
						<td>".$rows['departure']."</td>
						<td>".$rows['arrival']."</td>
						<td><button disabled value='true'><a href = 'edit_afurlough.php?id=".$rows['0'].
						"'><img src=\"images/arrival.png\">&emsp;Set Arrival</a></button></td>
						</tr>"
						;
						}
					else{
						$str = $str.	"<tr>
						<td>".$rows['room_number']."</td>
						<td>".$rows['name']."</td>
						<td>".$rows['destination']."</td>
						<td>".$rows['departure']."</td>
						<td>".$rows['arrival']."</td>
						<td><button disabled value='true'><a href = 'edit_afurlough.php?id=".$rows['0'].
						"' class='not-active'><img src=\"images/arrival.png\">&emsp;Set Arrival</a></button></td>
						</tr>"
						;
						}
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