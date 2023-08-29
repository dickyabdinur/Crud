<?php 
// koneksi database
include 'config/config.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$nohp = $_POST['nohp'];
$deskripsi = $_POST['deskripsi'];
 
// menginput data ke database
mysqli_query($conn,"INSERT into keluhan values('','$username','$nohp','$deskripsi')");
 
// mengalihkan halaman kembali ke index.php
header("location:contact.php?pesan=berhasil");
 
?>