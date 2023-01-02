<?php
class ProfileContr extends Profile{
    public function __construct($userEmail,$userImage,$userId){
        $this->email=$userEmail;
        $this->image=$userImage;
        $this->id=$userId;
    }
    public function Updating(){
        $this->Update($this->email,$this->image,$this->id);
    }
    public function DisplayUser(){
        $this->DisplayingUser();
    }    
}