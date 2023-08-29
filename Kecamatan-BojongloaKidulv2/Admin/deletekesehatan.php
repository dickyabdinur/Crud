<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM fasilitaskesehatan WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:kesehatan.php?alert=Berhasil Dihapus");
?>