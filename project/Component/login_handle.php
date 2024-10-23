<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "./Connection.php";
    $uname = $_POST['uname'];
    $pass = $_POST['pwd'];

    $search = "SELECT * FROM `user` WHERE `user_email`='$uname'";
    $result = mysqli_query($conn, $search);

    if(mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_assoc($result);
        $hashPass = $rows['user_pass'];

        if(password_verify($pass, $hashPass)){
            session_start();
            $_SESSION['logIn'] = true;
            $_SESSION['user_name'] = $rows['user_name'];
            $_SESSION['user_id'] = $rows['user_id'];
            header("location:../index.php?status=success");
        }
        else{
            header("location:../index.php?status=failed&error=pass");
        }   
    }
    else{
        header("location:../index.php?status=failed&error=username");
    }

 }

?>      

?>