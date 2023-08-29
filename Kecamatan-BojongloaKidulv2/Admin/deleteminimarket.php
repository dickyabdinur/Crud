<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM minimarket WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:minimarket.php?alert=Berhasil Dihapus");
?>