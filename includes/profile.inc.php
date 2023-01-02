<?php
if(isset($_POST['update_profile'])){
    $email=$_POST['email'];
    $imagen=$_FILES['imagen']['name'];
    $imagen_tmp=$_FILES['imagen']['tmp_name'];
    $id=$_POST['id'];

    move_uploaded_file($imagen_tmp,"../images/profile/$imagen");

include "../classes/connection.class.php";
include "../classes/profile.class.php";
include "../controller/profileContr.php";
$updateUser= new ProfileContr($email,$imagen,$id);
$updateUser->Updating();
header("Location: ../admin.php?source=profile");
$updateUser->DisplayUser();
}