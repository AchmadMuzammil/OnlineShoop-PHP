<?php
include("connection/connect.php"); //koneksi ke database
error_reporting(0);
session_start();


// mengirimkan permintaan
mysqli_query($db,"DELETE FROM users_orders WHERE o_id = '".$_GET['order_del']."'"); 
header("location:your_orders.php"); 

?>
