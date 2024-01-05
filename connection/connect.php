<?php

//file koneksi utama untuk admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "onlinefoodphp";  //database

// Buat koneksi
$db = mysqli_connect($servername, $username, $password, $dbname); // menghubungkan
// Periksa koneksi
if (!$db) {       //memeriksa koneksi ke DB
    die("Connection failed: " . mysqli_connect_error());
}

?>