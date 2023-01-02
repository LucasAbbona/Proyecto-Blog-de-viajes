<?php
if(isset($_POST['register'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['pwd'];
    $passwordRepeat=$_POST['pwdRepeat'];

    include "../classes/connection.class.php";
    include "../classes/signup.class.php";
    include "../controller/signupContr.php";
    $signup=new SignUpControl($username,$email,$password,$passwordRepeat);
    $signup->SignUpUser();
    header("Location../regiser.php?error=userregister");
}