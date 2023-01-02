<?php
class PostContr extends Posts{
    public function __construct($title,$desc,$image,$id){
        $this->title=$title;
        $this->Desc=$desc;
        $this->Image=$image;
        $this->id=$id;
    }
    public function DisplayContent(){
        $this->Displaying();
    }
    public function AddPost(){
        $this->CreatingPost($this->title,$this->Desc,$this->Image);
    }
    public function ViewPost(){
        $this->ViewingPost();
    }
    public function EditingPost(){
        $this->UploadingPost();
    }
    public function UpdatingPost(){
        $this->UpdatePost($this->title,$this->Desc,$this->Image,$this->id);
    }
    public function Liking(){
        $this->LikesSystem($this->id);
    }
    public function Disliking(){
        $this->NotLiked($this->id);
    }
}