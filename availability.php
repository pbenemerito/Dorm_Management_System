
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
        echo " <option value=\"e1\">Extension 1</option> ";
      }
      if($e2<10) {
        echo " <option value=\"e2\">Extension 2</option> ";  
      }
      if($e3<10) {
        echo " <option value=\"e3\">Extension 3</option> ";
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