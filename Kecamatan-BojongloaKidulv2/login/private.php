<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../config/config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * from private where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
    $data = mysqli_fetch_assoc($login);
 
    // cek jika user login sebagai admin
    if($data['hak_akses']=="admin"){
 
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['hak_akses'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:../Admin/dashboard_admin.php");
 
    // cek jika user login sebagai pegawai
    }else{
 
        // alihkan ke halaman login kembali
        header("location:../Admin/private.php?pesan=gagal");
    }   
}else{
    header("location:../Admin/private.php?pesan=gagal");
}
 
?>