<!DOCTYPE html>
<html>
<style>
body{
	
		font-family: century gothic;
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
    width: 100%;
    background-color: #4CAF50;
	height: 30px;
    color: white;
}input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>DORM ACCOMODATION</h3>

<div>
  <form action="accomodationform.php" method="post">
  
	  <label for="Dorm">Female Dorms</label>
    <select id="Dorm" name="Dorm">
      <option value="1">DORM 1 (KALACHUCHI RESIDENCE)</option>
      <option value="2">DORM 2 (CAMIA RESIDENCE)</option>
      <option value="3">DORM 3 (ILANG-ILANG RESIDENCE)</option>
      <option value="4">DORM 4 (ACACIA RESIDENCE)</option>
      <option value="5">DORM 5 (ROSAL RESIDENCE)</option>
      <option value="6">DORM 6 (SAMPAGUITA RESIDENCE)</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>