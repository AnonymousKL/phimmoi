<?php

class Gioithieuphim extends Controller{
    function SayHi(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $query = $this->model("QueryFunc");
        $phim = $query->Phim($id);
        $breadcum = $query->BreadCum($id);
        $this->view("Gioithieuphim",[
                    "menu"=>$this->view("pages/menu",""),
                    "breadcum"=>$breadcum,
                    "phim"=>$phim,
                                    ]);

    }
    function Xemphim(){
        
    }
}

?>