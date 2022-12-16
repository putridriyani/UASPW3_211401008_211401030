<?php

if (isset($_POST['tambah']))
{
    include('koneksi.php');
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $jumlah     = $_POST['jumlah'];
    $tanggal    = $_POST['tanggal'];
    $update     = mysqli_query($koneksi, "update keluar set
    
    nama        = '$nama',
    jumlah      = '$jumlah',
    tanggal     = '$tanggal'
    
    where id   = '$id'")
        
    or die($mysqli_error());
    
    if($update)
    {
        echo "<h2>data berhasil diupdate</h2>";
        echo "<script>window.location = 'index.php'</script>";
    }
    
    else
    {
        echo "<h2>gagal menyimpan data</h2>";
        echo "<a href ='editkeluar.php ?id = ".$id."'>kembali</a>";
    } 
}

else
{
        echo "<script>window.history.back()</script>";
}


?>