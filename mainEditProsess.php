<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "laundry");
    // menangkap data yang di kirim dari form
    $id_laundry = $_POST['id_laundry'];
    $customer = $_POST['customer'];
    $id_kategori= $_POST['id_kategori'];
    $harga= $_POST['harga'];

    // update data ke database
	$query="UPDATE pemesanan SET id_laundry='$id_laundry', customer='$customer', 
                                id_kategori='$id_kategori', harga='$harga' 
                                WHERE id_laundry='$id_laundry'";
	$result = mysqli_query($konektor, $query);
    if ($result) {
		echo "<script>alert('Berhasil Memperbarui Data!');history.go(-2);</script>";
        ?>
        <?php
            } else {
                echo "<script>alert('Gagal Memperbarui Data!');history.go(-1);</script>".mysqli_error($konektor);
            }
             // mengalihkan halaman kembali ke tabelBlkln.php
             header("location:main.php");  
         ?>
