<?php 
// koneksi database
include '../config/config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$kelurahan = $_POST['kelurahan'];
$detail = $_POST['detail'];
$keterangan = $_POST['keterangan'];
 
// update data ke database
mysqli_query($conn,"UPDATE pasar SET nama='$nama', lokasi='$lokasi', kelurahan='$kelurahan', detail='$detail', keterangan='$keterangan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:pasar.php");
 
?>