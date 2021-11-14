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
  <form action="accomodationform.php" method="get">
	
	 <label for="Dorm">Male Dorms</label>
    <select id="Dorm" name="Dorm">
      <option value="4">4 (KAMAGONG RESIDENCE)</option>
      <option value="5">5 (KAMAGONG RESIDENCE)</option>
      <option value="6">6 (DUNGON RESIDENCE)</option>
      <option value="7">7 (DUNGON RESIDENCE)</option>
      <option value="8">8 (ACACIA RESIDENCE)</option>
      <option value="9">9 (ACACIA RESIDENCE)</option>
      <option value="10">10 (MAHOGANY RESIDENCE)</option>
      <option value="11">11 (MAHOGANY RESIDENCE)</option>
    </select>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>