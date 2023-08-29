<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM visimisi WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:dashboard_admin.php?alert=Berhasil Dihapus");
?>