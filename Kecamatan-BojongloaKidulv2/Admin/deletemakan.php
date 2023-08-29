<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM rumahmakan WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:makan.php?alert=Berhasil Dihapus");
?>