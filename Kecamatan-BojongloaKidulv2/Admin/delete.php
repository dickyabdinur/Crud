<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM user WHERE nip = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:pegawai.php?alert=Berhasil Dihapus");
?>