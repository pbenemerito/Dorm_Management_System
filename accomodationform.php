<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    header("location: index.php");
  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>DORM MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" type="text/css" href="css/Blog.css">
  <link rel="stylesheet" type="text/css" href="css/modal.css">
  <link rel="stylesheet" type="text/css" href="css/accomodationform.css">
  <script src="modal.js" type="text/javascript"></script>
  <style>
    #Course option{
      font-size: 12px;
      }
    #Room option{
      font-size: 12px;
      }
      body{
  background: url(background.jpg);
  background-size: cover;
  width: 1400px;
  height: 700px;
}
</style>
</head> 

<header>
    <a class="logo"><span>DORM MANAGEMENT SYSTEM<span></a>
    <font face="Century Gothic" color="#000000" size="4.8">
    <div id="nav">
      <nav>
        <ul>
          <li id="titlename">DORM MANAGEMENT SYSTEM</li>
          
          <li><BUTTON TYPE="BUTTON" onclick="btn2()">MANAGER</BUTTON></li>
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
<?php
        include "connect.php";
        $user=$_SESSION['login_user'];
        $qry="select * from student_accounts where Username='$user';";
        $str="";
        $result=mysqli_query($con,$qry);
        while($rows=mysqli_fetch_array($result))
        {
          $asd=$rows[1];
          
        }
  ?>
  <form action="" method="post">
    <input type="hidden" id="ID" name="ID" value="<?php echo $asd;
                                session_destroy();
                              session_unset();?>">
  
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

    
   <?php
  include "availability.php";
  ?>
    <input type="submit" value="Submit" name="submit">

    <?php
      if(isset($_POST['submit'])){
        include 'connect.php';
      $ID = $_POST['ID'];
      $First = $_POST['First'];
      $Middle = $_POST['Middle'];
      $Last = $_POST['Last'];
      $Course = $_POST['Course'];
      $Year = $_POST['Year'];
      $room = $_POST['Room'];

  
  if(strlen($ID)!=0 && strlen($First)!=0 && strlen($Middle)!=0 && strlen($Last)!=0 && strlen($Course)!=0 && strlen($Year)!=0 && strlen($room)!=0){
  $qry="INSERT INTO student (student_id, fname, mname, lname, Course, Year,room_number) VALUES ('$ID','$First','$Middle','$Last','$Course','$Year','$room')";
                  $result=mysqli_query($con,$qry);
                  if($result) {  
                    session_start();
          session_destroy();
          session_unset();
                    $sql = "Update student_accounts SET request='Pending' 
                    WHERE student_id='$ID';";
                    
                    if(mysqli_query($con,$sql)) {
                      
            session_start();
            $_SESSION['msg']="Your request was sent";
            header('location: index.php');
                      
                    }

                      else {
                        
              session_start();
              $_SESSION['msg']="Accomodation fails!";
              header('location: index.php');
                  
                      }
                  }
                  }
    else{
                  
            session_start();
            $_SESSION['msg']="Empty Fields!";
            header('location: index.php');
        }
                  
      }
    ?>
  </form>
</div></center>
          </div></div>
<body>
  <div id="banner">
  </div>
</body>
</html>