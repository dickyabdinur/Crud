<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM berita WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:berita.php?alert=Berhasil Dihapus");
?>