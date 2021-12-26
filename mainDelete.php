<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "laundry");
// menangkap data id yang di kirim dari url
$id_laundry = $_GET['id_laundry'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM pemesanan WHERE id_laundry='$id_laundry'");
 
// mengalihkan halaman kembali ke tabelBlkln.php
header("location:main.php");
 
?>