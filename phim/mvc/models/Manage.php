<?php
class Manage extends DB{
    public function Post($tenphim,$tenphim_el,$urlphim,$idTL,$idLP,$urlThumbnail,$urlPoster){
            $sql="INSERT INTO phim(`idPhim`,`tieuDe`,`tieuDe_EL`,`urlPhim`,`idTL`,`idLP`,`urlThumbnail`,`urlPoster`)
            VALUES(NULL,'$tenphim','$tenphim_el','$urlphim',$idTL,$idLP,'$urlThumbnail','$urlPoster')
            ";
            mysqli_query($this->con, $sql);
    }   
}

?>