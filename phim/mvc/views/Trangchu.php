
<!DOCTYPE html>
<html>

<head>
    <base href="<?php echo URL_ROOT; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./public/style.css">
    <link rel="stylesheet" href="./public/phim.css">
    <title>Phim mới</title>
</head>

<body>
    <div class="container">
        <!--Header start-->
        <?php echo $data["menu"]; ?>
        <!-- Header stop -->
        <!-- Start slide top -->
        <div class="body-container">
            <div class="body">
                <div class="wrap-top-movie">
                    <p class="title">PHIM ĐỀ CỬ</p>
                    <div class="slide-top-movie">
                        <div class="wrap-slide-top">
                            <ul>
                            <?php
                            // index1.php?p=gioithieuphim&id=
                            //PhimMoiNhat()
                            
                                foreach($data["phimmoinhat"] as $temp){
                            ?>
                                <li><a href="<?php echo URL_ROOT;?>Gioithieuphim?td=<?php echo$temp['tieuDe_EL'] ?>&id=<?php echo $temp['idPhim'] ?>">
                                        <div class="poster" id="poster1" style="background-image:url('<?php echo $temp['urlPoster'] ?>')">
                                            <div class="poster-discribe">
                                                <h3 class="movie-name1"><?php echo $temp['tieuDe'] ?></h3>
                                                <h4 class="movie-name2"><?php echo $temp['tieuDe_EL'] ?></h4>
                                                <span class="ribbon" style="top: -235px;">
                                                    Việt sub | Tập 3
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Stop slide top -->
                <!-- Start Phim Chieu Rap -->
                <div class="content-left">
                    <div class="phim-chieu-rap">
                        <div class="title-phim-chieu-rap">
                            <span class="title" id="title-1">PHIM CHIẾU RẠP</span>
                            <a class="more-index" href=#>Xem tất cả</a>
                        </div>
                        <div class="wrap-phim-chieu-rap">
                            <ul>
                            <?php 
                
                                foreach($data["phimchieurap"] as $temp){
                                ?>
                                <li><a href="<?php echo URL_ROOT;?>Gioithieuphim?id=<?php echo $temp['idPhim'] ?>">
                                        <div class="movie-poster" id="movie-poster1"
                                            style="background-image: url('<?php echo $temp['urlThumbnail'] ?>');"></div>
                                        <p class="movie-name1-1"><?php echo $temp['tieuDe'] ?></p>
                                        <p class="movie-name1-2"><?php echo $temp['tieuDe_EL'] ?></p>
                                        <p class="time">100 phút</p>
                                        <span class="ribbon">
                                            Việt sub | Tập 3
                                        </span>
                                    </a></li>
                                <?php
                                }
                                ?>                                                                  
                            </ul>
                        </div>
                    </div>
                    <!-- stop Phim chiếu rạp -->
                    <!-- start phim lẻ cập nhật -->
                    <div class="phim-chieu-rap">
                        <div class="title-phim-chieu-rap">
                            <span class="title" id="title-1">PHIM MỚI</span>
                            <a class="more-index" href=#>Xem tất cả</a>
                        </div>
                        <div class="wrap-phim-chieu-rap">
                            <ul>
                                <?php  
                                foreach($data["phimchieurap"] as $phimchieurap){
                                ?>
                                <li><a href="<?php echo URL_ROOT;?>Gioithieuphim?id=<?php echo $phimchieurap['idPhim'] ?>">
                                        <div class="movie-poster" id="movie-poster1"
                                            style="background-image: url('<?php echo $phimchieurap['urlThumbnail'] ?>');"></div>
                                        <p class="movie-name1-1"><?php echo $phimchieurap['tieuDe'] ?></p>
                                        <p class="movie-name1-2"><?php echo $phimchieurap['tieuDe_EL'] ?></p>
                                        <p class="time">100 phút</p>
                                        <span class="ribbon">
                                            Việt sub | Tập 3
                                        </span>
                                    </a></li>
                                <?php
                                }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- end phim lẻ cập nhật -->
                    <!-- start phim bộ cập nhật -->
                    <div class="phim-chieu-rap">
                        <div class="title-phim-chieu-rap">
                            <span class="title" id="title-1">PHIM </span>
                            <a class="more-index" href=#>Xem tất cả</a>
                        </div>
                        <div class="wrap-phim-chieu-rap">
                            <ul>
                                <li><a href="#">
                                        <div class="movie-poster" id="movie-poster1"
                                            style="background-image: url('./images/poster1.1.jpg');"></div>
                                        <p class="movie-name1-1">Tiếng gọi nơi hoang dã</p>
                                        <p class="movie-name1-2">The Call of the Wild</p>
                                        <p class="time">100 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster2"
                                            style="background-image: url('./images/poster1.2.jpg');"></div>
                                        <p class="movie-name1-1">Siêu anh hùng BloodShot</p>
                                        <p class="movie-name1-2">Bloodshot</p>
                                        <p class="time">120 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster3"
                                            style="background-image: url('./images/poster1.3.jpg');"></div>
                                        <p class="movie-name1-1">Những gã trai hư</p>
                                        <p class="movie-name1-2">Bad boys for life</p>
                                        <p class="time">95 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster4"
                                            style="background-image: url('./images/poster1.4.jpg');"></div>
                                        <p class="movie-name1-1">Quý ông thế giới ngầm</p>
                                        <p class="movie-name1-2">The Gentlement</p>
                                        <p class="time">70 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster5"
                                            style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10354/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Tháng năm hạnh phúc</p>
                                        <p class="movie-name1-2">Happy old year</p>
                                        <p class="time">113 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster6"
                                            style="background-image: url('https://i3.wp.com/image.phimmoi.net/film/10358/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Sát thủ vô cùng cực</p>
                                        <p class="movie-name1-2">Age: Hit Man</p>
                                        <p class="time">120 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster7"
                                            style="background-image: url('https://i3.wp.com/image.phimmoi.net/film/9983/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Kẻ săn mồi biển sâu</p>
                                        <p class="movie-name1-2">Underwater</p>
                                        <p class="time">93 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster8"
                                            style="background-image: url('https://i3.wp.com/image.phimmoi.net/film/9030/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Cuộc săn lùng</p>
                                        <p class="movie-name1-2">The hunt</p>
                                        <p class="time">89 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster9"
                                            style="background-image:url('https://i3.wp.com/image.phimmoi.net/film/10354/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Tháng năm hạnh phúc</p>
                                        <p class="movie-name1-2">Happy old year</p>
                                        <p class="time">113 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster10"
                                            style="background-image: url('https://i3.wp.com/image.phimmoi.net/film/10358/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Sát thủ vô cùng cực</p>
                                        <p class="movie-name1-2">Age: Hit Man</p>
                                        <p class="time">120 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster11"
                                            style="background-image: url('https://i3.wp.com/image.phimmoi.net/film/9983/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Kẻ săn mồi biển sâu</p>
                                        <p class="movie-name1-2">Underwater</p>
                                        <p class="time">93 phút</p>
                                    </a></li>
                                <li><a href="">
                                        <div class="movie-poster" id="movie-poster12"
                                            style="background-image: url('https://i3.wp.com/image.phimmoi.net/film/9030/poster.thumb.jpg')">
                                        </div>
                                        <p class="movie-name1-1">Cuộc săn lùng</p>
                                        <p class="movie-name1-2">The hunt</p>
                                        <p class="time">89 phút</p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- end content-left -->
                <!-- start content-right -->
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

                    <div class="trailer-phim-wrap">
                        <h2 class="icon-star">
                            <span class="title"> Trailer phim mới</span>
                        </h2>
                        <div class="trailer-phim-content">
                            <ul>
                                <li><a href=#>
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
                <!-- end content right -->
            </div>
        </div>
    </div>
</body>

</html>