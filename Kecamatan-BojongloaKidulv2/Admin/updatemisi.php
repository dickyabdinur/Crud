<?php 
// koneksi database
include '../config/config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$m6 = $_POST['m6'];
$m7 = $_POST['m7'];
$m8 = $_POST['m8'];
$m9 = $_POST['m9'];
$m10 = $_POST['m10'];
 
// update data ke database
mysqli_query($conn,"UPDATE misi SET m1='$m1', m2='$m2', m3='$m3', m4='$m4', m5='$m5', m6='$m6', m7='$m7', m8='$m8', m9='$m9', m10='$m10' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard_admin.php");
 
?>