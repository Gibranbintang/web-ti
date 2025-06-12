<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="checkbox" name="ingat" value="remember">
        <label>remember me</label><br>
        <input type="submit" value="login">
    </form>
    <p>belum punya akun? <a href="register.php">daftar</a></p>
    
</body>
</html>