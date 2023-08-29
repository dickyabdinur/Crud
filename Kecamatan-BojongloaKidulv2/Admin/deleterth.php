<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM rth WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:rbk.php?alert=Berhasil Dihapus");
?>