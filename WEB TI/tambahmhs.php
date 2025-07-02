<?php
    $koneksi = mysqli_connect("localhost:3306", "root", "", "webti");

    if(isset($_POST["submit"]))
    {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $jurusan = $_POST["jurusan"];
        $nohp = $_POST["nohp"];

        $query = "INSERT INTO mahasiswa VALUES('', '$nama','$nim','$jurusan', '$nohp')";
        mysqli_query($koneksi, $query);

        if(mysqli_affected_rows($koneksi) > 0)
        {
            echo "
            <script>
                    alert('Data Berhasil Ditambahkan!');
                    window.location.href='datamhs.php';
            </script>
            ";
        }

        else
        {
            echo "
            <script>
                    alert('Data Gagal Ditambahkan!');
                    window.location.href='datamhs.php';
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tamabah Data Mahasiswa</h1>
    <form action="" method="post">
        <label for="name">Nama:</label>
        <input type="text" name="nama" id="name" required/> <br>
        <label for="nim">Nim:</label>
        <input type="text" name="nim" id="nim" required/> <br>
        <label for="jurusan">jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required/> <br>
        <label for="nohp">NoHp:</label>
        <input type="text" name="nohp" id="nohp" required/> <br>
        <button type="submit" name="submit">Tambah</button>
    </form>
</body>
</html>