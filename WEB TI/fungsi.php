<?php

 $koneksi = mysqli_connect("localhost:3307","root","","webti");

    if(!$koneksi)
    {
        die("Gagal".mysqli_connect_error($koneksi));
    }

    function ambildata($query)
    {
        global $koneksi;

        $result=mysqli_query($koneksi,$query);

        $rows = [];

        while($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
         return $rows;
    }
function tambahdatamhs($data)
{
    global $koneksi;
        $nama = $data["nama"];
        $nim = $data["nim"];
        $jurusan = $data["jurusan"];
        $nohp = $data["nohp"];

        $query = "INSERT INTO mahasiswa VALUES('', '$nama','$nim','$jurusan', '$nohp')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
}
function hapusmhs($id)
{
    global $koneksi;
    $query = "DELETE FROM mahasiswa WHERE id = '$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function editmahasiswa($data, $id)
{
    global $koneksi;
        $nama = $data["nama"];
        $nim = $data["nim"];
        $jurusan = $data["jurusan"];
        $nohp = $data["nohp"];

        $query = "UPDATE mahasiswa set 
        nama='$nama',
        nim='$nim',
        prodi='$jurusan',
        nohp='$nohp'
        WHERE id=$id
        ";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
}
