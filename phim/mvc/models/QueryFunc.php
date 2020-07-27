<?php
    class QueryFunc extends DB{
    function TheLoai(){
        $sql = "
            SELECT * FROM theloai
        ";
        $result = mysqli_query($this->con, $sql);
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return $arr;
    }
    
    function LoaiPhim($idTL){
        $sql = "
            SELECT * FROM loaiphim
            where idTL=$idTL
        ";
        $result = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return $arr;
    }
    function LoaiPhimAdmin(){
        $sql = "
            SELECT * FROM loaiphim
        ";
        $result = mysqli_query($this->con, $sql);
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return $arr;
    }

    function PhimTheoLP($idLP){
        $sql = "
            SELECT * from phim
            WHERE idLP = $idLP
            ORDER BY idPhim DESC
            LIMIT 0,10
        ";
        $result = mysqli_query($this->con, $sql);
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return $arr;
    }

    function Phim($id){
        $sql = "
            SELECT * FROM phim
            where idPhim = $id
        ";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }
    function PhimMoiNhat(){
        $sql = "
            SELECT * FROM phim
            ORDER BY idPhim ASC
            LIMIT 0,4
        ";
        $result = mysqli_query($this->con, $sql);
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return $arr;
    }

    function HienThiPhimMoi($idTL){
        $sql = "
            SELECT * FROM phim
            where idTL=$idTL
            ORDER BY idPhim DESC
            LIMIT 0,8
        ";
        $result=mysqli_query($this->con, $sql);
        while($row = mysqli_fetch_array($result)){
            $arr[] = $row;
        }
        return $arr;
    }

    function BreadCum($id){
        $sql = "SELECT tenTL, tenLoaiPhim, tieuDe 
        FROM theloai, loaiphim, phim
        WHERE phim.idTL=theloai.idTL 
        AND phim.idLP=loaiphim.idLP 
        AND phim.idPhim=$id";

        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }
}
?>