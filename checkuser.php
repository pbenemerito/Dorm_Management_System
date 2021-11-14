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


$sql = "SELECT * FROM student_accounts WHERE BINARY Username='".$UN."' AND Password='".$PW."'";
$result1= mysqli_query($con,$sql);
$count = mysqli_num_rows($result1);
if($count==0)
{

	echo "<script>window.alert('Log in Failed: Invalid Username or Password')
				document.location = 'index.php'</script>";

}

while($rows=mysqli_fetch_array($result1)){
	$id=$rows['student_id'];
	$sql1 = "SELECT * FROM student WHERE student_id='".$id."'";
	$result2= mysqli_query($con,$sql1);
	while($row=mysqli_fetch_array($result2)){

		$request=$row['request'];
	}

	if($request=='Approve'){
		session_start();
		$_SESSION['login_user']=$UN;
		$_SESSION['counter']= "1";
		header("location:student/home.php");
	}
	
	elseif($rows['request']!="Pending" && $rows['request']!="Approve" && $rows['request']!="Made"){
		
		
		session_start();
		$_SESSION['login_user']=$UN;
		$_SESSION['counter']= "1";
		header("location:sad.php");

	}
	elseif($rows['request']=="Made"){
		session_start();
		$_SESSION['login_user']=$UN;
		$_SESSION['counter']= "1";
		header("location:accomodationform.php");
	}
	elseif($rows['request']=="Pending"){
		header("location:waiting.php");
	}
	elseif($rows['request']=="Approve"){
		session_start();
		$_SESSION['login_user']=$UN;
		$_SESSION['counter']= "1";
		header("location:student/home.php");
	}
}

?>