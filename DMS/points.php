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
				$qry="select * from student_accounts where Username='$user';";
				
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$fname = $rows['fname'];
					$lname = $rows['lname'];
					$name=$fname." ".$lname;
					$student_id = $rows['student_id'];
					
				}
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
	<b><?php 
			include 'connect.php';

			$sql = "SELECT dorm_number, room_number FROM student WHERE student_id = {$student_id}";
			$result = mysqli_query($con, $sql);

			if($result) {
				$row = mysqli_fetch_assoc($result);

				$dormNum = $row['dorm_number'];
				$roomNum = $row['room_number'];
			}

			mysqli_free_result($result);

			$sql = "SELECT * FROM grade WHERE dorm_number = {$dormNum} AND room_number = {$roomNum} AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"grade.php\"><font color=\"#ffffff\">CURRENT GRADES<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"grade.php\"><font color=\"#ffffff\">CURRENT GRADES</a></font></div>";
				}
			}
		?>
		<?php 
			include 'connect.php';

			$sql = "SELECT * FROM lcard WHERE name = '$name' AND status = 'Approve' AND seen = 0 ";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav_lc\"><a href=\"\"><font color=\"#ffffff\">LEAVE FORM<img src='notif.png'/></a></font><br>
						<a href=\"lcard.php\"><font color=\"#ffffff\" size=\"2\">&emsp;APPROVE</a></font><br>
						<a href=\"lcard1.php\"><font color=\"#ffffff\" size=\"2\">&emsp;PENDING</a></font>
						<a href=\"lcard2.php\"><font color=\"#ffffff\" size=\"2\">&emsp;DISAPPROVE</a></font><br></div>";
				} else {
					echo "<div id=\"leftnav_lc\"><a href=\"\"><font color=\"#ffffff\">LEAVE FORM</a></font><br>
						<a href=\"lcard.php\"><font color=\"#ffffff\" size=\"2\">&emsp;APPROVE</a></font><br>
						<a href=\"lcard1.php\"><font color=\"#ffffff\" size=\"2\">&emsp;PENDING</a></font>
						<a href=\"lcard2.php\"><font color=\"#ffffff\" size=\"2\">&emsp;DISAPPROVE</a></font><br></div>";
				}
			}
		?>
		<div id="leftnav"><a href="ironing.php"><font color="#ffffff">IRONING</a></font></div>
		<div id="leftnav"><a href="furlough.php"><font color="#ffffff">FURLOUGH</a></font></div>
		
	</b>
	</article>

	<aside>
	<div id="right">
		<table class="alternate">
	<tr>

	<th>No. of Merits</th>
	<th>No. of Demerits</th>
		<?php
		
		
			function display()
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
					
				}
				$qry="select * from student where student_id='$asd';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$fname=$rows['fname'];
					$lname=$rows['lname'];
				}

				$qry="SELECT count(*) as a FROM merits WHERE fname='$fname' and lname='$lname'";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$merit=$rows['a'];
				$str = $str.	"<tr>
				<td>".$merit."</td>
				"
				;
					
				}

				$qry="SELECT count(*) as b FROM demerits WHERE fname='$fname' and lname='$lname'";
				$str1="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
				$str1 = $str."
				<td>".$rows['b']."</td>
				</tr>"
				;
					
				}
				
				mysqli_close($con);
				
		 echo $str1;
			}
			
			display();
		?>
		</table>
		<br><br><br>
		<table>
		<tr>

	<th>Volations</th>
			<?php

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
					
				}
		$qry="select * from student where student_id='$asd';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$fname=$rows['fname'];
					$lname=$rows['lname'];
					$name=$fname." ".$lname;
				}

		$qry="SELECT * FROM violations WHERE fname='$fname' and lname='$lname'";
				$str2="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
				$str2 = $str2."
				<tr>
				<td>".$rows['violation']."</td>
				</tr>
				"
				;
					
				}
				mysqli_close($con);
				
		 echo $str2;

		?>
		</table>
				</form>
</div>
</aside>
	</body>
</html>