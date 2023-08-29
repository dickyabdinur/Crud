<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM kerb WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:kerb.php?alert=Berhasil Dihapus");
?>