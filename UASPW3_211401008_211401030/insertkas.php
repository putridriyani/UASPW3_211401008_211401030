<?php
if (!defined('INDEX')) die("");

$query = mysqli_query($koneksi, "INSERT INTO kas SET id='$_POST[id]', nama = '$_POST[nama]' ");

if ($query) {
    echo 'Data berhasil disimpan';
    echo "<meta http-equiv='refresh' content='1;url=?hal=kas'>";
} else {
    echo 'Tidak dapat menyimpan data';
    echo mysqli_error($koneksi);
}