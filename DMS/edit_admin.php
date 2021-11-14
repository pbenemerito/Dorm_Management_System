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

			background-color: #0e425a;
			position: absolute;
			margin-left: -870px;
			margin-top: 0px;
			width:100px;
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
										<input type="text" name="username" placeholder="Username"><br><br>
										<input type="text" name="password" placeholder="Password"><br><br>
										<select id="type" name="type" placeholder="Dorm Type">
										<option placeholder="Dorm Type">Dorm Type</option>
						      			<option value="MD">MD</option>
						      			<option value="WD">WD </option>
						    			</select><br><br>
						    			<input class="inp" type="text" name="area" placeholder="Area">
										<br>
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
	$sql = "SELECT * FROM user WHERE ID = $ID1";
	$result = mysqli_query($con,$sql);
?>
	
       
			<div id="update-background" style="position:absolute;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:10;">
				<center>
				<?php
		while($rows = mysqli_fetch_array($result)){
			?>
				<div id="content-container">
				<span id="close" style="margin-left: 350px;font-size: 30px;cursor: pointer;"><a href="accounts_view.php"><b>&times;</b></span></a>
                <form id="edit" action="" method="post">
                    <input type="hidden" value=".$rows[0]." name="id">
                    <input type="inp" placeholder="username" name="username" value="<?php echo $rows['Username']?>"><br><br>
                    <input type="inp" placeholder="password" name="password" value="<?php echo $rows['Password']?>"><br><br>
                    <input type="inp" placeholder="type" name="area"  value="<?php echo $rows['area']?>"><br><br>
                    <input type="inp" placeholder="area" name="type"  value="<?php echo $rows['type']?>"><br><br>
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

	<th>Username</th>
	<th>Password</th>
	<th>Type</th>
	<th>Area</th>

	<th colspan="2"><center>ACTION</center></th>

		<?php
			if(isset($_POST['submit']))
			{
					$username=$_POST['username'];
					$password=$_POST['password'];
					$type=$_POST['type'];
					$area=$_POST['area'];
						
				include "connect.php";
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
				if(strlen($type)!=0 && strlen($area)!=0&& strlen($username)!=0 && strlen($password)!=0){
				$qry="update user set Username='$username',Password='$password',area='$area',type='$type',dorm='$dorm' where ID='$ID1'";
				$result1=mysqli_query($con,$qry);
				if($result1)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'accounts_view.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'accounts_view.php'</script>";
			}
		}
			
			function displayimage()
			{
				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
				$qry="select * from user;";
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
		<td><button><a href = 'edit_student.php?id=".$rows['0']."'><center><img src='up.png'/></a></button></td>
		<td><button><a href = 'delete.php?id=".$rows['0']."'><center><img src='del.png'/></a></button></td>
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