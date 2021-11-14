<?php

	session_start();
	if(!isset($_SESSION['login_user'])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/regstyle.css">
	<style>
		*{
			text-align: center;
			font-size: 100px;
			background: rgba(0,0,0,.5);
			color: #fff;
		}
	</style>
</head>
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
<body>
	<h5>YOUR REQUEST IS REJECTED</h5> 
</body>
		<form action="" method="post">
				<input type="submit" name="submit" value="REQUEST AGAIN" />
				<?php
				if(isset($_POST['submit'])){
					$sql = "Update student_accounts SET request='Made' 
                    WHERE student_id='$asd';";
                    
                    if(mysqli_query($con,$sql)) {
                    session_destroy();
	session_unset();
                    }
                }
				?>
		</form>
</html>