<?php 
// koneksi database
include '../config/config.php';
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:pegawai.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 144700000){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'file/'.$rand.'_'.$filename);
		mysqli_query($conn, "INSERT INTO gambar VALUES('','$xx')");
		header("location:pegawai.php?alert=berhasil");
	}else{
		header("location:pegawai.php?alert=gagal_ukuran");
	}
} 
?>