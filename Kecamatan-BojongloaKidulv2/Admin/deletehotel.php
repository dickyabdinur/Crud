<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM hotel WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:hotel.php?alert=Berhasil Dihapus");
?>