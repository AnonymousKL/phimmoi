
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo URL_ROOT; ?>">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/form.css"/>
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h2>Đăng Nhập</h2>
        <form method="post" action="">
            <div class="field">
                <label>Username</label> 
                <input type="text" name="user" class="inputText">
            </div>
            <div class="field">
                <label>Password</label> 
                <input type="password" name="pass" class="inputText">
            </div>
            <input type="submit" value="Login" name="btnLogin" class="btn">
            <p>Don't have an account? <a href="<?php echo URL_ROOT; ?>admin/Register">Sign Up</a></p>

        </form>
        
    </div>
</body>
</html>