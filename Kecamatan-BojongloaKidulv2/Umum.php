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
                <h3 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-bookmark"></i> Kecamatan Bojongloa Kidul</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="Home.php" class="nav-item nav-link">Home</a>
                    <a href="Tentang.php" class="nav-item nav-link">Tentang</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pelayanan</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="KartuTandaPenduduk.php" class="dropdown-item">Kartu Tanda Penduduk</a>
                            <a href="KartuKeluarga.php" class="dropdown-item ">Kartu Keluarga</a>
                            <a href="Umum.php" class="dropdown-item active">Umum</a>
                            <a href="pelayananonline.php" class="dropdown-item">Pelayanan Online</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="StrukturOrganisasi.php" class="dropdown-item">Sturktur organisasi</a>
                            <a href="TugasDanFungsi.php" class="dropdown-item">Tugas dan fungsi</a>
                            <a href="saranaprasarana.php" class="dropdown-item">Sarana Dan Prasarana</a>
                        </div>
                    </div>
                    <a href="PortalBerita1.php" class="nav-item nav-link">Berita</a>
                    <a href="contact.php" class="nav-item nav-link">Pengaduan & Saran</a>
                    <a href="Galeri.php" class="nav-item nav-link">Galeri</a>
                    
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Umum</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="#ahli">Ahli Waris</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0"><a class="text-white" href="#legalisir">Legalisir</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0"><a class="text-white" href="#surat">Surat Pindah</a></p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Ahli waris Start -->
    <div class="container-fluid py-5" id="ahli">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Ahli Waris</h6>
                </div>
                <div class="col-lg-7">
                    <ul class="list-inline">
                        <h1 class="mb-4">Persyaratan Ahli Waris</h1>
                        <ol type="1">
                            <li><h6>surat Pernyataan Hanya Menikah Satu Kali.</h6></li>
                            <li><h6>surat pernyataan bersama para ahli waris diatas materai.</h6></li>
                            <li><h6>surat pernyataan dua orang saksi atau lebih diatas material.</h6></li>
                            <li><h6>bagan kronologis riwayat kekeluargaan antara pewaris dengan ahli waris ditanda tangani oleh saksi dengan materai.</h6></li>
                            <li><h6>foto copy E-KTP para ahli waris yang berlaku.</h6></li>
                            <li><h6>foto copy KK almarhum dan atau almarhumah.</h6></li>
                            <li><h6>foto copy KK para ahli waris yang masih berlaku.</h6></li>
                            <li><h6>foto copy Akta Kematian almarhum/almarhumah dari disdukcapil.</h6></li>
                            <li><h6>foto copy surat kawin almarhum/almarhumah (dilegalisir).</h6></li>
                            <li><h6>foto copy surat cerai (apabila sudah bercerai) almarhum/almarhumah (dilegalisir).</h6></li>
                            <li><h6>foto copy akta kematian anak/ahli waris (apabila sudah meninggal dunia).</h6></li>
                            <li><h6>foto copy akta kelahiran para ahli waris (dilegalisir).</h6></li>
                            <li><h6>foto copy E-KTP para saksi yang berlaku.</h6></li>
                            <li><h6>bagi anak angkat dilampirkan foto copy surat adopsi dari pengadilan negeri (dilegalisir).</h6></li>
                            <li><h6>surat kuasa apabila dikuasakan dengan materai.</h6></li>
                            <li><h6>surat pernyataan AW n/ tidak terlewatkan satu orangpun pewaris atau ahli warisnya.</h6></li>
                        </ol>
                    </ul>
                     <ul class="list-inline">
                        <h6 class="mb-4">Catatan : </h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Menggunakan map warna kuning</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Foto copy 2X(rangkap)</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Cantumkan NO.HP yang bisa dihubungi</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>E-KTP tidak perlu di legalisir</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>KK TANDA TANGAN BASAH perlu di legalisir</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>AKTA barcode tidak perlu di legalisr</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>AkTA DENGAN TANDA TANGAN BASAH perlu di legalisir</h6></li>   
                    </ul>
                    <p><h6>Waktu penyelesaian : 5 Hari (UNTUK BERKAS LENGKAP)</h6></p>
                    <p><h6 class="text-primary text-uppercase fort-weight-bold">Biaya : 100% gratis</h6></p>
                    <a href="https://sipaku.bandung.go.id/cek-pengajuan/ahli-waris" class="btn btn-primary mt-3 py-2 px-4">Cek Pengajuan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Ahli waris End-->

    <div class="container-fluid py-5" id="legalisir">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">legalisir</h6>
                </div>
                <div class="col-lg-7">
                    <ul class="list-inline">
                        <h1 class="mb-4">Persyaratan Legalisir</h1>
                        <ol type="1"><h6></h6>
                            <li><h6>Dokumen dilegalisir adalah dokumen terbitan kantor kecamatan bojongloa kidul.</h6></li>
                            <li><h6>Menunjukan identitas diri</h6></li>
                            <l1><h6>Persyaratan surat keterangan lainnya</h6></li>
                            <li><h6>surat keterangan lainnya dari kelurahan</h6></li>
                            <li><h6>dokumen pendukung sesuai dengan keterangan yang dibutuhkan</h6></li>
                            <p><h6>waktu penyelesaian : 2 hari</h6></p>
                            <p><h6 class="text-primary text-uppercase fort-weight-bold">Biaya : 100% gratis</h6></p>
                        </ol>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="surat">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Surat Pindah</h6>
                </div>
                <div class="col-lg-7">
                    <ul class="list-inline">
                        <h2 class="mb-4">Persyaratan pindah datang</h2>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>surat pindah dari daerah asal</h6></li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                </div>
                <div class="col-lg-7">
                    <ul class="list-inline">
                        <h2 class="mb-4">persyaratan pindah pergi</h2>
                        <ol type="1"><h6></h6>
                            <li><h6>Formulir permohonan yang sudah ditandatangani kelurahan</h6></li>
                            <li><h6>KK asli dan E-KTP asli</h6></li>
                            <li><h6>Formulir pembuatan KK baru untuk anggota yang tidak pindah dan dokumen pendukung jika ada perubahan data kependudukan dalam KK</h6></li>
                            <p><h6>waktu penyelesaian : 2 hari</h6></p>
                            <p><h6 class="text-primary text-uppercase fort-weight-bold">Biaya : 100% gratis</h6></p>
                        </ol>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                </div>
                <div class="col-lg-7">
                    <ul class="list-inline">
                        <h2 class="mb-4">Persyaratan pengantar pindah pergi keluar kota bandung</h2>
                        <ol type="1"><h6></h6>
                            <li><h6>Formulir permohonan pindah (diunduh di website DISDUKCAPIL)</h6></li>
                            <li><h6>KK asli dan E-KTP asli</h6></li>
                            <li><h6>Formulir pembuatan KK baru untuk anggota yang tidak pindah dan dokumen pendukung jika ada perubahan data kependudukan dalam KK</h6></li>
                            <p><h6>waktu penyelesaian : 1 hari (pengantar surat pindah) 8 hari (penerbitan KK yang tidak pindah)</h6></p>
                            <p><h6 class="text-primary text-uppercase fort-weight-bold">Biaya : 100% gratis</h6></p>
                        </ol>
                    </ul>
                </div>
            </div>
         </div>
    </div>

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
