<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM fasilitassosial WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:sosial.php?alert=Berhasil Dihapus");
?>