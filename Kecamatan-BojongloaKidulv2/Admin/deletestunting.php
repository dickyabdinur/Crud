<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM stunting WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:stunting.php?alert=Berhasil Dihapus");
?>