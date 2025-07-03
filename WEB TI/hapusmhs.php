<?php

require 'fungsi.php';
$id = $_GET["id"];

if(hapusmhs($id))
{
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = '../datamhs.php';
    </script>";
}
else
{
    echo "
    <script>
    alert('Data gagal dihapus');
    document.location.href = '../datamhs.php';
    </script>";
}




?>
