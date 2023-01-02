<?php
class SignUpControl extends SignUp{
    public function __construct($username,$email,$pwd,$repeatPwd){
    $this->username=$username;
    $this->email=$email;
    $this->pwd=$pwd;
    $this->RepeatPwd=$repeatPwd;
    }

    public function SignUpUser(){
        if($this->NotEmpty($this->username,$this->email,$this->pwd,$this->RepeatPwd)==false){
            header("Location:../register.php?error=emptyinputs");
            exit();
        }
        if($this->SimilarPwd($this->pwd,$this->RepeatPwd)==false){
            header("Location:../register.php?error=differentpassword");
            exit();
        }
        if($this->ShortPwd($this->pwd)){
            header("Location:../register.php?error=shortpwd");
            exit();
        }
        if($this->LongPwd($this->pwd)){
            header("Location:../register.php?error=longpwd");
            exit();
        }
        if($this->CheckEmail($this->email)){
            header("Location: ../register.php?error=emailexist");
            exit();
        }
        if($this->CheckUser($this->username)){
            header("Location: ../register.php?error=userexist");
            exit();
        }
        $this->CreatingUser($this->username,$this->email,$this->pwd);
        header("Location: ../register.php");
    }

    private function SimilarPwd($pwd,$repeatPwd){
    $result;
    if($pwd!==$repeatPwd){
    $result=false;
    }else if($pwd==$repeatPwd){
    $result=true;
    }
    return $result;
    }
    private function ShortPwd($pwd){
    if(strlen($pwd)<8){
    return true;
    }
    }
    private function LongPwd($pwd){
    if(strlen($pwd)>17){
    return true;
    }
    }
    private function NotEmpty($username,$email,$pwd,$RepeatPwd){
    $result;
    if($username==""||$email==""||$pwd==""||$RepeatPwd==""){
    $result=false;
    }else{
    $result=true;
    return $result;
    }
    }
}