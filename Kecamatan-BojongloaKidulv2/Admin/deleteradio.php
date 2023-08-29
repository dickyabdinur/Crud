<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM radio WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:radio.php?alert=Berhasil Dihapus");
?>