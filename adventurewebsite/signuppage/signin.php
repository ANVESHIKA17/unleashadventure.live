<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'projectsignin');
$uname = $_POST['uname'];
$pass = $_POST['pwd'];
$s = "select * from signin_users where username = '$uname' && passwords = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['uname']=$uname;
   echo "sucessfully logged in";
   header('refresh:3,url=wlcm.php');
} else{
echo "invalid data entry";
}
?>