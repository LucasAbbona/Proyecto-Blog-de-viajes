<?php
include "../classes/connection.class.php";
include "../classes/posts.class.php";
include "../controller/postContr.php";
if (isset($_POST['liked'])) {
    $id=$_POST['postid'];
        $like = new PostContr("","","",$id);
        $like->Liking();
        header("Location: ../landing.php#Post$id");
        }
if(isset($_POST['notliked'])){
    $id=$_POST['postid'];
    $like = new PostContr("","","",$id);
    $like->Disliking();
    header("Location: ../landing.php#Post$id");
}