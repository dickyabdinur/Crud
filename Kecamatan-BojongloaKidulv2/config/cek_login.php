<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['hak_akses']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:dashboard_admin.html");

	// cek jika user login sebagai user
	}else if($data['hak_akses']=="pegawai"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "pegawai";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard_pegawai.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}



?>