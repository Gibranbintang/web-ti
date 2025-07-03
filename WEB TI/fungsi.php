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

