<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM galeri WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:galeri.php?alert=Berhasil Dihapus");
?>