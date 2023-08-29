<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM rutilahu WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:rutilahu.php?alert=Berhasil Dihapus");
?>