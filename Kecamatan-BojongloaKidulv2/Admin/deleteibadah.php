<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM tempatibadah WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:ibadah.php?alert=Berhasil Dihapus");
?>