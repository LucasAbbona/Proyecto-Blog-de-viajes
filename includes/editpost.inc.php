<?php
if(isset($_POST['edit_post'])){
    $postTitle=$_POST['titulo'];
    $postDesc=$_POST['descripcion'];
    $postImage=$_FILES['imagen']['name'];
    $postImage_tmp=$_FILES['imagen']['tmp_name'];
    $postId=$_POST['id'];
    move_uploaded_file($postImage_tmp, "../images/$postImage");

    include "../classes/connection.class.php";
    include "../classes/posts.class.php";
    include "../controller/postContr.php";
    $Update= new PostContr($postTitle,$postDesc,$postImage,$postId);
    $Update->UpdatingPost();
    header("Location: ../admin.php?source=all");
}