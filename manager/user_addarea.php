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
		    width: 500px;
		    height: 400px;
		    text-align: center;
		    margin: auto;
		    margin-top: 130px; 
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
		#table-wrapper {
			position: relative;
			width: 90%;
			margin-left: 23px
		}
		#table-scroll{
			height: 300px;
			overflow: auto;
			margin-top: 20px;
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
								<li><a href="../logout.php">LOGOUT</a></li>
							</ul>	
						</li>
					</ul>
					<BUTTON id="btnadd" TYPE="BUTTON" onclick="btn1()"><font color="#ffffff" size="3"><b>ADD</font></BUTTON>
							
				</nav>
			</div></font>
		</header>
	</head>
	
	<body>
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
				<span id="close" style="margin-left: 350px;font-size: 30px;cursor: pointer;"><a href="user_studentRender.php"><b>&times;</b></span></a>
				<img src="../addinfo.png" width="220" height="60">
				<hr width="90%" color="#c2c2c2">
                <form id="edit" action="" method="post">
                   <input type="hidden" value="<?php echo $rows['1']?>" name="id">
                    <input type="hidden" value="<?php echo $rows['name']?>" name="name">
                    <input type="hidden" value="<?php echo $rows['violation']?>" name="violation">
                    <input type="hidden" value="<?php echo $rows['room_number']?>" name="room">
                    <p>Area</p>
				    <select id="Area" name="Area">
				    <option >Select Area</option>
				    <?php
				    	$number=$rows['room_number'];
				    $abc="SELECT count(*) as fy FROM renderers WHERE area='Frontyard' AND status='Ongoing' AND room_number='$number';";
      				$result=mysqli_query($con,$abc);
      				if($result){
	        			while($row=mysqli_fetch_assoc($result))
	        				{
	          					$fy=$row['fy'];
	        				}
	      				}
	      			 $abc="SELECT count(*) as back FROM renderers WHERE area='Backyard' AND status='Ongoing' AND room_number='$number';";
      				$result=mysqli_query($con,$abc);
      				if($result){
	        			while($row=mysqli_fetch_assoc($result))
	        				{
	          					$back=$row['back'];
	        				}
	      				}
	      			$abc="SELECT count(*) as bed FROM renderers WHERE area='Bedroom' AND status='Ongoing' AND room_number='$number';";
      				$result=mysqli_query($con,$abc);
      				if($result){
	        			while($row=mysqli_fetch_assoc($result))
	        				{
	          					$bed=$row['bed'];
	        				}
	      				}
	      			$abc="SELECT count(*) as kit FROM renderers WHERE area='Kitchen' AND status='Ongoing' AND room_number='$number';";
      				$result=mysqli_query($con,$abc);
      				if($result){
	        			while($row=mysqli_fetch_assoc($result))
	        				{
	          					$kit=$row['kit'];
	        				}
	      				}
	      			$abc="SELECT count(*) as cr FROM renderers WHERE area='CR' AND status='Ongoing' AND room_number='$number';";
      				$result=mysqli_query($con,$abc);
      				if($result){
	        			while($row=mysqli_fetch_assoc($result))
	        				{
	          					$cr=$row['cr'];
	        				}
	      				}
	      			$abc="SELECT count(*) as br FROM renderers WHERE area='BR' AND status='Ongoing' AND room_number='$number';";
      				$result=mysqli_query($con,$abc);
      				if($result){
	        			while($row=mysqli_fetch_assoc($result))
	        				{
	          					$br=$row['br'];
	        				}
	      				}

	      			if($fy<3) {
       				echo " <option value=\"Frontyard\">Frontyard</option> ";
      				}
      				if($back<3) {
       				echo " <option value=\"Backyard\">Backyard</option> ";
      				}
      				if($bed<3) {
       				echo " <option value=\"Bedroom\">Bedroom</option>  ";
      				}
      				if($kit<3) {
       				echo " <option value=\"Kitchen\">Kitchen</option> ";
      				}
      				if($cr<3) {
       				echo " <option value=\"CR\">Comfortroom</option> ";
      				}
      				if($br<3) {
       				echo " <option value=\"BR\">Bathroom</option> ";
      				}
				    
				   
				    
				    ?>
				    </select><br><br><br>
                    <input type="submit" name="submit" value="✔">
                </form></center>
          </div>


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
		<?php 

			$sql = "SELECT * FROM lcard WHERE  status='Pending' AND seen = 0";
			$result = mysqli_query($con, $sql);

			if($result) {
				if(mysqli_num_rows($result) > 0) {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><img src=\"../images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE REQUEST<img src='../notif.png'/></a></font></div>";
				} else {
					echo "<div id=\"leftnav\"><a href=\"user_lcard.php\"><img src=\"../images/leavereq.png\">&emsp;<font color=\"#ffffff\">LEAVE REQUEST</a></font></div>";
				}
			}
		?>
		<div id="leftnav"><a href="user_studentRender.php"><img src="../images/render.png">&emsp;<font color="#ffffff">RENDERERS</a></font></div>
		<div id="leftnav"><a href="user_areaRecord.php"><img src="../images/grades.png">&emsp;<font color="#ffffff">AREA GRADES</a></font></div>
		<div id="leftnav"><a href="user_violationRecord.php"><img src="../images/violation.png">&emsp;<font color="#ffffff">VIOLATIONS </a></font><br></div>
	<div id="leftnav"><a href="user_furlough.php"><img src="../images/furlough.png">&emsp;<font color="#ffffff">FURLOUGH</a></font><br></div>
		<div id="leftnav"><a href="user_studentRecord.php"><img src="../images/student.png">&emsp;<font color="#ffffff">STUDENT RECORD </a></font><br></div>
		
	</b>
	</article>
	<aside>
	<div id="right">
	
		<table>
	<tr>

	<th>NAME</th>
	<th>VIOLATION</th>
	<th>AREA</th>
	<th colspan="2"><center>ACTION</center></th>

		<?php
			if(isset($_POST['submit']))
			{
					$name=$_POST['name'];
					$lname=$_POST['lname'];
					$area=$_POST['area'];
					
						
				include "connect.php";
			

				$qry="select * from render;";
								$str="";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									if($name==$rows[3] && $lname==$rows[4]){
									echo "<script>window.alert('Student is already added!')
									document.location = 'user_studentRender.php'</script>";

								mysqli_close($con);

								}
								
							}
				
				if(strlen($name)!=0 && strlen($lname)!=0 && strlen($area)){
				$qry="insert into render (name,lname,area) values('$name','$lname','$area')";
				$result=mysqli_query($con,$qry);
				if($result)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'user_studentRender.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'user_studentRender.php'</script>";
			}
			}
			
			function displayimage()
			{

				include "connect.php";

				$qry="select * from renderers where status='Ongoing'";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
				
					$str = $str.	"<tr>
					<td>".$rows['name']."</td>
					<td>".$rows['violation']."</td>
					<td>".$rows['area']."</td>
					<td><button><a href = 'user_renderers.php?id=".$rows['0']."'><center><img src='images/app.png'/></a></button>&emsp;
					<button><a href = 'user_renderers1.php?id=".$rows['0']."'><center><img src='images/disapp.png'/></a></button></td>
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