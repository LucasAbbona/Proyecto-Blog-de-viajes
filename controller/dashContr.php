<?php
class DashboardContr extends Dashboard{
    public function DisplayNumber(){
        echo $this->NumPost();
    }
    public function DisplayLikes(){
        echo $this->NumLikes();
    }
}