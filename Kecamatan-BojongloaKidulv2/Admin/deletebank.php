<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM bank WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:bank.php?alert=Berhasil Dihapus");
?>