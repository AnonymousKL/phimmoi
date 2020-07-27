<?php
class News extends Controller{
    function SayHi(){
        $news=$this->model("NewsModel");
        echo $news->GetNews();
    }
}
?>