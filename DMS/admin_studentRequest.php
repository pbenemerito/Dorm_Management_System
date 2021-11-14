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
		    height: 400px;
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
				$sql = "UPDATE student SET seen1=1";

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
		<div id="leftnav"><a href="admin_home.php"><img src="images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
		<div id="leftnav"><a href="admin_studentRequest.php"><img src="images/studentreq.png">&emsp;<font color="#ffffff"> REQUEST</a></font></div>
		<div id="leftnav"><a href="admin_studentRecord.php"><img src="images/record.png">&emsp;<font color="#ffffff"> RECORD</a></font></div>
		<div id="leftnav"><a href="admin_accountRecord.php"><img src="images/student.png">&emsp;<font color="#ffffff"> ACCOUNTS</a></font></div>
		<div id="leftnav"><a href="accounts_view.php"><img src="images/admin.png">&emsp;<font color="#ffffff">ADMINISTRATORS </a></font><br></div>
	</b>			
	</article>
	<aside>
	<div id="right">
		<table class="alternate">
	<tr>

	<th>Student ID</th>
	<th>First Name</th>
	<th>Middle Name</th>
	<th>Last Name</th>
	<th>Course</th>
	<th>Year</th>
	<th>Request</th>

		<?php
			if(isset($_POST['submit']))
			{
					$fname=$_POST['fname'];
					$mname=$_POST['mname'];
					$lname=$_POST['lname'];
					$course=$_POST['course'];
					$year=$_POST['year'];
						
				include "connect.php";
				if(strlen($ID)!=0 && strlen($fname)!=0 && strlen($lname)!=0 && strlen($lname)!=0 && strlen($course)!=0 && strlen($year)!=0){
				$qry="insert into student (student_id,fname,mname,lname,course,year) values($ID','$fname','$mname','$lname','$course','$year')";
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
			
			function displayimage()
			{
				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
				$qry="select * from student where request='Pending';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					//echo "$row[1]";
					//echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';
					
				$str = $str.	"<tr>
		
		<td>".$rows[1]."</td>
		<td>".$rows[2]."</td>
		<td>".$rows[3]."</td>
		<td>".$rows[4]."</td>
		<td>".$rows[5]."</td>
		<td>".$rows[6]."</td>
		<td>".$rows[7]."</td>
		
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