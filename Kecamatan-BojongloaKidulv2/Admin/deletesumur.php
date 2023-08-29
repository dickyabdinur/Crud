<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM sumurresapan WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:sumur.php?alert=Berhasil Dihapus");
?>