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
		input, .inp{
			background-color: #fff;
			border: none;
			text-decoration: underline #79a6d0 2px;
			width: 80%;
		    height: 35px;
		    margin: -10px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		    border: none;
		    margin-top: 0px;
		}
		input[type=submit]{
			margin-top: -2px;
			margin-left: -7px;
		}
		input[type=text]{
			margin-top: -7px;
		}
		#leftnav_lc, #leftnav_lc:hover{
			height: 75px;
		}
		hr{
			width: 90%;
			margin-top: 7px;
		}
		.modal-content1{
			background-color: #161d2f;
		    width: 450px;
		    height: 280px;
		    text-align: center;
		    margin: auto;
		    margin-top: 15%; 
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

				$sql = "UPDATE lcard SET seen1=1 WHERE name='$name'";

				if(mysqli_query($con, $sql)) {
					///
				}				
		?>
			<a class="logo"><span>My Cooking Club<span></a>
			<font face="Century Gothic">
			<div id="logo"></div>
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
										<input class="inp" type="date" name="date" placeholder="Destination">
										<br><br>
										<input class="inp" type="time" name="time" placeholder="Destination">
										<br><br>
										<input class="inp" type="text" name="destination" placeholder="Destination">
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
	<div id="leftnav"><a href="home.php"><img src="images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
	<?php 

			include 'connect.php';

			$sql = "SELECT room_number FROM student WHERE student_id = {$student_id}";
			$result = mysqli_query($con, $sql);

			if($result) {
				$row = mysqli_fetch_assoc($result);
				
				$roomNum = $row['room_number'];
			}

			mysqli_free_result($result);

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
	<div id="leftnav_lc"><a href=""><img src="images/leavereq.png">&emsp;<font color="#ffffff">LEAVE FORM</a></font><br>
			<a href="lcard.php"><font color="#ffffff" size="2">&emsp;&emsp;&emsp;APPROVE</a></font><br>
			<a href="lcard2.php"><font color="#ffffff" size="2">&emsp;&emsp;&emsp;DISAPPROVE</a></font><br>
			<a href="lcard1.php"><font color="#ffffff" size="2">&emsp;&emsp;&emsp;PENDING</a><br><br></font><br></div>
		</div>
		<div id="leftnav"><a href="ironing.php"><img src="images/merit.png">&emsp;<font color="#ffffff">POINTS</a></font></div>
		<div id="leftnav"><a href="furlough.php"><img src="images/furlough.png">&emsp;<font color="#ffffff">FURLOUGH</a></font></div>
	</b>			
	</article>	
	<aside>
	<div id="right">
	
		<table class="alternate">
	<tr>

	<th>Destination</th>
	<th>Departure</th>
	<th>Arrival</th>

		<?php
		
			if(isset($_POST['submit']))
			{
					$destination=$_POST['destination'];
					$date=$_POST['date'];
					$time=$_POST['time'];
					
				include "connect.php";
				$user=$_SESSION['login_user'];
				$qry="select * from student_accounts where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$asd=$rows[1];
					
				}
				$db= mysqli_connect("localhost","root","","dorm");
				$user=$_SESSION['login_user'];
				$qry="select * from student where student_id='$asd';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$room=$rows[9];
					}
				$qry="select * from student_accounts where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$asd=$rows[1];
					$fname=$rows[2];
					$lname=$rows[3];
					$name=$fname." ".$lname;
				}

				if(strlen($destination)!=0 )
				{	

					$datetime=$date." ".$time;
					$qry="insert into lcard (name, destination, departure) values ('$name','$destination','$datetime')";
					$result=mysqli_query($con,$qry);
					if($result)
					{
						
						echo 
						"<script>window.alert('SUCCESSFUL!')
						document.location = 'lcard.php'</script>";
					}
					else{
						//echo "<br/>Image not uploaded.";
					}
				}
				else{
					echo "<script>window.alert('Empty Fields')
					document.location = 'lcard.php'</script>";
				}
					
			}
			
		
			function displayimage()
			{
				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
				$user=$_SESSION['login_user'];
				$qry="select * from student_accounts where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$asd=$rows[1];
					$fname=$rows[2];
					$lname=$rows[3];
					$name=$fname." ".$lname;

				}
			
				$qry="select * from lcard where name='$name' AND status='Approve';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$str = $str.	"<tr>
					<td>".$rows['destination']."</td>
					<td>".$rows['departure']."</td>
					<td>".$rows['arrival']."</td>
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