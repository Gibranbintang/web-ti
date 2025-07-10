<?php
    require 'fungsi.php';



    $id = $_GET["id"];

    $query = "SELECT * FROM mahasiswa WHERE id=$id";

    $mhs = ambildata($query)[0];

    

    if(isset($_POST["submit"]))
    {
        

        if(editmahasiswa($_POST, $id) > 0)
        {
            echo "
            <script>
                    alert('Data Berhasil Diedit!');
                    window.location.href='../datamhs.php';
            </script>
            ";
        }

        else
        {
            echo "
            <script>
                    alert('Data Gagal Diedit!');
                    window.location.href='../datamhs.php';
            </script>
            ";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="nama" id="name" required value="<?= $mhs["nama"]?>"/> <br>
        <label for="nim">Nim:</label>
        <input type="text" name="nim" id="nim" required  value="<?= $mhs["nim"]?>"/> <br>
        <label for="jurusan">prodi:</label>
        <input type="text" name="jurusan" id="jurusan" required  value="<?= $mhs["PRODI"]?>"/> <br>
        <label for="nohp">NoHp:</label>
        <input type="text" name="nohp" id="nohp" required  value="<?= $mhs["nohp"]?>"/> <br>
        <button type="submit" name="submit">Edit</button>
    </form>
</body>
</html>
