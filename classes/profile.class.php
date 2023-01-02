<?php
class Profile extends Connection{
    protected function DisplayingUser(){
        if(isset($_SESSION['id'])){
        $id= $_SESSION['id'];
        $query="SELECT * FROM users WHERE user_id = '$id'";
        $selectUser=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_array($selectUser)){
            $id=$row['user_id'];
            $username=$row['username'];
            $email=$row['user_email'];
            $imagen=$row['user_image'];
        }
    
        echo "<div class='profile'>
                <h1>Profile</h1>
                <form action='../includes/profile.inc.php' method='post' enctype='multipart/form-data'>
                    <input type='hidden' name='id' value='".$id."'>
                    <div class='imgContainer'>
                    <img src='../images/profile/".$imagen."' width='250px' alt=''>
                    </div>    
                    <input type='file' name='imagen' >
                    <label for=''>Username</label>
                    ".$username."
                    <label for=''>Email</label>
                    <input type='text' name='email' value='".$email."'>
                    <input type='submit' class='profileUpdate' name='update_profile' value='Update'>
                </form>
            </div>";}
    }
    protected function Update($userEmail,$userImage,$userId){
        if($userImage==''){
            $query="UPDATE users SET user_email='{$userEmail}' WHERE user_id='$userId';";
        }else{
            $query="UPDATE users SET user_email='{$userEmail}', user_image='{$userImage}' WHERE user_id='$userId';";
        }
        $updateUser=mysqli_query($this->Connect(),$query);
    }
}