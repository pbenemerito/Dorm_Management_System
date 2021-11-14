<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    header("location: index.php");
  }
  ?>
<!DOCTYPE html>
<html>
<style>
*{
   font-family: Century Gothic;
}
body{
    font-family: century gothic;
    background-color: rgba(0,0,0,.7);
    position: fixed;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 230px;
    background-color: #f09c16;
    height: 30px;
    color: white;
    font-family: Century Gothic;
    border: none;
    cursor: pointer;
}input[type=submit]:hover {
    background-color: #bd8519;
}
#btn{
    width:230px;
    background-color: #f09c16;
  height: 30px;
   font-family: Century Gothic;
   border: none;
   cursor: pointer;
}
#btn:hover{
  background-color: #bd8519;
}
button a{
  text-decoration: none;
  color: #fff;
  background-color: #f09c16;
}
button a:hover{
  background-color: #bd8519;
}
input,select{
  background-color: #161d2f;
  color: #fff;
  font-size: 14px;
}
div {
    font-family: Century Gothic;
    border-radius: 5px;
    background-color: #161d2f;
    padding: 20px;
    width: 500px;
    color: #fff;
    margin-left: 400px;
    height: 615px; 
    margin-top:2px;
}
p{
  text-align: center;
  font-weight: bold;
  margin-top: -10px;
  margin-bottom: 10px;
  font-size: 23px;
}
</style>
<body>
<div> <p>Student Information</p> 
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
    <input type="hidden" id="ID" name="ID" value="<?php echo $asd;?>">
  
    <label for="First">First Name</label>
    <input type="text" id="First" name="First" placeholder="Firstname">

    <label for="Middle">Middle Name</label>
    <input type="text" id="Middle" name="Middle" placeholder="Middlename">

    <label for="Last">Last Name</label>
    <input type="text" id="Last" name="Last" placeholder="Lastname">
    
    <label for="Course">Course</label>
    <input type="text" id="Course" name="Course" placeholder="Course">
  
   <label for="Year">Year</label>
    <select id="Year" name="Year">
      <option>Select year</option>
      <option value="1st">1st</option>
      <option value="2nd">2nd</option>
      <option value="3rd">3rd</option>
      <option value="4th">4th</option>

    </select> 
    <label for="Dorm">Dorm</label>
    <select id="Dorm" name="Dorm">
      <option>Select dorm</option>
      <option value="1">DORM 1 (KALACHUCHI RESIDENCE)</option>
      <option value="2">DORM 2 (CAMIA RESIDENCE)</option>
      <option value="3">DORM 3 (ILANG-ILANG RESIDENCE)</option>
      <option value="4">DORM 4 (MUSES RESIDENCE)</option>
      <option value="5">DORM 5 (ROSAL RESIDENCE)</option>
      <option value="6">DORM 6 (SAMPAGUITA RESIDENCE)</option>
    </select>
    <label for="Room">Room</label>
    <input type="text" id="Course" name="room" placeholder="Room">
    <input type="submit" value="Submit" name="submit">&emsp;&emsp;
    <button id="btn"><a href = 'logout.php'><center>Back</a></button>

    <?php
      if(isset($_POST['submit'])){
        
        $con = mysqli_connect("localhost","root","","dorm");
        if(!$con)
        die('Connection Error: ' . mysqli_error($con));
  $ID = $_POST['ID'];
  $First = $_POST['First'];
  $Middle = $_POST['Middle'];
  $Last = $_POST['Last'];
  $Course = $_POST['Course'];
  $Year = $_POST['Year'];
  $dorm = $_POST['Dorm'];

  $room = $_POST['room'];

  
    $abc="SELECT count(*) as c FROM student WHERE dorm='$dorm' AND room_number='$room' AND request='Approve'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $count=$row['c'];
        }
      }
      $qry="select * from room where dorm='$dorm' AND name='$room';";
                $result=mysqli_query($con,$qry);
                while($rows=mysqli_fetch_array($result))
                {
                  $count1=$rows['max'];
                }
      if($count==$count1){
      include 'logout.php';
                mysqli_close($con);
                    
      } 

  if(strlen($ID)!=0 && strlen($First)!=0 && strlen($Middle)!=0 && strlen($Last)!=0 && strlen($Course)!=0 && strlen($Year)!=0 && strlen($dorm)!=0&& strlen($room)!=0){
  $qry="INSERT INTO student (student_id, fname, mname, lname, Course, Year,dorm_type, dorm_number,room_number,dorm) VALUES ('$ID','$First','$Middle','$Last','$Course','$Year','WD','$dorm','$room','$dorm')";
                  $result=mysqli_query($con,$qry);
                  if($result){  
                    $sql = "Update student_accounts SET request='Pending' 
                    WHERE student_id='$ID';";
                    if(mysqli_query($con,$sql)) {
                    echo "<script>window.alert('SUCCESSFUL!')</script>";
                    include 'logout.php';
                    }else{
                  echo "<script>window.alert('Fails!')</script>";
                  include 'logout.php';
                  
                  }
                  }
                  }
                  else{
                  echo "<script>window.alert('Empty Fields!')</script>";
                  include 'logout.php';
                  }
                  
      }
    ?>
  </form>
</div>

</body>
</html>