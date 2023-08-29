<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM pasar WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:pasar.php?alert=Berhasil Dihapus");
?>