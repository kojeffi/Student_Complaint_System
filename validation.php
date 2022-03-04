<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'edge_cm_system');
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$contactno=$_POST['contactno'];
$s="SELECT `id`, `fullname`, `email`, `password`, `contactno` FROM `users` WHERE  email='$email'&& password
=$password";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$email;
    header('location:dashboard.php');
}else{
    header('location:index[1].php');
}
?>

