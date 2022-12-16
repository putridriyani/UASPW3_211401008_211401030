<?php
date_default_timezone_set("Asia/Jakarta");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cash";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
} 

?>