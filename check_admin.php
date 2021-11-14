<?php

include "connect.php";

//error trapping.
if(!isset($_POST['username']) || !isset($_POST['password']))
	die("Error: index.php has not provided all
	the necessary details needed here.<br/>".
	"<a href=\"index.php\">Try Again?</a>");
	
	$UN = $_POST['username'];
	$PW = $_POST['password'];
	
if(strlen($UN)==0 || strlen($PW)==0)
	echo "<script>window.alert('Log in Failed: Empty fields supplied')
				document.location = 'index.php'</script>";
	
//data selection


$sql = "SELECT * FROM user WHERE BINARY Username='".$UN."' AND Password='".$PW."'";
$result= mysqli_query($con,$sql);
$admin="admin";
$count = mysqli_num_rows($result);
if($count==0)
{

	echo "<script>window.alert('Log in Failed: Invalid Username or Password')
				document.location = 'index.php'</script>";

}
else {
	session_start();
		$_SESSION['login_user']=$UN;
		$_SESSION['counter']= "3";
	header("location:manager/user_home.php");
	
}

?>