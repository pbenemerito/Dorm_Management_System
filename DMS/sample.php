
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DORM MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="Blog.css">
	<link rel="stylesheet" type="text/css" href="modal.css">
	<link rel="stylesheet" type="text/css" href="css/accomodationform.css">
	<script src="modal.js" type="text/javascript"></script>
</head> 
<style>
    #Course option{
      font-size: 12px;
      }
    #Room option{
      font-size: 12px;
      }
</style>
<header>
		<a class="logo"><span>DORM MANAGEMENT SYSTEM<span></a>
		<font face="Century Gothic" color="#000000" size="4.8">
		<div id="nav">
			<nav>
				<ul>
					<li id="titlename">DORM MANAGEMENT SYSTEM</li>
					
					<li><BUTTON TYPE="BUTTON" onclick="btn2()">ADMIN</BUTTON></li>
						<li><BUTTON TYPE="BUTTON" onclick="btn3()">STUDENT</BUTTON></li>
						<li><BUTTON id="signup"  id="signup" TYPE="BUTTON" onclick="btn1()">CREATE ACCOUNT</BUTTON>
					</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div></font>
	</header>
	<div id="update-background">
				<center>
			
				<div id="content-container">
				<span class="close"><a href="logout.php"><b>&times;</b></span></a>
                <div id="form"> <p>Student Information</p> 

  <form action="" method="post">
    <input type="hidden" id="ID" name="ID" value="<?php echo $asd;?>">
  
    <label for="First">First Name</label>
    <input type="text" id="First" name="First" placeholder="Firstname">

    <label for="Middle">Middle Name</label>
    <input type="text" id="Middle" name="Middle" placeholder="Middlename">

    <label for="Last">Last Name</label>
    <input type="text" id="Last" name="Last" placeholder="Lastname">
    
    <label for="Course">Course</label>
    <select id="Course" name="Course">
      <option>Select Course</option>
      <option value="BSA">Bachelor of Science in Agriculture</option>
      <option value="BSAB">Bachelor of Science in Agribusiness</option>
      <option value="BSE">Bachelor of Science in Entrepreneurship</option>
      <option value="ABDC">Bachelor of Arts in Development Communication</option>
      <option value="ABSS">Bachelor of Arts in in Social Sciences</option>
      <option value="ABP">Bachelor of Arts in Psychology</option>
      <option value="ABLL">Bachelor of Arts in Language and Literature</option>
      <option value="BSBio">Bachelor of Science in Biology</option>
      <option value="BSChem">Bachelor of Science in Chemistry</option>
      <option value="BSES">Bachelor of Science in Environmental Science</option>
      <option value="BSMath">Bachelor of Science in Mathematics</option>
      <option value="BSStat">Bachelor of Science in Statistics</option>
      <option value="BSDC">Bachelor of Science in Development Communication</option>
      <option value="BSAT">Bachelor of Science in Accounting Technology</option>
      <option value="BSAC">Bachelor of Science in Accountancy</option>
      <option value="BSBA">Bachelor of Science in Business Administration</option>
      <option value="BEED">Bachelor of Elementary Education</option>
      <option value="BSED">Bachelor of Secondary Education</option>
      <option value="BSABE">Bachelor of Science in Agricultural and Biosystems Engineering</option>
      <option value="BSCE">Bachelor of Science in Civil Engineering</option>
      <option value="BSIT">Bachelor of Science in Information Technology</option>
      <option value="BSFT">Bachelor of Science in Food Technology</option>
      <option value="BSTGT">Bachelor of Science in Textile and Garment Technology</option>
      <option value="BSHRM">Bachelor of Science in Hotel and Restaurant Management</option>
      <option value="BSF">Bachelor of Science in Fisheries</option>
      <option value="BSAH">Bachelor of Science in Animal Husbandry</option>
      <option value="Doctorate">Doctor of Veterinary Medicine</option>
      </select>

    <label for="Year">Year</label>
    <select id="Year" name="Year">
    <option>Select year</option>
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
    <option value="4th">4th</option>
    <option value="5th">5th</option> 
    <option value="6th">6th</option> 
    </select>

    <label for="Room">Room</label>
    <select id="Room" name="Room">
    <option>Select room</option>

    <?php
    include 'connect.php';
    $abc="SELECT count(*) as e1 FROM student WHERE room_number='e1' AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $e1=$row['e1'];
        }
      }
    $abc="SELECT count(*) as e2 FROM student WHERE room_number='e2' AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $e2=$row['e2'];
        }
      }
    $abc="SELECT count(*) as e3 FROM student WHERE room_number='e3' AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $e3=$row['e3'];
        }
      }
    $abc="SELECT count(*) as room1 FROM student WHERE room_number=1 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room1=$row['room1'];
        }
      }
    $abc="SELECT count(*) as room2 FROM student WHERE room_number=2 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room2=$row['room2'];
        }
      }
    $abc="SELECT count(*) as room3 FROM student WHERE room_number=3 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room3=$row['room3'];
        }
      }
    $abc="SELECT count(*) as room4 FROM student WHERE room_number=4 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room4=$row['room4'];
        }
      }
    $abc="SELECT count(*) as room6 FROM student WHERE room_number=6 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room6=$row['room6'];
        }
      }
    $abc="SELECT count(*) as room7 FROM student WHERE room_number=7 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room7=$row['room7'];
        }
      }
    $abc="SELECT count(*) as room8 FROM student WHERE room_number=8 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room8=$row['room8'];
        }
      }
    $abc="SELECT count(*) as room9 FROM student WHERE room_number=9 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room9=$row['room9'];
        }
      }
    $abc="SELECT count(*) as room10 FROM student WHERE room_number=10 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room10=$row['room10'];
        }
      }
    $abc="SELECT count(*) as room11 FROM student WHERE room_number=11 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room11=$row['room11'];
        }
      }
    $abc="SELECT count(*) as room12 FROM student WHERE room_number=12 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room12=$row['room12'];
        }
      }
    $abc="SELECT count(*) as room13 FROM student WHERE room_number=13 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room13=$row['room13'];
        }
      }
    $abc="SELECT count(*) as room14 FROM student WHERE room_number=14 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room14=$row['room14'];
        }
      }
    $abc="SELECT count(*) as room15 FROM student WHERE room_number=15 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room15=$row['room15'];
        }
      }
    $abc="SELECT count(*) as room16 FROM student WHERE room_number=16 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room16=$row['room16'];
        }
      }
    $abc="SELECT count(*) as room17 FROM student WHERE room_number=17 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room17=$row['room17'];
        }
      }
    $abc="SELECT count(*) as room18 FROM student WHERE room_number=18 AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room18=$row['room18'];
        }
      }

         
      if($e1<10) {
        echo " <option value=\"E1\">Extension 1</option> ";
      }
      if($e2<10) {
        echo " <option value=\"E2\">Extension 2</option> ";  
      }
      if($e3<10) {
        echo " <option value=\"E3\">Extension 3</option> ";
      }
      if($room1<10) {
        echo " <option value=\"1\">Room 1</option> ";
      }
      if($room2<10) {
        echo " <option value=\"2\">Room 2</option> ";
      }
      if($room3<10) {
        echo " <option value=\"3\">Room 3</option> ";
      }
      if($room4<10) {
        echo " <option value=\"4\">Room 4</option> ";
      }
      if($room6<10) {
        echo " <option value=\"6\">Room 6</option> ";
      }
      if($room7<10) {
        echo " <option value=\"7\">Room 7</option> ";
      }
      if($room8<10) {
        echo " <option value=\"8\">Room 8</option> ";
      }
      if($room9<10) {
        echo " <option value=\"9\">Room 9</option> ";
      }
      if($room10<10) {
        echo " <option value=\"10\">Room 10</option> ";
      }
      if($room11<10) {
        echo " <option value=\"12\">Room 11</option> ";
      }
      if($room12<10) {
        echo " <option value=\"12\">Room 12</option> ";
      }
      if($room13<10) {
        echo " <option value=\"13\">Room 13</option> ";
      }
      if($room14<10) {
        echo " <option value=\"14\">Room 14</option> ";
      }
      if($room15<10) {
        echo " <option value=\"15\">Room 15</option> ";
      }
      if($room16<10) {
        echo " <option value=\"16\">Room 16</option> ";
      }
      if($room17<10) {
        echo " <option value=\"17\">Room 17</option> ";
      }
      if($room18<10) {
        echo " <option value=\"18\">Room 18</option> ";
      }

      
  
      ?>

       </select>

    
    <input type="submit" value="Submit" name="submit">


</div></center>
          </div></div>
<body>
	<div id="banner">
	</div>
</body>
</html>