<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM sd WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:sd.php?alert=Berhasil Dihapus");
?>