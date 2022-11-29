<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'projectsignin');
$uname = $_POST['uname'];
$email = $_POST['eml'];
$pass = $_POST['pwd'];
$s = "select * from signin_users where username = '$uname'";
$t = "select * from signin_users where email = '$email'";
$u = "select * from signin_users where passwords ='$pass'";
$result = mysqli_query($con, $s);
$result2 = mysqli_query($con,$t);
$result3 = mysqli_query($con,$u);
$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);
$num3 = mysqli_num_rows($result3);
if($num==1){
    echo "username taken already";
}
elseif($num2==1){
echo "Re-enter your email-id";

}
else{
    $reg = " insert into signin_users(username, email, passwords)values('$uname','$email','$pass')";
    mysqli_query($con,$reg);
    echo " Registration sucessful";
}
?>