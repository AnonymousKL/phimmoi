
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="http://localhost:8080/phim/">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./public/form.css">
    <title>Sign up</title>
</head>
<body>
<div class="login">
        <h2>Đăng Ký</h2>
        <form method="post" action="">
            <div class="field">
                <label>Name</label>
                <input type="text" name="name" class="inputText"required>
            </div>
            <div class="field">
                <label>Username</label>
                <input type="text" name="user" class="inputText" required>
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="pass" class="inputText" required>
            </div>
            <div class="field">
                <label>Re-Password</label> 
                <input type="password" name="repass" class="inputText" required>
            </div>
            <input type="submit" value="Sign Up" name="btnSignup" class="btn">
            <p><a href="<?php echo URL_ROOT; ?>admin/Login">Log In</a><p>
        </form>
    </div>
</html>
