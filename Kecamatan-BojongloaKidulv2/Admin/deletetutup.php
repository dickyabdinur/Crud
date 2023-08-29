<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM tutup WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:tutup.php?alert=Berhasil Dihapus");
?>