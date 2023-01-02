<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $pwd=$_POST['password'];
    include "../classes/connection.class.php";
    include "../classes/login.class.php";
    include "../controller/loginContr.php";
    $login= new LoginContr($username,$pwd);
    $login->Login();
}