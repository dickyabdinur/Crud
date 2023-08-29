<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM odf WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:odf.php?alert=Berhasil Dihapus");
?>