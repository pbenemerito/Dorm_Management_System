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
		<style>
		article{
			padding: 3% 2% 2% 3%;
			background-color: #f2f2f2;
			float: left;
			height: 604px;
			width: 17.5%;
		}
		aside{
			background-color: #e8e8e6;
			padding: 3% 2% 2% 3%;
			height: 604px;
		}
		#left{
			background-color: #cdcdcf;
			height: 540px;
			margin-left: -13px;
		}
		#right{
			background-color: #ffffff;
			height: 580px;
			margin-top: 15px;
			margin-left: 275px;
			padding: 10px;
			width: 78%;
		}		
		#welcome{
			background-color: #cdcdcf;
			height: 40px;
			margin-top: 10px;
			margin-bottom: 10px;
			margin-left: -13px;
			text-align: center;
			padding-top: 20px;
			font-weight: bold;
		}	
		nav {
			text-align: center;
			background-color: #075e89; 
			position: relative; 
			padding: 0px 60px 0px 610px;
			width: 100%;
			position: fixed;
			z-index: 2;
			box-shadow: 0px 0px 0px 4px rgba(0,0,0,.3); 
			font-weight: bold;  
		}	

		nav ul li  a {				
		display: inline-block;
		color: #ffffff;
		padding: 10px 15px;
		text-decoration: none;
		width: 165px;
		}
		nav ul ul {
			display: none;
			position: absolute;
			top: 100%;
			background-color: #075e89;
			width: 130px;
		}
		nav ul ul li{
			position: relative;
			background-color: #075e89;
			width: 195px;
		}
		nav ul ul li:hover{
			background-color: #79a6d0;
			cursor: pointer;
		}
		body{
			font-family: century gothic;
		}
		input[type=text], select {
			width: 80%;
		    height: 35px;
		    margin: -10px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}
		input[type=file] {
		    width: 80%;
		    background-color: #4CAF50;
		    color: white;
		    margin-left: -10px;
		}

		input[type=submit] {
		    width: 80%;
		    background-color: #4CAF50;
			height: 35px;
		    color: white;
		    margin-left: -10px;
		}input[type=submit]:hover {
		    background-color: #45a049;
		}
		div {
		    border-radius: 5px;
		    background-color: #f2f2f2;
		}
		table{
			width: 100%;
		}
		td,th{
			text-align: center;
			width: 230px;
			height: 40px;
			color:#000000;
			font-family: century gothic;
		}
		th{
			font-size: 110%;
			background-color: #74a7d4;
			color: #ffffff;
		}
		button{
			background: none;
			border: none;				
		}
	</style>
		<header>
			<font face="Century Gothic">
			<div id="nav">
				<nav>
					<ul>
						<li class="border"><a href="admin_studentRequest.php">REQUEST</a></li>
						<li class="border"><a href="">STUDENT</a>
							<ul>
								<li class="border"><a href="admin_studentRecord.php">RECORD</a></li>
								<li class="border"><a href="admin_accountRecord.php">ACCOUNTS</a></li>
							</ul>
						</li>
						<li class="border"><a href="accounts_view.php"> ADMINS </a></li>
						<li id="login"><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>
			</div></font>
		</header>
	</head>
	
	<body>
	<article>
	<div id="welcome">
	<?php
		echo "Welcome ";
		echo $_SESSION['login_user'];
			ini_set('mysql.connection_timeout',300);
			ini_set('default_socket_timeout',300);
		echo "!"
	?>
	</div>
	<div id="left">
	<center>
		<form method="post" enctype="multipart/form-data">
		<br/>
			
			<p>Student ID </p>
		<input type="text" name="id">
			<p>Student Name </p>
		<input type="text" name="name">
			<p>Area</p> 
		<input type="text" name="area">
		
		<br><br> 
		<input type="submit" name="submit" value="ADD" />
		</center>
	</div>
	</article>	
	<aside>
	<div id="right">
		<table>
	<tr>

	<th>STUDENT NAME</th>
	<th>AREA</th>
	<th>STATUS</th>
	<th colspan="2"><center>ACTION</center></th>

		<?php
			if(isset($_POST['submit']))
			{
					$id=$_POST['id'];
					$name=$_POST['name'];
					$area=$_POST['area'];
					
						
				include "connect.php";
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$pos=$rows['3'];
				}
				if(strlen($name)!=0 && strlen($area)){
				$qry="insert into render (student_id,dorm_number,name,area) values('$id','$pos','$name','$area')";
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

				$con = mysqli_connect("localhost","root","","dorm");
				if(!$con)
				die('Connection Error: ' . mysqli_error($con));
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$area=$rows['3'];
				}
				$qry="select * from render where dorm_number='$area'";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					//echo "$row[1]";
					//echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';
					
				$str = $str.	"<tr>
		
		<td>".$rows[3]."</td>
		<td>".$rows[4]."</td>
		<td>".$rows[5]."</td>
		<td><button><a href = 'edit_render.php?id=".$rows['0']."'>Clear</a></button></td>
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