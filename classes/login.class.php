<?php
session_start();
ob_start();
class Login extends Connection{
    protected function LoginUser($username,$password){
        $username = mysqli_real_escape_string($this->Connect(),$username);
        $password = mysqli_real_escape_string($this->Connect(),$password);
        $query="SELECT * FROM users WHERE username = '{$username}'";
        $userLogin=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_array($userLogin)){
        $bd_id=$row['user_id'];
        $db_user=$row['username'];
        $db_pwd=$row['user_password'];
        $db_email=$row['user_email'];
        $db_imagen=$row['user_image'];
        }
        if(password_verify($password,$db_pwd)){
        $_SESSION['username']=$db_user;
        $_SESSION['password']=$db_pwd;
        $_SESSION['email']=$db_email;
        $_SESSION['image']=$db_imagen;
        $_SESSION['id']=$bd_id;
        return true;
        }else{
        return false;
        }
}
}