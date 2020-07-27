
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo URL_ROOT; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/style.css">
    <link rel="stylesheet" type="text/css" href="./public/phim.css">
    <title>Giới thiệu phim</title>
</head>
<body>
    <?php echo $data["menu"];?><!-- Header stop -->
    <div class="body-container">
        <div class="body">
            <div class="bread-cum">
                <ul>
                    <li><a href="<?php echo URL_ROOT; ?>">Trang chủ</a></li>
                    <?php 
                            echo "<li><a href='#'>" . $data["breadcum"]['tenTL']. "</a></li>
                            <li><a href='#'>". $data["breadcum"]['tenLoaiPhim'] ."</a></li>
                            <li><a href='#'>". $data["breadcum"]['tieuDe'] ."</a></li>";
                            
                        
                        // else if(isset($_GET['idLP'])){
                        //     $idLP=$_GET['idLP'];
                        //     $sql="SELECT tenTL, tenLoaiPhim 
                        //     FROM theloai, loaiphim
                        //     WHERE loaiphim.idTL=theloai.idTL 
                        //     AND loaiphim.idLP=$idLP";
                        //     $result=mysqli_query($GLOBALS['conn'], $sql);
                        //     $breadcrumb=mysqli_fetch_array($result);
                        //     echo "<li><a href='#'>" . $breadcrumb['tenTL']. "</a></li>
                        //     <li><a href='#'>". $breadcrumb['tenLoaiPhim'] ."</a></li>";
                        // }
                            
                    ?>
                    
                </ul>
            </div><!-- Giới thiệu phim -->
            <div class="gioi-thieu-phim">
            <div class="wrap-phim-left">
                <div class="movie-image">
                    <img width="315px" height="420px" src="<?php echo $data["phim"]['urlPoster'] ?>">
                    <ul class="blocks-btn" width="315px" >
                        <li class="btn" id="download"><a href="#">Download</a></span>
                        <li class="btn" id="trailer"><a href="#">Trailer</a></span>
                        <li class="btn" id="xemphim"><a href="index1.php?p=xemphim&id=<?php echo $row_phim['idPhim'] ?>">Xem phim</a></span>
                    </ul>
                </div>
                <div class="movie-info-right">
                    <h2 class="info-title">
                        ĐIỆP VIÊN TÍ HON
                    </h2>
                    <p class="el-title">
                        <span>My spy</span>
                        <span>(2019)</span>
                    </p>
                    
                    <div class="detail-info">
                        <dl>
                            <dt class="movie-dt">Trạng thái:</dt>
                            <dd class="movie-dd">Hoàn tất</dd><br>
                            <dt class="movie-dt">Đạo diễn:</dt>
                            <dd class="movie-dd">Peter</dd><br>
                            <dt class="movie-dt">Năm:</dt>
                            <dd class="movie-dd">1999</dd><br>
                            <dt class="movie-dt">Quốc gia:</dt>
                            <dd class="movie-dd">Việt Nam</dd><br>
                            <dt class="movie-dt">Ngày ra rạp:</dt>
                            <dd class="movie-dd">1/1/1999</dd><br>
                            <dt class="movie-dt">Thời lượng:</dt>
                            <dd class="movie-dd">99 phút</dd><br>
                            <dt class="movie-dt">Độ phân giải:</dt>
                            <dd class="movie-dd">FullHD</dd><br>
                            <dt class="movie-dt">Ngôn ngữ:</dt>
                            <dd class="movie-dd">Phụ đề Việt</dd><br>
                            <dt class="movie-dt">Thể loại:</dt>
                            <dd class="movie-dd">Phim hành động, phim hài hước, phim chiếu rạp</dd><br>
                        </dl>
                    </div>
                </div>
            </div>
            </div>
            <div class="content-right">
                <div class="trailer-phim-wrap">
                    <h2 class="icon-star">
                        <span class="title"> Trailer phim mới</span>
                    </h2>
                    <div class="trailer-phim-content scrollBar">
                        <ul>
                            <li><a href="">
                                    <div class="movie-thumbnail" id="movie-thumbnail1"
                                        style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10629/poster.small.jpg')">
                                    </div>
                                    <div class="movie-info">
                                        <p class="movie-info-name">Vũ Khí Sắc Đẹp</p>
                                        <p class="movie-info-name-eng">Danger Of Her</p>
                                        <p class="movie-info-view">Lượt xem: 0</p>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="movie-thumbnail" id="movie-thumbnail1"
                                        style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10629/poster.small.jpg')">
                                    </div>
                                    <div class="movie-info">
                                        <p class="movie-info-name">Vũ Khí Sắc Đẹp</p>
                                        <p class="movie-info-name-eng">Danger Of Her</p>
                                        <p class="movie-info-view">Lượt xem: 0</p>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="movie-thumbnail" id="movie-thumbnail1"
                                        style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10629/poster.small.jpg')">
                                    </div>
                                    <div class="movie-info">
                                        <p class="movie-info-name">Vũ Khí Sắc Đẹp</p>
                                        <p class="movie-info-name-eng">Danger Of Her</p>
                                        <p class="movie-info-view">Lượt xem: 0</p>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="movie-thumbnail" id="movie-thumbnail1"
                                        style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10629/poster.small.jpg')">
                                    </div>
                                    <div class="movie-info">
                                        <p class="movie-info-name">Vũ Khí Sắc Đẹp</p>
                                        <p class="movie-info-name-eng">Danger Of Her</p>
                                        <p class="movie-info-view">Lượt xem: 0</p>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="movie-thumbnail" id="movie-thumbnail1"
                                        style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10629/poster.small.jpg')">
                                    </div>
                                    <div class="movie-info">
                                        <p class="movie-info-name">Vũ Khí Sắc Đẹp</p>
                                        <p class="movie-info-name-eng">Danger Of Her</p>
                                        <p class="movie-info-view">Lượt xem: 0</p>
                                    </div>
                                </a></li>
                            <li><a href="">
                                    <div class="movie-thumbnail" id="movie-thumbnail1"
                                        style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10629/poster.small.jpg')">
                                    </div>
                                    <div class="movie-info">
                                        <p class="movie-info-name">Vũ Khí Sắc Đẹp</p>
                                        <p class="movie-info-name-eng">Danger Of Her</p>
                                        <p class="movie-info-view">Lượt xem: 0</p>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <div class="footer">

    </div>
</body>
</html>
