<?php


$koneksi = mysqli_connect("localhost:3306","root", "", "webti");

if(!$koneksi)
{
    die("koneksi gagal!".mysqli_connect_error());
}
else
{
    echo "koneksi berhasil!!!";
}



?>








<!DOCTYPE html>
<html>
    <head>
        <title>
           HOME - Web Teknologi Informasi
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">

    </head>
    <body bgcolor="#83ebcd">
        <h1 align = "center">Website <br> Teknologi Informasi</h1> <!--Element-->
        <hr width="50%" size="2px" color="black">
        <center>
            <nav align ="center">
                <a href="index.php" >HOME</a> |
                <a href="profil.php">PROFIL</a> |
                <a href="about.php">ABOUT US</a>
                <a href="login.php">LOGIN</a>
                <a href="datamhs.php">DATA</a>
            </nav>
        </center>
        <h1 align ="center">
        <img src="data:image/jpeg;base64,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" width="300px" />
        </h1>
        <p align ="center">
            <b> aku adalah manusia terkuat di dunia, suka berburu, cinta akan kemenangan.</b> dan bisa berbagai bahasa <b><u><i>. aku sang pemenang.</i></u></b> niestche.
        </p>
        <h2>Daftar Belanja</h2>
        <ol> <!--OL = model daftar angka-->
            <li>DAGING</li>
                <ul> <!--ul = model daftar simbol bulet-->
                    <li>Ayam 2kg</li>
                    <li>Bebek 2kg</li>
                    <li>Kambing 2kg</li>
                    <li>Kelinci 2kg</li>
                </ul>

            <li>SAYURAN</li>
                <ul>
                    <li>JAGUNG 2kg</li>
                    <li>CABAI MERAH 2kg</li>
                    <li>BAWANG MERAH 2kg</li>
                    <li>BAWANG PUTIH 2kg</li>
                </ul>

            <li>Bumbu</li>
                <ul>
                    <li>KECAP 2kg</li>
                    <li>GARAM 2kg</li>
                    <li>GULA 2kg</li>
                    <li>MERICA 2kg</li>
                </ul>

            <li>Minyak</li>
                <ul>
                    <li>JELANTAH 2kg</li>
                    <li>BUMI 2kg</li>
                    <li>ANGIN 2kg</li>
                    <li>TANAH 2kg</li>
                </ul>

            <li>PAKAIAN</li>
                <ul>
                    <li>KAOS DISTRO</li>
                    <li>DASTER GAUL</li>
                    <li>SEMPAK GUSION</li>
                    <li>JUBAH BATMAN</li>
                </ul>
        </ol>
    </body>
</html>