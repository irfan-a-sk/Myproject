<?php
 session_start();
 include "Connection.php";
 if(isset($_SESSION['logIn']) && $_SESSION['logIn'] == true){

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $name =$_POST['name'];
            $email =$_POST['email'];
            $Complaint =$_POST['Complaint'];

            $insert2 = "INSERT INTO `contact` (`name`,`email`,`Complaint`) VALUES('$name','$email','$Complaint')";

            if(mysqli_query($conn, $insert2)){
                header("location:../contact.php?status=success");
            }
            else{
                header("location:../contact.php?status=wrong");
            }
        }
    }
    else{
        header("location:../contact.php?status=login_error");
 }