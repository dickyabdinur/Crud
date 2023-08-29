<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM halte WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:halte.php?alert=Berhasil Dihapus");
?>