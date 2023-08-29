<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM tempathiburan WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:hiburan.php?alert=Berhasil Dihapus");
?>