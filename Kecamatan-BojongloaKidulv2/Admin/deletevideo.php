<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM yt WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:video.php?alert=Berhasil Dihapus");
?>