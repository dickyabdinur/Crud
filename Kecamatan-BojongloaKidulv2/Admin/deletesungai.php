<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM sungai WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:sungai.php?alert=Berhasil Dihapus");
?>