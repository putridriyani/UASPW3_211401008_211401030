<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $id    = $_POST['id'];
        $nama   = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $tanggal = $_POST['tanggal'];
        
        $input  = mysqli_query($koneksi, "insert into keluar values
        ('$id', '$nama', '$jumlah', '$tanggal')");
        
        if($input)
        {
            echo "<h3>Data berhasil ditambahkan</h3>";
            echo "<script>window.location='index.php'</script>";
        }
        else
        {
            echo "gagal menambahkan data";
            echo "<a href = 'tambahkeluar.php'>kembali</a>";
        } 
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>