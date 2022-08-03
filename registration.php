<?php

session_start();
header('location:sign.html');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$s=" select * from usertable where name= '$name'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo "Username already taken";
}
else{
    $reg="insert into usertable(name,email,password) values('$name','$email','$password')";
    mysqli_query($con,$reg);
    echo "Registration  Successful";
}
?>
