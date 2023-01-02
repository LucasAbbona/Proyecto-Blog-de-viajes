<?php
class Dashboard extends Connection{
    protected function NumPost(){
        $author=$_SESSION['username'];
        $query="SELECT * FROM posts WHERE post_author='{$author}'";
        $result=mysqli_query($this->Connect(),$query);
        $num=mysqli_num_rows($result);
        return $num;
    }
    protected function NumLikes(){
        $num=0;
        $ath=$_SESSION['username'];
        $query="SELECT * FROM posts WHERE post_author='{$ath}'";
        $resultado=mysqli_query($this->Connect(),$query);
        while($row=mysqli_fetch_array($resultado)){
            $postid=$row['post_id'];
            $query="SELECT * FROM likes WHERE post_id = '{$postid}'";
            $result=mysqli_query($this->Connect(),$query);
            $res=mysqli_num_rows($result);
            $num+=$res;
        }
        return $num;
    }
    
}