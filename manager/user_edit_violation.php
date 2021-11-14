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
			margin-top:8%;
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
							<div id="myModal1" class="modal">
								<div class="modal-content1">
								    	<div class="modal-header">
								      		<span class="close" onclick="span1()">&times;</span>
								    	</div>
								    <img src="../images/addinfo.png" width="220" height="60">
									<hr width="90%" color="#c2c2c2">
								   <form method="post" >
										<br><br>
										<input type="text" name="id" placeholder="ID"><br><br><br>
										<input type="text" name="fname" placeholder="Firstname"><br><br><br>
										<input type="text" name="mname" placeholder="Middlename"><br><br><br>
										<input type="text" name="lname" placeholder="Lastame"><br><br><br>
										<input type="text" name="course" placeholder="Course"><br><br><br>
										<input type="text" name="room" placeholder="Room number"><br><br><br>
										<select id="year" name="year">
									      <option value="">Year</option>
									      <option value="1st">1st</option>
									      <option value="2nd">2nd </option>
									      <option value="3rd">3rd</option>
									      <option value="4th">4th</option>
									    </select><br><br>
										<input type="submit" name="submit" value="ADD" />
									</form></center> </p>
							    </div>
							</div>
				</nav>
			</div></font>
		</header>
	</head>
	<?php	

	include "connect.php";
	$_GET['id'];
	$ID1=$_GET['id'];
	$sql = "SELECT * FROM violations WHERE ID = $ID1";
	$result = mysqli_query($con,$sql);
?>
	
       
			<div id="update-background" style="position:absolute;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:10;">
				<center>
				<?php
		while($rows = mysqli_fetch_array($result)){
			?>
				<div id="content-container">
				<span id="close" style="margin-left: 350px;font-size: 30px;cursor: pointer;"><a href="user_violationRecord.php"><b>&times;</b></span></a>
                <form id="edit" action="" method="post">
                   <input type="hidden" value=".$rows[0]." name="id">
                    <input type="inp" placeholder="Lastname" name="name" value="<?php echo $rows['name']?>"><br><br>
                    <input type="inp" placeholder="Year" name="violation"  value="<?php echo $rows['violation']?>"><br><br>
                    <input type="submit" name=" submit" value="✔">
                </form></center>
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
	<th colspan="2"><center>ACTION</center></th>

		<?php
			if(isset($_POST['submit']))
			{
					$name=$_POST['name'];
					$violation=$_POST['violation'];
						
				include "connect.php";
				if(strlen($name)!=0  && strlen($violation)!=0){
				$qry="update violations set name='$name',violation='$violation' where ID='$ID1'";
				$result1=mysqli_query($con,$qry);
				if($result1)
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
			include "connect.php";
			
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
		<td><button><a href = 'edit_violation.php?id=".$rows['0']."'><center><img src='../images/up.png'/></a></button>&emsp;
		<button><a href = 'delete.php?id=".$rows['0']."'><center><img src='../images/del.png'/></a></button></td>
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