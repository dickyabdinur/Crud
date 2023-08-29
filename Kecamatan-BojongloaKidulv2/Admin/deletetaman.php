<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM taman WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:taman.php?alert=Berhasil Dihapus");
?>