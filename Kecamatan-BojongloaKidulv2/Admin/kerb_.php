<?php 
// koneksi database
include '../config/config.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$kelurahan = $_POST['kelurahan'];
$detail = $_POST['detail'];
$keterangan = $_POST['keterangan'];
 
// menginput data ke database
mysqli_query($conn,"INSERT into kerb values('','$nama','$lokasi','$kelurahan','$detail','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:kerb.php");
 
?>