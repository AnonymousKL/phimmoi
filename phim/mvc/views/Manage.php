
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>
<body>
    <div class="container" style="text-align:center;">
        <h1 style="color:green;">Trang quản trị</h1><br>
        <h3>Cập nhật Phim</h3>
        <form method="post">
            <input type="submit" name="btnLogout" value="Log Out"></input>
        </form>
        <div>   
            <form id="form1" name="form1" method="post" action=" ">

                Tên phim:----<input type="text" name="tenphim"required><br><br>
                Tên phim-EL:-<input type="text" name="tenphim_el"required><br><br>
                Url Phim:----<input type="text" name="urlphim"required><br><br>
                ID Thể Loại:-
                <input type="text" name="idTL"required><br><br>
                ID Loại Phim:
                <input type="text" name="idLP"required><br><br>
                urlThumbnail:<input type="text" name="urlThumbnail"required><br><br>
                urlPoster:---<input type="text" name="urlPoster"required><br>
                <input type="submit" name="btnThem" value="Thêm">
            </form>
        </div>
    </div>
</body>
</html>