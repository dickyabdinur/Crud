<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM sma WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:sma.php?alert=Berhasil Dihapus");
?>