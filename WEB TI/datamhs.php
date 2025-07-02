<?php

    $koneksi = mysqli_connect("localhost:3306","root","","webti");
    
    if(!$koneksi)
    {
        die("Gagal".mysqli_connect_error($koneksi));
    }
   
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    


    // while ($mhs = mysqli_fetch_assoc($result))
    // {
    //     var_dump($mhs);
    // }
    
    /// ambil data (fetch) dari table
    /// rumus ambil data ada 4, seperti yang di bawah:
    /// mysqli_fetch_row -> array number
    /// mysqli_fetch_assoc -> array assosiafive
    /// mysqli_fetch_array -> bisa dua duanya
    /// mysqli_fetch_object
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Unimus</title>
</head>
<body>
    <h1> DATA MAHASISWA </h1>
    <a href="tambahmhs.php"><button>Tambah Data</button></a>
    <table border=1 cellspacing="0" cellpadding="10px">
        <tr>
            <th>NO</th>
            <th>NAAMA</th>
            <th>NIM</th>
            <th>JURUSAN</th>
            <th>NO. HP</th>
            <th>AKSI</th>
        </tr>
        <?php 
        $i = 1;
        while($mhs = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $i  ?></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["prodi"] ?></td>
            <td><?= $mhs["nohp"] ?></td>
            <td>
                <a href="hapusmhs.php/?id=<?= $mhs["id"] ?>">Hapus</a> |
                <a href="editmhs.php/?id=<?= $mhs["id"] ?>">EDIT</a>
            </td>
        </tr>
        <?php $i++; } ?>
    </table>
</body>
</html>