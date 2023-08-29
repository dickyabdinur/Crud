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
                <h3 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-bookmark"></i> Kecamatan bojongloa kidul</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="Home.php" class="nav-item nav-link">Home</a>
                    <a href="Tentang.php" class="nav-item nav-link active">Tentang</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="StrukturOrganisasi.php" class="dropdown-item">Sturktur organisasi</a>
                            <a href="TugasDanFungsi.php" class="dropdown-item">Tugas dan fungsi</a>
                            <a href="saranaprasarana.php" class="dropdown-item">Sarana Dan Prasarana</a>
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
            <h1 class="text-white display-3">Tentang</h1>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/1.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">berdiri sejak tanggal 1 April 1989</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Sejarah Ringkas</h6>
                    <h1 class="mb-4">Kecamatan Bojongloa Kidul</h1>
                    <p class="mb-4">Sebagaimana yang diamanatkan Peraturan Daerah Kota Bandung Nomor 6 tahun 2007 tentang pemekaran perubahan dan pembentukan Kecamatan dan Kelurahan dalam Daerah Kota Bandung bahwa tujuan yang dilakukannnya adalah dalam rangka meningkatkan efektifitas penyelenggaraan Pemerintahan peningkatan efektipitas dilakukan mengingat jarak antara Pusat Kecamatan dan Kelurahan yang cukup variatif serta semakin meningkatnya Kepadatan penduduk pada beberapa Kecamatan.</p>
                    <p class="mb-4">Kecamatan  merupakan wilayah  kerja Camat sebagai perangkat Daerah Kabupaten dan Daerah Kota  Camat berkedudukan dibawah dan bertanggung jawab kepada Wali Kota melalui Sekretaris Daerah.</p>
                    <p class="mb-4">Kecamatan Bojongloa Kidul Berdiri sejak tanggal 1 April 1989, berdasarkan kepada Peraturan Pemerintah Nomor 16 Tahun 1987 tentang Perubahan Batas Wilayah Kotamadya Daerah Tingkat II Bandung dengan Kabupaten Daerah Tingkat II Bandung dan Peraturan Daerah Kotamadya Daerah Tingkat II Bandung Nomor 10 Tahun 1089 tentang Batas Wilayah Daerah Tingkat II Bandung.</p>
                    <div class="d-flex align-items-center pt-2">
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DcpdL8g9U7Y" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                                <?php 
                                include 'config/config.php';
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * from visimisi");
                                while($d = mysqli_fetch_array($data)){
                                   ?>
                    <img class="img-fluid w-100" src="Admin/file/<?php echo $d['gambar']; ?>" alt=""style="width: 500px; height: 500px;">
                </div>
                <?php }?>
                <div class="col-lg-7">
                                <?php 
                                include 'config/config.php';
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * from visimisi");
                                while($d = mysqli_fetch_array($data)){
                                   ?>
                    <h6 class="text-primary text-uppercase font-weight-bold">VISI & MISI KOTA BANDUNG</h6>
                    <h1 class="mb-4">VISI</h1>
                    <p class="mb-4"><?php echo $d['visi']; ?></p>
                    <?php }?>

                    <?php 
                                include 'config/config.php';
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * from misi");
                                while($d = mysqli_fetch_array($data)){
                                   ?>
                    <h1 class="mb-4">MISI</h1>
                    <p class="mb-4"><?php echo $d['m1']; ?></p>
                    <p class="mb-4"><?php echo $d['m2']; ?></p>
                    <p class="mb-4"><?php echo $d['m3']; ?></p>
                    <p class="mb-4"><?php echo $d['m4']; ?></p>
                    <p class="mb-4"><?php echo $d['m5']; ?></p>
                    <p class="mb-4"><?php echo $d['m6']; ?></p>
                    <p class="mb-4"><?php echo $d['m7']; ?></p>
                    <p class="mb-4"><?php echo $d['m8']; ?></p>
                    <p class="mb-4"><?php echo $d['m9']; ?></p>
                    <p class="mb-4"><?php echo $d['m10']; ?></p>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!--Geografi start-->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/peta.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">GEOGRAFI</h6>
                    <h1 class="mb-4">Letak Geografi</h1>
                    <p class="mb-4">Secara geografis Kecamatan Bojongloa Kidul terletak di bagian selatan Kota Bandung dengan memiliki bentuk wilayahn datar/berombak sebesar 100% dari total keseluruhan luas wilayah. Di tinjau dari sudut ketinggian tanah Kecamatan Bojongloa Kidul berada pada ketinggian 675 m di atas permukaan air laut. Suhu maksimum dan minimum di Kecamatan Bojongloa Kidul berkisar 29.ºC-20ºC sedangkan di lihat dari segi curah hujan berkisar 32°C mm/th dan Jumlah hari dengan curah hujan yang terbanyak sebesar 45 hari</p>
                    <h1 class="mb-4">Luas Wilayah</h6>
                    <p class="mb-4">Luas Wilayah Kecamatan Bojongloa Kidul Sebesar 531,411 ha  (3,5% dari luas wilayah Kota Bandung yaitu 16.729,65 ha)</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Pemukiman dan Usha : 417,732 ha</h6>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Fasos dan Fasum : 78,03 ha</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Sawah, Tegalan, Kebun, Kolam : 35,649 ha</h6>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Geografi End-->

    <!--Produk Unggulan Start-->
    <div class="container-fluid py-5">

        <?php 
                                include 'config/config.php';
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * from artikel ORDER BY id DESC");
                                while($d = mysqli_fetch_array($data)){
                                   ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="Admin/file/<?php echo $d['gambar']; ?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Artikel</h6>
                    <h4 class="mb-4"><?php echo $d['judul']; ?></h4>
                    <p class="mb-4"><?php echo $d['deskripsi']; ?></p>
                </div>
                <div class="col-lg-7">
                    <p></p>
                    <p class="text-primary text-uppercase font-weight-bold">Sumber : <a href="<?php echo $d['link']; ?>"><?php echo $d['artikel']; ?></a> </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
    <?php }?>
    </div>

    <!--Produk unggulan End-->
    

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