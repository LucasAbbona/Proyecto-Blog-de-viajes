<?php
class SignUp extends Connection{
    protected function CreatingUser($username,$email,$password){
        $password=password_hash($password,PASSWORD_DEFAULT);
        $query="INSERT INTO users (username, user_email, user_password) VALUES ('{$username}', '{$email}', '{$password}');";
        $created = $this->Connect()->query($query);
        if($created){
            return true;
        }else{
            return false;
        }
    }
    protected function CheckEmail($email){
        $query="SELECT * FROM users WHERE user_email = '{$email}';";
        $result=mysqli_query($this->Connect(),$query);
        if(mysqli_num_rows($result)>0){
            return true;
        }else{
            return false;
        }
    }
    protected function CheckUser($username){
        $query="SELECT * FROM users WHERE username = '{$username}';";
        $result=mysqli_query($this->Connect(),$query);
        if(mysqli_num_rows($result)>0){
            return true;
        }else{
            return false;
        }
    }
}