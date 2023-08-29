<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM smp WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:smp.php?alert=Berhasil Dihapus");
?>