<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <h2>formulir pendaftaran akun</h2>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <label>nama</label>
        <input type="nama" name="email"><br>
        <label>email</label>
        <input type="email"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <label>umur</label>
        <input type="number" name="umur"><br>
        <label>ttl</label>
        <input type="date" name="tanggal_lahir"><br>
        <label>warna favorit</label>
        <input type="color" name="warna_favorit"><br>
        <label>upload foto profil</label>
        <input type="file" name="foto_profil"><br>
        <label>jenis kelamin</label>
        <input type="radio" name="jenis_kelamin" value="laki laki">laki laki
        <input type="radio" name="jenis_kelamin" value="perempuan">perempuan<br><br>
        <label>jenis hobi</label><br>
        <input type="checkbox" name="hobi" value="membaca"> membaca <br>
        <input type="checkbox" name="hobi" value="travelling"> travelling <br>
        <input type="checkbox" name="hobi" value="olahraga"> olahraga <br>
        <label>asal negara server anda</label>
        <select name="negara">
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="indonesia">indonesia</option>
        </select><br><br>
        <label>biografi singkat</label><br>
        <textarea name="biografi" rows="4" cols="40"></textarea><br>
        <input type="submit" value="kirim">
    </form>

</body>
</html>