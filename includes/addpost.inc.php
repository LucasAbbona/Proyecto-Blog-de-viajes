<?php
if(isset($_POST['add_post'])){
    $title=$_POST['titulo'];
    $image=$_FILES['imagen'] ['name'];
    $image_temp=$_FILES['imagen'] ['tmp_name'];
    $desc=$_POST['descripcion'];
    move_uploaded_file($image_temp, "../images/$image");

    include "../classes/connection.class.php";
    include "../classes/posts.class.php";
    include "../controller/postContr.php";
    $adding=new PostContr($title,$desc,$image,"");
    $adding->AddPost();
    header("Location: ../admin.php?source=add");
}