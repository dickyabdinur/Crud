<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM paud WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:paud.php?alert=Berhasil Dihapus");
?>