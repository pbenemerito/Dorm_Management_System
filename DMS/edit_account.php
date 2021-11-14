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
					$fname = $rows['Username'];
					$area = $rows['area'];
					$type = $rows['type'];

					
				}
		?>
			<a class="logo"><span>My Cooking Club<span></a>
			<font face="Century Gothic">
			<div id="logo"></div>
			<div id="nav">
				<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
						<li id="login"><a href=""><?php echo $fname?></a>
							<ul>
								<li><a href="settings2.php">ACCOUNT SETTINGS</a></li>
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul><
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
	$sql = "SELECT * FROM student_accounts WHERE account_id = $ID1";
	$result = mysqli_query($con,$sql);
?>
	
       
			<div id="update-background" style="position:absolute;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:10;">
				<center>
				<?php
		while($rows = mysqli_fetch_array($result)){
			?>
				<div id="content-container">
				<span id="close" style="margin-left: 350px;font-size: 30px;cursor: pointer;"><a href="admin_accountRecord.php"><b>&times;</b></span></a>
                <form id="edit" action="" method="post">
                    <input type="hidden" value=".$rows[0]." name="id">
                    <input type="inp" placeholder="Firstname" name="fname" value="<?php echo $rows['fname']?>"><br><br>
                    <input type="inp" placeholder="Lastname" name="lname" value="<?php echo $rows['lname']?>"><br><br>
                    <input type="inp" placeholder="Course" name="username"  value="<?php echo $rows['Username']?>"><br><br>
                    <input type="inp" placeholder="Year" name="password"  value="<?php echo $rows['Password']?>"><br><br>
                    <input type="submit" name=" submit" value="✔">
                </form></center>
          </div>
	<body>
	<article><br><br>
	<b>
		<div id="leftnav"><a href="admin_home.php"><font color="#ffffff">HOME</a></font></div>
			<?php 
			include 'connect.php';


			$sql = "SELECT * FROM student WHERE request='Pending' AND seen1 = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"admin_studentRequest.php\"><font color=\"#ffffff\">STUDENT REQUEST<img src='notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"admin_studentRequest.php\"><font color=\"#ffffff\">STUDENT REQUEST</a></font></div>";
				}
			}
			?>
		<div id="leftnav"><a href="admin_studentRecord.php"><font color="#ffffff">STUDENT RECORD</a></font></div>
		<div id="leftnav"><a href="admin_accountRecord.php"><font color="#ffffff">STUDENT ACCOUNTS</a></font></div>
		<div id="leftnav"><a href="accounts_view.php"><font color="#ffffff">ADMINS </a></font><br></div>
	
	
</div>
		</div>
	
	</b>			
	</article>
	<aside>
	<div id="right">
		<table class="alternate">
	<tr>

					<th>STUDENT ID</th>
					<th>FIRST NAME</th>
					<th>LAST NAME</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
	<th colspan="2"><center>ACTION</center></th>

		<?php
			if(isset($_POST['submit']))
			{
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$username=$_POST['username'];
					$password=$_POST['password'];
						
				include "connect.php";
				if(strlen($fname)!=0 && strlen($lname)!=0&& strlen($username)!=0 && strlen($password)!=0){
				$qry="update student_accounts set fname='$fname',lname='$lname',username='$username',password='$password' where account_id='$ID1'";
				$result1=mysqli_query($con,$qry);
				if($result1)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'admin_accountRecord.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'admin_accountRecord.php'</script>";
			}
		}
			
			function displayimage()
							{
								$con = mysqli_connect("localhost","root","","dorm");
								if(!$con)
								die('Connection Error: ' . mysqli_error($con));
								$qry="select * from student_accounts;";
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
						<td>".$rows[6]."</td>
						<td>".$rows[7]."</td>
						<td><button><a href = 'edit_account.php?id=".$rows['0']."'><center><img src='up.png'/></a></button></td>
						<td><button><a href = 'delete_user.php?id=".$rows['0']."'><center><img src='del.png'/></a></button></td>
		
						
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