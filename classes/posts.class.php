<?php
class Posts extends Connection{
    protected function Displaying(){
        $id=$_SESSION['id'];
        $query="SELECT * FROM posts";
        $display=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_assoc($display)){
            $postId=$row['post_id'];
            $postTitle=$row['post_title'];
            $postContent=$row['post_description'];
            $postImage=$row['post_image'];
            $postDate=$row['post_date'];
            $postLikes=$row['post_likes'];
        echo "<div id='Post$postId' class='posts'>
        <img src='./images/$postImage' alt=''>
        <span class='post_content'>
            <h3>$postTitle</h3>
            <p>$postContent</p>
            <form method='post' action='../includes/likes.inc.php'>
            <input type='hidden' name='postid' value='$postId'/>".
            $this->AlreadyLiked($postId,$postLikes)."
            </form>
            <p class='post_date'><i class='bi bi-clock'></i> $postDate</p>
        </span>
        </div>";
        }
    }
    protected function LikesSystem($postid){
        session_start();
        $id=$_SESSION['id'];
        $query="SELECT * FROM users WHERE user_id = '{$id}'";
        $resultado=mysqli_query($this->Connect(),$query);
        while($fila=mysqli_fetch_assoc($resultado)){
            $userid=$fila['user_id']; }
        $query="SELECT * FROM posts WHERE post_id=$postid";
        $result = mysqli_query($this->Connect(), $query);
        $row = mysqli_fetch_array($result);
        $n = $row['post_likes'];
        mysqli_query($this->Connect(), "INSERT INTO likes (user_id, post_id) VALUES ($userid, $postid)");
        mysqli_query($this->Connect(), "UPDATE posts SET post_likes=$n+1 WHERE post_id=$postid");
    }
    protected function NotLiked($postid){
        $query="SELECT * FROM posts WHERE post_id=$postid";
        $result = mysqli_query($this->Connect(), $query);
        $row = mysqli_fetch_array($result);
        $n = $row['post_likes'];
        mysqli_query($this->Connect(), "DELETE FROM likes WHERE post_id = $postid");
        mysqli_query($this->Connect(), "UPDATE posts SET post_likes=$n-1 WHERE post_id=$postid");
    }
    protected function AlreadyLiked($postid,$postLikes){
        $id=$_SESSION['id'];
        $query="SELECT * FROM users WHERE user_id = '{$id}'";
        $resultado=mysqli_query($this->Connect(),$query);
        while($fila=mysqli_fetch_assoc($resultado)){
            $userid=$fila['user_id'];
        }
        $res="";
        $query="SELECT * FROM likes WHERE user_id = '$userid' AND post_id = '$postid'";
        $result=mysqli_query($this->Connect(),$query);
        $num=mysqli_num_rows($result);
        if($num>=1){
            $res="<button class='post_likes' type='submit' name='notliked'><i class='bi bi-heart-fill'></i> $postLikes</button>";
        }else if($num==0){
            $res="<button class='post_likes' type='submit' name='liked'><i class='bi bi-heart'></i> $postLikes</button>";
        }
        return $res;
    }

    protected function CreatingPost($Title,$Desc,$Image){
        session_start();
        $author=$_SESSION['username'];
        $query="INSERT INTO posts (post_title, post_description, post_image, post_date, post_author) VALUES ('{$Title}', '{$Desc}','{$Image}', now(), '{$author}')";
        $Create=mysqli_query($this->Connect(),$query);
    } 

    protected function UploadingPost(){
        if(isset($_GET['p_id'])){
            $post_id=$_GET['p_id']; }
        $query="SELECT * FROM posts WHERE post_id = $post_id";
        $edit=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_assoc($edit)){
            $Post_id=$row['post_id'];
            $postTitle=$row['post_title'];
            $postContent=$row['post_description'];
            $postImage=$row['post_image'];
        echo "<div class='admin_container_edit'>
        <h1>Edit a post</h1>
        <form action='../includes/editpost.inc.php' method='post' enctype='multipart/form-data'>
            <input type='hidden' name='id' value='$Post_id'>
            <div class='edit_inpt'>
            <label for=''>Post Title</label>
            <input type='text' value='{$postTitle}' name='titulo'>
            </div>
            <div class='edit_inpt_img'>
            <label for=''>Post Image</label>
            <img src='../images/{$postImage}' width='400px'/>
            <input type='file' name='imagen' value='$postImage'>
            </div>
            <div class='edit_inpt'>
            <label for=''>Post Description</label>
            <textarea name='descripcion' rows='5'>{$postContent}</textarea>
            </div>
            <input class='edit_btn' type='submit' value='UPDATE' name='edit_post'>
        </form>
    </div>";
        }
    }

    protected function UpdatePost($title,$desc,$image,$post_id){
    $query="UPDATE posts SET post_title='$title', post_description='{$desc}', post_image='$image' WHERE post_id =$post_id";
    $update=mysqli_query($this->Connect(),$query);
    }

    protected function DeletingPost(){
        if(isset($_GET['delete'])){
            $Post_ID=$_GET['delete'];
            $query="DELETE FROM posts WHERE post_id = '{$Post_ID}'";
            $delete=mysqli_query($this->Connect(),$query);
            header("Location: admin.php?source=all");
            return $delete;
        }
    }

    protected function ViewingPost(){
        
        $author=$_SESSION['username'];
        $query="SELECT * FROM posts WHERE post_author = '{$author}'";
        $display=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_assoc($display)){
            $postId=$row['post_id'];
            $postTitle=$row['post_title'];
            $postContent=$row['post_description'];
            $postImage=$row['post_image'];
        echo"<div class='view_container'>
                <div class='view_imagen'>
                    <img src='../images/$postImage' alt=''>
                </div>
                <div class='view_content'>
                    <h4>$postTitle</h4>
                    <p>$postContent</p>
                    <div class='actions'>
                        <a href='admin.php?source=edit&p_id={$postId}' name='edit'>Edit</a>
                        <a href='admin.php?source=all&delete=$postId' name='delete'>Delete</a>
                    </div>
                </div>
            </div>";
        }
        $this->DeletingPost();
    } 
}