<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM komunal WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:komunal.php?alert=Berhasil Dihapus");
?>