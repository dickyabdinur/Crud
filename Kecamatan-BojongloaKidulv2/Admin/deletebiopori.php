<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM biopori WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:biopori.php?alert=Berhasil Dihapus");
?>