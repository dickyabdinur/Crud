<?php 
include '../config/config.php';
 
$judul = $_POST['judul'];
$tgl = $_POST['tgl'];
$link = $_POST['link'];
 
mysqli_query($conn,"INSERT into yt values('','$judul','$tgl','$link')");
header("location:video.php");
 
?>