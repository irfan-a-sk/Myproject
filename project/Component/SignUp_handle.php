<?php
include "Connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST")


$name = $_POST['Name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$hash = password_hash($cpass, PASSWORD_DEFAULT);

$insert = "INSERT INTO `user`(`user_name`, `user_email`, `user_pass`) VALUES ('$name','$email','$hash')";


if(mysqli_query($conn,$insert)){
    echo header("location:../index.php");
}
else{
    echo"error";
}
?>