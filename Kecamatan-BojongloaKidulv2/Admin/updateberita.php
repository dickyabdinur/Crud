<?php
include "../config/config.php";
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tgl = $_POST['tgl'];
$link = $_POST['link'];
$hak_akses = $_POST['hak_akses'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
    // Ambil data foto yang dipilih dari form
    $sumber = $_FILES['foto']['name'];
    $nama_gambar = $_FILES['foto']['tmp_name'];
    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$sumber;
    // Set path folder tempat menyimpan fotonya
    $path = "file/".$fotobaru;
    if(move_uploaded_file($nama_gambar, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Query untuk menampilkan data user berdasarkan id_user yang dikirim
        $query = "SELECT * FROM berita WHERE id='".$id."'";
        $sql = mysqli_query($conn,$query); // Eksekusi/Jalankan query dari variabel $query
        $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
        // Cek apakah file gambar sebelumnya ada di folder foto
        if(is_file("file/".$data['file'])) // Jika gambar ada
            unlink("file/".$data['file']); // Hapus file gambar sebelumnya yang ada di folder images
        // Proses ubah data ke Database
        $query = "UPDATE berita SET judul='$judul',foto='$fotobaru', deskripsi='$deskripsi', tgl='$tgl',link='$link' where id='$id' ";
        $sql = mysqli_query($conn,$query); // Eksekusi/ Jalankan query dari variabel $query
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            header("location: berita.php"); // Redirect ke halaman berita.php
        }else{
            // Jika Gagal, Lakukan :
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='berita.php'>Kembali Ke Form</a>";
        }
    }else{
        // Jika gambar gagal diupload, Lakukan :
        echo   "<script> alert('Maaf, Gambar gagal untuk diupload'); 
                location = 'berita.php'; 
                </script>";
    }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
    // Proses ubah data ke Database
    $query = "UPDATE berita SET judul='$judul', deskripsi='$deskripsi', tgl='$tgl',link='$link' where id='$id' ";
    $sql = mysqli_query($conn,$query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: berita.php"); // Redirect ke halaman berita.php
    }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='berita.php'>Kembali Ke Form</a>";
    }
}
?>