<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "laundry");
// menangkap data yang di kirim dari form
$id_laundry= $_POST['id_laundry'];
$customer = $_POST['customer'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];

 
// menginput data ke database
mysqli_query($konektor,"INSERT INTO pemesanan VALUES('','$customer','$id_kategori','$harga')");
 
// mengalihkan halaman kembali ke tabelBlkln.php
header("location:main.php");
 
?>