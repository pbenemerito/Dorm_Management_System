<label for="room">Room</label><br><br>
    <select id="room" name="room">
    <option>Select room</option>


    <?php
    include 'connect.php';

    $date=date("Y/m/d");
    $abc="SELECT count(*) as e1 FROM grade WHERE date='$date' AND room_number='e1'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $e1=$row['e1'];
         
        }
      }
    $abc="SELECT count(*) as e2 FROM grade WHERE date='$date' AND room_number='e2'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $e2=$row['e2'];
        }
      }
    $abc="SELECT count(*) as e3 FROM grade WHERE date='$date' AND room_number='e3'";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $e3=$row['e3'];
        }
      }
    $abc="SELECT count(*) as room1 FROM grade WHERE date='$date' AND room_number=1";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room1=$row['room1'];
        }
      }
    $abc="SELECT count(*) as room2 FROM grade WHERE date='$date' AND room_number=2";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room2=$row['room2'];
        }
      }
    $abc="SELECT count(*) as room3 FROM grade WHERE date='$date' AND room_number=3";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room3=$row['room3'];
        }
      }
    $abc="SELECT count(*) as room4 FROM grade WHERE date='$date' AND room_number=4";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room4=$row['room4'];
        }
      }
    $abc="SELECT count(*) as room6 FROM grade WHERE date='$date' AND room_number=6";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room6=$row['room6'];
        }
      }
    $abc="SELECT count(*) as room7 FROM grade WHERE date='$date' AND room_number=7";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room7=$row['room7'];
        }
      }
    $abc="SELECT count(*) as room8 FROM  grade WHERE date='$date' AND room_number=8";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room8=$row['room8'];
        }
      }
    $abc="SELECT count(*) as room9 FROM  grade WHERE date='$date' AND room_number=9";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room9=$row['room9'];
        }
      }
    $abc="SELECT count(*) as room10 FROM  grade WHERE date='$date' AND room_number=10";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room10=$row['room10'];
        }
      }
    $abc="SELECT count(*) as room11 FROM grade WHERE date='$date' AND room_number=11";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room11=$row['room11'];
        }
      }
    $abc="SELECT count(*) as room12 FROM  grade WHERE date='$date' AND room_number=12";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room12=$row['room12'];
        }
      }
    $abc="SELECT count(*) as room13 FROM  grade WHERE date='$date' AND room_number=13";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room13=$row['room13'];
        }
      }
    $abc="SELECT count(*) as room14 FROM grade WHERE date='$date' AND room_number=14";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room14=$row['room14'];
        }
      }
    $abc="SELECT count(*) as room15 FROM grade WHERE date='$date' AND room_number=15";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room15=$row['room15'];
        }
      }
    $abc="SELECT count(*) as room16 FROM grade WHERE date='$date' AND room_number=16";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room16=$row['room16'];
        }
      }
    $abc="SELECT count(*) as room17 FROM grade WHERE date='$date' AND room_number=17";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room17=$row['room17'];
        }
      }
    $abc="SELECT count(*) as room18 FROM grade WHERE date='$date' AND room_number=18";
      $result=mysqli_query($con,$abc);
      if($result){
        while($row=mysqli_fetch_assoc($result))
        {
          $room18=$row['room18'];
        }
      }

      if($e1<6) {
        echo " <option value=\"e1\">Extension 1</option> ";
      }
      if($e2<6) {
        echo " <option value=\"e2\">Extension 2</option> ";  
      }
      if($e3<6) {
        echo " <option value=\"e3\">Extension 3</option> ";
      }
      if($room1<6) {
        echo " <option value=\"1\">Room 1</option> ";
      }
      if($room2<6) {
        echo " <option value=\"2\">Room 2</option> ";
      }
      if($room3<6) {
        echo " <option value=\"3\">Room 3</option> ";
      }
      if($room4<6) {
        echo " <option value=\"4\">Room 4</option> ";
      }
      if($room6<6) {
        echo " <option value=\"6\">Room 6</option> ";
      }
      if($room7<6) {
        echo " <option value=\"7\">Room 7</option> ";
      }
      if($room8<6) {
        echo " <option value=\"8\">Room 8</option> ";
      }
      if($room9<6) {
        echo " <option value=\"9\">Room 9</option> ";
      }
      if($room10<6) {
        echo " <option value=\"10\">Room 10</option> ";
      }
      if($room11<6) {
        echo " <option value=\"12\">Room 11</option> ";
      }
      if($room12<6) {
        echo " <option value=\"12\">Room 12</option> ";
      }
      if($room13<6) {
        echo " <option value=\"13\">Room 13</option> ";
      }
      if($room14<6) {
        echo " <option value=\"14\">Room 14</option> ";
      }
      if($room15<6) {
        echo " <option value=\"15\">Room 15</option> ";
      }
      if($room16<6) {
        echo " <option value=\"16\">Room 16</option> ";
      }
      if($room17<6) {
        echo " <option value=\"17\">Room 17</option> ";
      }
      if($room18<6) {
        echo " <option value=\"18\">Room 18</option> ";
      }

      
  
      ?>

       </select>