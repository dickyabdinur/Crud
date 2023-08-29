<?php
 require_once("../config/config.php");
 $id = $_GET['id'];
 $query = "DELETE FROM fasilitasolahraga WHERE id = '$id'";
 $queryact = mysqli_query($conn, $query);
 header("location:olahraga.php?alert=Berhasil Dihapus");
?>