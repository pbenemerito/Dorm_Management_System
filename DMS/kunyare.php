
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
		    height: 550px;
		    text-align: center;
		    margin: auto;
		    margin-top: -40px; 
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
		.search-box{
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
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
    	$('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    	});
    
    	// Set search input value on click of result item
    	$(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    	});
		});
		</script>
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
					$area = $rows['area'];
					$type = $rows['type'];

					
				}
		?>
			<font face="Century Gothic">
			<div id="nav">
					<nav>
					<ul>
						<li id="titlename">DORM MANAGEMENT SYSTEM</li>
						<li>
        				<input type="text" autocomplete="off" placeholder="Search country..." />
        				<div class="result"></div>
        				</li>
						<li id="login"><a href="">asd</a>
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
		<div id="leftnav"><a href="user_studentRender.php"><font color="#ffffff">RENDER</a></font></div>
		<div id="leftnav"><a href="user_areaRecord.php"><font color="#ffffff">AREA GRADES</a></font></div>
		<div id="leftnav"><a href="user_ironingRecord.php"><font color="#ffffff">IRONING RECORD </a></font><br></div>
		<div id="leftnav"><a href="user_violationRecord.php"><font color="#ffffff">VIOLATIONS </a></font><br></div>
		<div id="leftnav"><a href="user_meritsRecord.php"><font color="#ffffff">MERITS </a></font><br></div>
		<div id="leftnav"><a href="user_demeritsRecord.php"><font color="#ffffff">DEMERITS</a></font><br></div>
		<div id="leftnav"><a href="user_studentRecord.php"><font color="#ffffff">STUDENT RECORD </a></font><br></div>
		<div id="leftnav">
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
			</div>
		</div>
	
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
	<th>Room</th>
	<th colspan="2"><center>ACTION</center></th>

		<?php
			if(isset($_POST['submit']))
			{
					$ID=$_POST['id'];
					$fname=$_POST['fname'];
					$mname=$_POST['mname'];
					$lname=$_POST['lname'];
					$course=$_POST['course'];
					$year=$_POST['year'];
					$room=$_POST['room'];
					$request="Approve";

				include "connect.php";

					$qry="select * from student;";
								$str="";
								$result=mysqli_query($con,$qry);
								while($rows=mysqli_fetch_array($result))
								{
									if($ID==$rows[1]){
									echo "<script>window.alert('STUDENT ID ALREADY EXIST')
									document.location = 'user_studentRecord.php'</script>";

								mysqli_close($con);

								}
							}
						
				$user=$_SESSION['login_user'];
				$qry="select * from user where Username='$user';";
				$str="";
				$result=mysqli_query($con,$qry);
				while($rows=mysqli_fetch_array($result))
				{
					$area=$rows['3'];

					$type=$rows['4'];
				}
				if(strlen($ID)!=0 && strlen($fname)!=0 && strlen($lname)!=0 && strlen($lname)!=0 && strlen($course)!=0 && strlen($year)!=0  && strlen($room)!=0){
				$qry="insert into student (student_id,fname,mname,lname,course,year,request,dorm_number,room_number,dorm_type) values('$ID','$fname','$mname','$lname','$course','$year','$request','$area','$room','$type')";
				$result=mysqli_query($con,$qry);
				if($result)
				{echo "<script>window.alert('SUCCESSFUL!')
				document.location = 'user_studentRecord.php'</script>";
				}
				else{
					//echo "<br/>Image not uploaded.";
				}
			}
			else{
				echo "<script>window.alert('Empty Fields')
				document.location = 'user_studentRecord.php'</script>";
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
					$type=$rows['4'];
				}
				$qry="select * from student where request='Approve' and dorm_number='$area' and dorm_type='$type'";
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
		<td>".$rows[9]."</td>

		<td><button><a href = 'user_edit_student.php?id=".$rows['0']."'><center><img src='up.png'/></a></button></td>
		<td><button><a href = 'user_delete.php?id=".$rows['0']."'><center><img src='del.png'/></a></button></td>
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