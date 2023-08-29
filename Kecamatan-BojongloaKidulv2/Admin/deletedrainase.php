<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM drainase WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:drainase.php?alert=Berhasil Dihapus");
?>