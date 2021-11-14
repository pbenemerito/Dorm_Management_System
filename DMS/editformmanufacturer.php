<?php
	
	session_start();
	if(!isset($_SESSION['Login_user']))
	{
		header("location:index.php");
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update Manufacturer</title>
	<style>

	body
	{
		background-color: #f1f4f7;
		font-family: 'Arimo', Arial , sans-serif;
		margin: 0 auto;
		height: 100%;
	}

	header
	{
		width: 100%;
		height: 60px;
		margin-top: 0;
		color: white;
		position: fixed;
		background-color: #222;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);	
		top: 0;
		z-index: 1;
	}

	nav
	{
		float: right;
		padding-right: 30px;
	}

	nav ul
	{
		line-height:25px;
		list-style: none;
		padding-left: 0;
	}

	label:hover
	{
		cursor: pointer;
		background-color: #605c5c;

	}

	nav ul ul
	{
		margin-top: 10px;
		background-color: #eee;
		border-radius: 5px;
		text-align: center;	
	}

	li{
		font-family: Arial Rounded MT Bold;
		font-size:17px;
	}

	nav ul ul li
	{
		height: 40px;
		line-height: 40px;
	}

	nav ul ul li a
	{

		text-decoration: none;
		color: #000000;
	}

	nav ul ul li:hover
	{
		cursor: pointer;
		
	}	

	.menu ul 
	{
		display: none;
	}

	.menu ul li:hover
	{
		cursor: pointer;
		background-color: #605c5c;
	}	

	#navToggle
	{
		display: none;
	}

	#navToggle:checked ~ .menu ul
	{
		display: block;
	}


	.side-nav
	{
		width:20%;
		background: #2d2d2d;
		line-height: 25px;
		text-align: center;
		color: white;
		display: block;
		position: fixed;
		top: 60px;
		height: 100%;

	}	

	.side-nav h3
	{
		border-top: solid 1px white;
		text-align: left;
	}

	#title
	{
		margin-top: 20px;
		margin-left: 0;
		z-index: 2;
		height: 220px;
	}

	#list-nav
	{
		list-style: none;
		padding-left: 0;
	}

	#list-nav li
	{
		line-height: 10px;
		color: #d49b1b;
		text-align: left;
		height: 40px;
		padding-left: 20px;
	}

	hr
	{
		margin: 0;
	}

	#list-nav li:hover
	{
		transition: .5s;
		background-color:  #f1f4f7;
		cursor: pointer;
	}

	#list-nav img
	{
		margin-top: 5px;
		width: 45px;
		height: 30px;
		margin-bottom: -9px;
		padding-right: 10px;
	}
	
	#list-nav a{

		text-decoration:none;
	}

	section
	{
		background-color: #f1f4f7;
		width: 80%;
		margin-top: 4%;
		float: right;
		height: 605px;
	}
	.location ul li{
		display: inline-block;
		width: 30px;
		font-size: 18px;
		margin-left: 8px;
		margin-top: -5px;
	}
	.location img{
		height:18px;
		width:24px;
		top:0px;
		position: relative;
	}


	#divider
	{
		color: #777777;
		position: relative;
		top:-3px;
		width: 350px;
		margin-left:0;
	}


	article
	{
		padding-top: 30px;
		padding-bottom: 10px;
		padding-left: 0;

		background-color: #e9ecf2;
	}

	.location ul
	{
		margin: 0;
		padding-left: 10px;
	}

	.location h3{
		padding-left:5px;
	}

	.content-container
	{
		
		font-size: 30px;
		padding-top: 17px;
		padding-left: 15px;
		left: 275px;
	}

	.content-container h1
	{
		margin: 0;
		color: #777777;
	}

	.content-dashboard{
		background-color: white;
		width: 43%;
		margin-top: 22px;
		margin-bottom: -15px;
		display: inline-block;
		margin-right: 70px;

	}

	.content-dashboard input:hover{
		color: blue;
	}

	.image-container{
		height:90px;
		width:160px;
		background-color: pink;
		float:left;


	}
	.content-dashboard h6{
		margin-top:0;
		margin-bottom:0;
		margin: 23px;
		
	}

	.image-container img{
		width:160px;
		height: 90px;

	}
	.table-manufacturer{
		font-size: 18px;

	}
	.table-model{
		font-size: 18px;

	}
	tr:nth-child(even) {
				background-color: #dddddd;
	}
	tr td{
		padding-top:5px;
		padding-bottom:2px;	
	}

	.actionbutton input{
		background-color: green;
		border-style: none;
		margin-top:10px;
		padding-top:10px;
		padding-bottom:10px;
		width: 90px;
		border-radius: 5px;
		cursor: pointer;
	}
	
	#exitToggle
	{
		display: block;
	}

	#exitToggle: checked ~ .add-model-background
	{
		display: none;
		background-color: green;
	}


	</style>


	</head>

	<body>


		<header>	
			<nav>
				<ul>
					<li>Welcome <?php echo $_SESSION['Login_user']; ?><input type="checkbox" id="navToggle">
				<label for="navToggle" class="nav-icon">▼</label>
						<div class="menu">
						<ul>
							<li><a href="#">My Account </a></li>
							<li><a href="logout.php">Logout</a></li>		
						</ul>
					</li>
				</ul>
			</nav>
		</header>
	</div>



		<div class="side-nav">	
			<div id="title">
					<img src="images/logo.png" style="height:210px;padding-top:8px;"/>		
			</div>

			<ul id="list-nav">
				<a href="adminpage.php"><li><img src="images/dashboard.png"> Dashboard</li></img></a>
				<br>
				<hr><br>
				<a href="carmodel.php"><li style="background-color:#f1f4f7;"><img src="images/model.png"> Car Model</img></li></a>
				<a href="#"><li><img src="images/rented.png"> Rented Cars</img></li></a>
				<a href="#"><li><img src="images/reserved.png" > Reserved Car</img></li></a><br>
				<hr>
			</ul>
		</div>

<section>

		<article>
			<div class ="location">
				<ul>
					<li><img src="home.png"></li>
					<li id="divider">/ Car Model</li>
				</ul> 
			</div>

			
		</article>
		<div class="content-container">
				<h1>View / Edit / Delete - Car Manufacturer & Model</h1>

				<div class="content-dashboard">
				<h6>Car Manufacturer</h6>
				</div>

				<div class="content-dashboard" style="float:right;">
				<h6>Car Model</h6>
				</div>

				<div class="content-dashboard">
					<div class="table-manufacturer">
						<table border="1" style="width:90%; margin:5%;margin-bottom:1%;border-collapse: collapse;">
							<tr>
								<td colspan="4" style="padding-left:10px;font-size:15px;padding-top:10px;padding-bottom:10px;">All Car Manufacturer</td>
							</tr>
							<tr>
								<th>ID</th>
								<th>Manufacturer</th>
								<th colspan="2"><center>Action</center></th>
							</tr>

							<?php
								include "connection.php";
								
									if(isset($_POST['savemanufacturer']))
									{
										$manufacturer = $_POST['manufacturer'];
										
										$query = "select manufacturer from car_manufacturer where manufacturer='$manufacturer'";
										$result=mysqli_query($con,$query);
										//$result = mysqli_query($con,"select count(manufacturer) from car_manufacturer where manufacturer='$manufacturer'");										
									}	

							?>

							<?php
								include "connection.php";
										$str = "";
										$query = "select * from car_manufacturer";
										$result=mysqli_query($con,$query);
										while ($rows=mysqli_fetch_array($result)) {
											$str = $str . "<tr>
												<td>".$rows['id']."</td>
												<td>".$rows['manufacturer']."</td>
												<td><a href='#'><center><img src='images/edit.png' title='Edit Record'/></center></a></td>
												<td><a href='#'><center><img src='images/delete.png' title='Delete Record'/></center></a></td>
											</tr>";

										}

										echo $str;
										mysqli_close($con);;	
							?>
						</table>
					</div>
				</div>

				<div class="content-dashboard" style="float:right;">
					<div class="table-model">
						<table border="1" style="width:90%; margin:5%;margin-bottom:1%;border-collapse: collapse;">
							<tr>
								<td colspan="5" style="padding-left:10px;font-size:15px;padding-top:10px;padding-bottom:10px;">All Car Model</td>
							</tr>
							<tr>
								<th>ID</th>
								<th>Manufacturer</th>
								<th>Model</th>
								<th colspan="2"><center>Action</center></th>
							</tr>
							<?php
									include "connection.php";
									
									if(isset($_POST['savemodel']))
									{
										$model = $_POST['model'];
										$manufacturer = $_POST['manufacturer'];
										
										$query = "select manufacturer,model from car_model where manufacturer='$manufacturer' and model='$model'";
										$result=mysqli_query($con,$query);
									}	

									?>
							<?php
									include "connection.php";
							
							 	
									$str = "";
									$query = "select * from car_model";
									$result=mysqli_query($con,$query);
									while ($rows=mysqli_fetch_array($result)) {
										$str = $str . "<tr>
											<td>".$rows['id']."</td>
											<td>".$rows['manufacturer']."</td>
											<td>".$rows['model']."</td>
											<td><a href='#'><center><img src='images/edit.png' title='Edit Record'/></center></a></td>
											<td><a href='#'><center><img src='images/delete.png' title='Delete Record'/></center></a></td>
										</tr>";
									}
									echo $str;
									mysqli_close($con);;
								?>
						</table>
							
						
					</div>
				</div>
		</div>

		

</section>
		

		<div id="update-background" style="position:absolute;width:100%;height:100%;background-color:rgba(0,0,0,.5);z-index:1;">
			<div id="content-container" style="width:18%;height:35%;background-color:white;border-radius:10px;position:fixed;margin-left:41%;margin-right:40%;margin-top:17%;">
				<form method="post" action="checkupdate.php">	

					<div class="action-title" style="background-color: #d49b1b;margin-top:11px; padding-top:11px;padding-bottom:11px;">
						<center>UPDATE RECORD<a href="carmodel.php"><span 	style="margin-left: 50px;font-size: 20px;cursor: pointer;"><b>&times;</b></span></a></center>
					</div>
					
					<center>
						<h3 style="margin-bottom:7px;">Manufacturer</h3>
						<input type="text" name="updatedmanufacturer" value=<?php include "connection.php"; 
																				$id= $_GET['id']; 
																				$query = "select manufacturer from car_manufacturer where id = $id";  
																				$result = mysqli_query($con,$query);
																				while($rows =mysqli_fetch_array($result))
																				{
																					echo $rows['manufacturer'];
																				}
																			?> style="padding-left: 5px;padding-top:5px;padding-bottom:5px;width:90%;margin-top:0;margin-bottom:30px;" required/>
						<hr>
					</center>
					
					<div class="actionbutton">
						<center>
							<input type="hidden" value=<?php echo $_GET['id']; ?> name="id"/>
							<a href="carmodel.php"><input type="button" value="CANCEL"/></a><span>&nbsp;</span>
							<input type="submit" name="updatemanufacturer" value="UPDATE"/>
						</center>
					</div>	
				</form>
			</div>
		</div>


	</body>
</html>


<?php
/*	include "connection.php";
	$updatedmanufacturer = $_POST['updatedmanufacturer'];
	$id = $_GET['id'];
	if(isset($_POST['updatemanufacturer']))
	{
		$query = "update car_manufacturer set manufacturer='$updatedmanufacturer' where id = $id ";
		$result = mysqli_query($con,$query);
		if(!$result)
		{
			die("failed to update".mysqli_error());
		}
		else
		{
			mysqli_close($con);
			header("location:carmodel.php");
		}
	}
*/
?>

