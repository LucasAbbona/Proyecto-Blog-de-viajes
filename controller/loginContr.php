<?php
class LoginContr extends Login{
    public function __construct($username,$password){
        $this->username=$username;
        $this->password=$password;
    }
    public function Login(){
        if($this->NotEmpty($this->username,$this->password)){
            header("Location: ../index.php?error=emptyinputs");
            exit();
        }
        if($this->LoginUser($this->username,$this->password)){
            header("Location: ../landing.php");
        }else{
            header("Location: ../index.php");
        }
    }
    private function NotEmpty($user,$pwd){
        $result;
        if($user=="" || $pwd ==""){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}