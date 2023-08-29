<?php
    include 'config/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kecamatan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>022-5206478</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-buildings mr-2"></i>bojongloakidul2017@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="https://wa.me/6281394477786">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/bojongloakidul/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.youtube.com/channel/UCtnETUAmvh0XTB7hyJuBHkg">
                        <i class="fab fa-youtube"></i>
                    <a class="text-white px-2" href="https://www.facebook.com/profile.php?id=100016766732146&sk=about_overview">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white pl-2" href="https://twitter.com/kecbojkid_ktbdg">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="Home.php" class="navbar-brand ml-lg-3">
                <h3 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-bookmark"></i> Kecamatan bojongloa kidul</h4>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="Home.php" class="nav-item nav-link">Home</a>
                    <a href="Tentang.php" class="nav-item nav-link">Tentang</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pelayanan</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="KartuTandaPenduduk.php" class="dropdown-item">Kartu Tanda Penduduk</a>
                            <a href="KartuKeluarga.php" class="dropdown-item">Kartu Keluarga</a>
                            <a href="Umum.php" class="dropdown-item">Umum</a>
                            <a href="pelayananonline.php" class="dropdown-item">Pelayanan Online</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="StrukturOrganisasi.php" class="dropdown-item">Sturktur organisasi</a>
                            <a href="TugasDanFungsi.php" class="dropdown-item">Tugas dan fungsi</a>
                            <a href="saranaprasarana.php" class="dropdown-item active">Sarana Dan Prasarana</a>
                        </div>
                    </div>
                    <a href="PortalBerita1.php" class="nav-item nav-link">Berita</a>
                    <a href="contact.php" class="nav-item nav-link">Pengaduan & Saran</a>
                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeri</a>
                    <div class="dropdown-menu rounded-0 m-0">
                            <a href="Galeri.php" class="dropdown-item">Galeri Foto</a>
                            <a href="Ggaleri.php" class="dropdown-item">Galeri Video</a>
                    </div>
                    </div>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mb-5">sarana dan prasarana</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Sarana dan Prasarana start-->
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4"><b>Sarana dan Prasarana</b></h6>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM bank");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">1</th>
                            <td scope="col">Bank</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="bank.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM banksampah");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">2</th>
                            <td scope="col">Bank Sampah</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="banksampah.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM tk");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">3</th>
                            <td scope="col">TK</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="tk.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM biopori");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">4</th>
                            <td scope="col">Biopori</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="biopori.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM drainase");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">5</th>
                            <td scope="col">Drainase</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="drainase.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM fasilitaskesehatan");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">6</th>
                            <td scope="col">Fasilitas Kesehatan</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="fasilitaskesehatan.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM fasilitasolahraga");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">7</th>
                            <td scope="col">Fasilitas Olahraga</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="fasilitasolahraga.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM fasilitassosial");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">8</th>
                            <td scope="col">Fasilitas Sosial</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="fasilitassosial.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM halte");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">10</th>
                            <td scope="col">Halte</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="halte.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM hotel");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">11</th>
                            <td scope="col">Hotel</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="hotel.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM jalan");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">12</th>
                            <td scope="col">Terminal</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="jalan.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM radio");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">13</th>
                            <td scope="col">Stasion Radio</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="radio.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM kerb");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">14</th>
                            <td scope="col">UMKM</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="Kerb.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM komunal");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">15</th>
                            <td scope="col">Toko</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="komnual.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM odf");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">16</th>
                            <td scope="col">Perguruan Tinggi</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="odf.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM pasar");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">17</th>
                            <td scope="col">Pasar Tradisional</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="pasar.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM paud");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">18</th>
                            <td scope="col">Paud</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="paud.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM rth");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">19</th>
                            <td scope="col">Ruang Terbuka Hijau</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="rth.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM rumahmakan");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">20</th>
                            <td scope="col">Rumah Makan</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="rumahmakan.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM rutilahu");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">21</th>
                            <td scope="col">Rutilahu</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="rutilahu.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM sd");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">22</th>
                            <td scope="col">SD</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="sd.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM smp");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">23</th>
                            <td scope="col">SMP</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="smp.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM sma");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">24</th>
                            <td scope="col">SMA</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="sma.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM stunting");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">25</th>
                            <td scope="col">Stasion TV</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="stunting.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM sumurresapan");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">26</th>
                            <td scope="col">Tempat Pembuangan Sampah</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="sumurresapan.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM sungai");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">27</th>
                            <td scope="col">Sungai</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="sungai.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM taman");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">28</th>
                            <td scope="col">Taman</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="taman.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM tempathiburan");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">29</th>
                            <td scope="col">Tempat Hiburan</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="tempathiburan.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM tutup");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">30</th>
                            <td scope="col">Tutup</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="tutup.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM modern");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">31</th>
                            <td scope="col">Pasar Modern</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="modern.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM minimarket");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">32</th>
                            <td scope="col">Minimarket</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="minimarket.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                        <tr>
                            <?php
                    include 'config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM tempatibadah");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                            <th scope="row">33</th>
                            <td scope="col">Tempat ibadah</td>
                            <td scope="col"><?php echo $jumlah; ?></td>
                            <td scope="col"><a class="btn btn-primary" href="tempatibadah.php">Detail</a></td>
                        </tr>
                        <!-- Batas -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Sarana dan prasrana End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Kontak</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Kebon Lega II, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>022-5206478<i></i></p>
                        <p><i class="fa fa-whatsapp mr-2"></i>081394477786</p>
                        <p><i class="fa fa-envelope mr-2"></i>bojongloakidul2017@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="https://twitter.com/kecbojkid_ktbdg"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="https://www.facebook.com/profile.php?id=100016766732146&sk=about_overview"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="https://www.instagram.com/bojongloakidul/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UCtnETUAmvh0XTB7hyJuBHkg"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Kecamatan bojongloa kidul</a>. All Rights Reserved. 
				
				<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
				Designed by STT Bandung and <a href="#">HTML Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>