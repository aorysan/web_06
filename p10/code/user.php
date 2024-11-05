<?php

$host = "localhost"; 
$user = "admin"; 
$password = "admin"; 
$database = "praktikumWebDB"; 

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE TABLE user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

if (mysqli_query($koneksi, $sql)) {
    echo "Tabel user berhasil dibuat.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>