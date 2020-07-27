<?php
class Home extends Controller{
    function SayHi(){
        $queryFunc = $this->model("QueryFunc");
        $this->view("Trangchu",[
           "menu"=>$this->view("pages/menu",""),
           "phimchieurap"=>$queryFunc->HienThiPhimMoi(7),
           "phimmoinhat"=>$queryFunc->PhimMoiNhat()
       ]);
    }
    function Show($a, $b){
        //Model
        $teo=$this->model("SinhVienModel");
        $tong=$teo->Tong($a, $b);
        //View
        $this->view("layout1",["Number"=>$tong,
                                "page"=>"menu",
                                "phim"=>$teo->GetPhim()
        ]);
    }
    function Cat(){
        
    }

}
?>