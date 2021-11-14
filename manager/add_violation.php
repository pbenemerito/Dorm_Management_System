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
			border: none;
		}
		input[type=submit],input[type=text],input[type=inp],select{
			border: none;
			width: 350px;
			margin-left: 10px
		}
		hr{
			width: 90%;
			margin-top: 7px;
		}
		#content-container{
			width:400px;
			height:300px;
			background-color:#161d2f;
			border-radius:10px;
			position:fixed;
			margin-left:35%;
			margin-right:40%;
			margin-top:13%;
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
		#btnadd{

			position: absolute;
			margin-left: -875px;
			margin-top: 0px;
			background-color: #0f435b;
			width:100px;
		}
		#btnadd:hover{
			cursor: pointer;
			background-color: #055e88
		}
		form{
			margin-top: 30px
		}
		</style>
		<header><?php

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
			<a class="logo"><span>My Cooking Club<span></a>
			<font face="Century Gothic">
			<div id="logo"></div>
			<div id="nav">
				<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
						<li id="login"><a href=""><?php echo $name?></a>
							<ul>
								<li><a href="../logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul><
 					<BUTTON id="btnadd" TYPE="BUTTON" onclick="btn1()"><font color="#ffffff" size="3"><b>ADD</font></BUTTON>
							
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
	
       
			<div id="update-background" style="position:fixed;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:10;">
				<center>
			<?php
			while($rows = mysqli_fetch_array($result)){
			?>
		
				<div id="content-container">
				<span id="close" style="margin-left: 350px;font-size: 30px;cursor: pointer;"><a href="user_violationRecord.php"><b>&times;</b></span></a>
				<img src="../images/addinfo.png" width="220" height="60">
				<hr width="90%" color="#c2c2c2">
                <form id="edit" action="" method="post">
                   <input type="hidden" value="<?php echo $rows['1']?>" name="id">
                    <input type="hidden" value="<?php echo $rows['fname'].' '.$rows['lname']?>" name="name">
                    <input type="hidden" value="<?php echo $rows['room_number']?>" name="room">
                    <p>Violation</p>
				    <select id="Violation" name="violation">
				    <option>Select Violation</option>
				    <option value="Electric Violation">Electric Violation</option>
				    <option value="Dirty Kitchen">Dirty Kitchen</option>
				    <option value="Dirty Room">Dirty Room</option>
				    <option value="Curfew">Curfew</option>
				    </select><br><br><br>
                    <input type="submit" name="submit" value="✔">
                </form></center>
          </div>
          </div>
	<body>
<article><br><br>
	<b><div id="leftnav"><a href="user_home.php"><img src="../images/home1.png">&emsp;<font color="#ffffff">HOME</a></font></div>
	
		<div id="leftnav"><a href="user_studentRender.php"><img src="../images/studentreq.png">&emsp;<font color="#ffffff">STUDENT REQUEST</a></font></div>
		<div id="leftnav"><a href="user_areaRecord.php"><img src="../images/leavereq.png">&emsp;<font color="#ffffff">LEAVE REQUEST</a></font></div>
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
	<th>Violation</th>
	<th>Status</th>

		<?php
			if(isset($_POST['submit']))
			{
					$id=$_POST['id'];
					$name=$_POST['name'];
					$violation=$_POST['violation'];
					$room=$_POST['room'];
						
				include "connect.php";
			
				if(strlen($violation)!=0){
				$qry="insert into violations (student_id,name,violation,room_number) values('$id','$name','$violation','$room')";
				$result=mysqli_query($con,$qry);
				if($result)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'user_violationRecord.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'user_violationRecord.php'</script>";
			}
			}
			
			
			function displayimage()
			{
				include 'connect.php'; 
			
				$qry="select * from violations where status='Ongoing' or status='Standby'";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					//echo "$row[1]";
					//echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';
					
				$str = $str.	"<tr>
		
		<td>".$rows['name']."</td>
		<td>".$rows['violation']."</td>
		<td>".$rows['status']."</td>
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