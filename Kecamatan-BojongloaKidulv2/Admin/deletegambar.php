<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM gambar WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:pegawai.php?alert=Berhasil Dihapus");
?>