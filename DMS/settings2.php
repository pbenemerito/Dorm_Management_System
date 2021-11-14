<?php
    session_start();
    if(!isset($_SESSION['login_user'])){
        header("location: index.php");
    }
    ?>
<html>
<head>
        <title>BLOG</title>
<style>
*,input[type=input]{
    color: #fff;
    font-family: Century Gothic;    
}
body
{
    background: rgba(0,0,0,.5);
}
#title, #sub-title
{
    display: none;
}
form
{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    height: 420px;
    width: 300px;
    background: #161d2f;
    border-radius: 5px;
    text-align: center;
    box-sizing: border-box;
    padding: 25px;
}
#info{
    text-align: center;
    font-size: 30px;
    padding-bottom: 10px;
    margin-bottom: 30px;
    border-bottom: solid 1px rgb(220,220,220);
}
form input, form textarea{
    border-radius: 5px;
    height: 40px;
    width: 100%;
    border: solid 1px rgb(221,226,237);
    background-color: #161d2f;
    box-sizing: border-box;
    border: none;
    padding: 5px;
    margin-bottom: 15px;
    font-family: avlight;
}
form textarea{
    height: 200px;
}
input:last-child{
    position: absolute;
    width: 125px;
    right: 25px;
    background-color: #f09c16;
    border: none;
    color: rgb(245,247,250);
    margin-right: 60px;
}
form input:last-child:hover{
    background-color: #bd8519;
}
    </style>

<?php
    $con = mysqli_connect("localhost","root","","dorm");
                if(!$con)
                die('Connection Error: ' . mysqli_error($con));

                $user=$_SESSION['login_user'];
                $qry="select * from student_accounts where Username='$user';";
        $result = mysqli_query($con, $qry);
        $str=" ";
        while($rows = mysqli_fetch_array($result)) {
            $str = $str . "
                <form id=\"edit\" action=\"action.php\" method=\"post\">
                    <div id=\"info\">Edit</div>
                    <input type=\"hidden\" value=".$rows[0]." name=\"id\">
                    <p>Username </p>
                    <input type=\"input\" placeholder=\"Input Title Here\" name=\"title\" value=\"".$rows['Username']."\"><br/>
                    <p>Password </p>
                    <input type=\"input\" placeholder=\"Input Author Here\" name=\"author\" value=\"".$rows['Password']."\"><br/>
                    <input type=\"submit\" value=\"✔\">
                </form>";
            }
        ?>
    <?php 
    echo $str; 
    ?>