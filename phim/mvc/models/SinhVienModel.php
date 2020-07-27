<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "SinhVienModel";
    }
    public function Tong($a, $b){
        return $a+$b;
    }
    
    public function GetPhim(){
        $sql = "select * from phim";
        return mysqli_query($this->con, $sql);
    }
}
?>