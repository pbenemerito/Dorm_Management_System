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
		    width: 430px;
		    height: 480px;
		    text-align: center;
		    margin: auto;
		    margin-top: 60px;
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
		
		#btnadd{

			position: absolute;
			margin-left: -870px;
			margin-top: -16px;
			width:100px;
			border-right: 1px solid #c2c2c2; 

				background-color: #0e425a;
			cursor: pointer;
		}
		#btnadd:hover{
			cursor: pointer;
			background-color: #055e88
		
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
			background-color: #055e88
		
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
					$area = $rows['area'];
					$type = $rows['type'];

					
				}
		?>
			<font face="Century Gothic">
			<div id="nav">
					<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
						<li id="login"><a href=""><?php echo $fname?></a>
							<ul>
								<li><a href="settings.php">EDIT ACCOUNT</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>	
						</li>
					</ul>
					<form action="" method="post">
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
										<input type="text" name="id" placeholder="Student ID"><br><br>
										<input type="text" name="fname" placeholder="First Name"><br><br>
										<input type="text" name="mname" placeholder="Middlename"><br><br>
										<input type="text" name="lname" placeholder="Lastname"><br><br>
										<input type="text" name="course" placeholder="Course"><br><br>
										<input type="text" name="year" placeholder="Year"><br><br>
										<select id="type" name="type" placeholder="Dorm Type">
										<option placeholder="Dorm Type">Dorm Type</option>
						      			<option value="MD">MD</option>
						      			<option value="WD">WD </option>
						    			</select><br><br>
										<input type="text" name="dorm" placeholder="Dorm"><br><br>
						    			<input type="text" name="room" placeholder="Room">
										<br>
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
		<div id="leftnav"><a href="admin_home.php"><img src="images/home.png">&emsp;<font color="#ffffff">HOME</a></font></div>
			<?php 
			include 'connect.php';


			$sql = "SELECT * FROM student WHERE request='Pending' AND seen1 = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"admin_studentRequest.php\"><img src=\"images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"admin_studentRequest.php\"><img src=\"images/studentreq.png\">&emsp;<font color=\"#ffffff\">STUDENT REQUEST</a></font></div>";
				}
			}
			?>
		<div id="leftnav"><a href="admin_studentRecord.php"><img src="images/record.png">&emsp;<font color="#ffffff">STUDENT RECORD</a></font></div>
		<div id="leftnav"><a href="admin_accountRecord.php"><img src="images/furlough.png">&emsp;<font color="#ffffff">STUDENT ACCOUNTS</a></font></div>
		<div id="leftnav"><a href="accounts_view.php"><img src="images/furlough.png">&emsp;<font color="#ffffff">ADMINISTRATORS </a></font><br></div>
		
	
	</b>			
	</article>
	<aside>
	<div id="right">
	
		<table class="alternate">
	<tr>

	
	<th>Dorm</th>
	<th>Room</th>
	<th>Student ID</th>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Last Name</th>
	<th>Course</th>
	<th>Year</th>

	<th colspan="2"><center>ACTION</center></th>

		<?php
				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
				$term = $_POST['term'];


			$str = "";
	 		$sql = "SELECT * FROM student WHERE fname LIKE '%" . $term . "%'  OR mname LIKE '%" . $term . "%'  OR lname LIKE '%" . $term . "%'"  ;
    		if($result = mysqli_query($con, $sql)){
        		if(mysqli_num_rows($result) > 0){
            		while($rows = mysqli_fetch_array($result)){

              		$str = $str.	"<tr>
					<td>".$rows[8]."</td>
					<td>".$rows[9]."</td>
					<td>".$rows[1]."</td>
					<td>".$rows[2]."</td>
					<td>".$rows[3]."</td>
					<td>".$rows[4]."</td>
					<td>".$rows[5]."</td>
					<td>".$rows[6]."</td>
					<td><button><a href = 'edit_account.php?id=".$rows['0']."'><center><img src='up.png'/></a></button>&emsp;
					<button><a href = 'delete_user.php?id=".$rows['0']."'><center><img src='del.png'/></a></button></td>
					</tr>"
		;			
		;			
				}
				mysqli_close($con);

		 echo $str;
			}
				
			}

			
		
			if(isset($_POST['submit']))
			{
					$ID=$_POST['id'];
					$fname=$_POST['fname'];
					$mname=$_POST['mname'];
					$lname=$_POST['lname'];
					$course=$_POST['course'];
					$year=$_POST['year'];
					$type=$_POST['type'];
					$area=$_POST['dorm'];
					$room=$_POST['room'];
					if($type=="MD"){
										if($area=="4" || $area=="5"){
													$dorm="4-5";
										}	
										if($area=="6" || $area=="7"){
													$dorm="6-7";
										}
										if($area=="8" || $area=="9"){
													$dorm="8-9";
										}
										if($area=="10" || $area=="11"){
													$dorm="10-11";
										}
									}
					elseif($type=="WD"){
										if($area=="1"){
												$dorm="1";
										}
										if($area=="2"){
												$dorm="2";		
										}
										if($area=="3"){
												$dorm="3";
										}
										if($area=="4"){
												$dorm="4";
										}
										if($area=="5"){
												$dorm="5";
										}
										if($area=="6"){
												$dorm="6";
										}
									}
						
				include "connect.php";
					$qry="select * from student;";
								$str="";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									if($ID==$rows[1]){
									echo "<script>window.alert('STUDENT ID ALREADY EXIST')
									document.location = 'admin_studentRecord.php'</script>";

								mysqli_close($con);

								}
							}
				if(strlen($ID)!=0 && strlen($fname)!=0 && strlen($lname)!=0 && strlen($lname)!=0 && strlen($course)!=0 && strlen($year)!=0&& strlen($type)!=0&&  strlen($area)!=0 && strlen($room)!=0){
				$qry="insert into student (student_id,fname,mname,lname,course,year,dorm_number,room_number,dorm_type,dorm,request,seen,seen1) values('$ID','$fname','$mname','$lname','$course','$year','$area','$room','$type','$dorm','Approve',1,1)";
				$result=mysqli_query($con,$qry);
				if($result)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'admin_studentRecord.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'admin_studentRecord.php'</script>";
			}
			}
			
			
		?>

		</form>
		
	
		</table>
</div>
</aside>
	</body>
</html>