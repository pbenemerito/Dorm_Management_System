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
		    height: 650px;
		    text-align: center;
		    margin: auto;
		    margin-top: -90px; 
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
		.not-active{
			pointer-events: none;
			cursor: default;
		}

		#date1::-webkit-inner-spin-button,
		#date1::-webkit-outer-spin-button,
		#date2::-webkit-inner-spin-button,
		#date2::-webkit-outer-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}
		#date1{
				margin-left: -1170px;
				margin-top: 0px;
				width: 150px;
				height: 40px;
				position: absolute;
				font-size: 13px;
				outline: 0;
				border-radius: 0;
				padding: 10px;
		}
		#date2{
				margin-left: -1020px;
				margin-top: 0px;
				width: 150px;
				height: 40px;
				position: absolute;
				font-size: 13px;
				outline: 0;
				border-radius: 0;
				padding: 10px;
				border-left: 1px solid #c2c2c2; 
		}
		#submit{
				position: absolute;
				margin-left: -870px;
				width: 100px;
				height:40px;
				background-color: #0e425a;
				border-right: 1px solid #c2c2c2; 
		}
		#submit:hover{
			cursor: pointer;
			background-color: #055e88;
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
					$fname = $rows['Username'];
					
				}
				$sql = "UPDATE lcard SET seen=1";

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
					<form action="user_lcardview.php" method="post">
 							<input type="date" id="date1" name="term" placeholder="  Search Firstname, Middlename or Lastname"/>
 							<input type="date" id="date2" name="term1" placeholder="  Search Firstname, Middlename or Lastname"/>
							<input type="submit" id="submit" name="submit1" value="Display">
 					</form>
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
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><img src=\"../images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST<img src='../notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_studentRequest.php\"><img src=\"../images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST</a></font></div>";
				}
			}
		?>
		<div id="leftnav"><a href="user_lcard.php"><img src="../images/leavereq.png">&emsp;<font color="#ffffff">LEAVE REQUEST</a></font></div>
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


	<th>Name</th>
	<th>Destination</th>
	<th>Departure</th>
	<th>Status</th>
	<th>Arrival</th>
	<th colspan="3"><center>ACTION</center></th>

		<?php
		include 'connect.php';
				$term = $_POST['term'];
				$term1 = $_POST['term1'];
				
			
			$str = "";
	 		$sql = "SELECT * FROM lcard where DATE(departure) >= '$term' AND DATE(departure) <= '$term1'";
    		if($result = mysqli_query($con, $sql)){
        		if(mysqli_num_rows($result) > 0){
            		while($rows = mysqli_fetch_array($result)){

              		if($rows['status']=='Pending'){
					$str = $str.	"<tr>
					<td>".$rows['name']."</td>
					<td>".$rows['destination']."</td>
					<td>".$rows['departure']."</td>
					<td>".$rows['status']."</td>
					<td>".$rows['arrival']."</td>
					<td><button><a href = 'edit_userlcard.php?id=".$rows['0']."'><center><img src='../images/app.png'/></a></button>&emsp;
					<button><a href = 'edit_userlcard1.php?id=".$rows['0']."'><center><img src='../images/disapp.png'/></a></button>&emsp;
					<button disabled value='true'><a href = 'edit_arrival.php?id=".$rows['0'].
					"' class='not-active'><img src='../images/arrival.png'></a></button></td>
					</tr>"
					;

					}
					
					elseif(strlen($rows['arrival'])!=0){
						$str = $str.	"<tr>
						<td>".$rows['name']."</td>
						<td>".$rows['destination']."</td>
						<td>".$rows['departure']."</td>
						<td>".$rows['status']."</td>
						<td>".$rows['arrival']."</td>
						<td><button class='not-active'><a href = 'edit_userlcard.php?id=".$rows['0']."'><center><img src='../images/app.png'/></a></button>&emsp;
						<button class='not-active'><a href = 'edit_userlcard1.php?id=".$rows['0']."'><center><img src='../images/disapp.png'/></a></button>&emsp;
						<button class='not-active'><a href = 'edit_arrival.php?id=".$rows['0'].
						"'><img src='../images/arrival.png'></a></button></td>
						</tr>"
						;
					}
					
		
					elseif($rows['status']=='Approve'){
					$str = $str.	"<tr>
					<td>".$rows['name']."</td>
					<td>".$rows['destination']."</td>
					<td>".$rows['departure']."</td>
					<td>".$rows['status']."</td>
					<td>".$rows['arrival']."</td>
					<td><button class='not-active'><a href = 'edit_userlcard.php?id=".$rows['0']."'><center><img src='../images/app.png'/></a></button>&emsp;
					<button class='not-active'><a href = 'edit_userlcard1.php?id=".$rows['0']."'><center><img src='../images/disapp.png'/></a></button>&emsp;
					<button><a href = 'edit_arrival.php?id=".$rows['0'].
					"' ><img id='arrival' src='../images/arrival.png'></a></button></td>
					</tr>"
					;

					}

				}

			}
		}

		 echo $str;
			
			
		?>

		</form>
		
	
		</table>
</div>
</aside>
	</body>
</html>