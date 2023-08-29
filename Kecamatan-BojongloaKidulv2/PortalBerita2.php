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
                <a class="text-white px-2" href="https://wa.me/6285872607325">
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
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-bookmark"></i> Kecamatan Digital</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="Home.php" class="nav-item nav-link">Home</a>
                    <a href="Tentang.php" class="nav-item nav-link">Tentang</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Pelayanan</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="KartuTandaPenduduk.php" class="dropdown-item">Kartu Tanda Penduduk</a>
                            <a href="KartuKeluarga.php" class="dropdown-item ">Kartu Keluarga</a>
                            <a href="Umum.php" class="dropdown-item">Umum</a>
                            <a href="saranaprasarana.php" class="dropdown-item">Sarana Dan Prasarana</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="StrukturOrganisasi.php" class="dropdown-item">Sturktur organisasi</a>
                            <a href="TugasDanFungsi.php" class="dropdown-item">Tugas dan fungsi</a>
                        </div>
                    </div>
                    <a href="PortalBerita1.php" class="nav-item nav-link active">Berita</a>
                    <a href="contact.php" class="nav-item nav-link">Keluhan</a>
                    <a href="Galeri.php" class="nav-item nav-link">Galeri</a>
                    
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mb-5">Portal Berita</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
            </div>
        </div>
    </div>
    <!-- Header End -->
    
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/berita4.png" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                <h4 class="font-weight-bold mb-n1">31</h4>
                                <small class="text-white text-uppercase">Okt</small>
                            </div>
                        </div>
                        <div class="bg-secondary mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/logo.jpg" alt="">
                                    <a class="text-muted ml-2" href="">bojongloakidul</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="fa fa-instagram text-primary"></i>
                                    <a class="text-muted ml-2" href="https://www.instagram.com/bojongloakidul/">bojongloakidul</a>
                                </div>
                            </div>
                            <h4 class="font-weight-bold mb-3">Berita harian</h4>
                            <p>Camat Bojongloa kidul Melaksanakan Penandatanganan Perjanjian Kerjasama Antara STTB dengan Kecamatan Bojongloa Kidul yang diselenggarakan di gedung Kampus STTB.</p>
                            <a class="border-bottom border-primary text-uppercase text-decoration-none" href="https://www.instagram.com/p/CkYUsieB7hG/">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/berita5.png" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                <h4 class="font-weight-bold mb-n1">31</h4>
                                <small class="text-white text-uppercase">Okt</small>
                            </div>
                        </div>
                        <div class="bg-secondary mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/logo.jpg" alt="">
                                    <a class="text-muted ml-2" href="">bojongloakidul</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="fa fa-instagram text-primary"></i>
                                    <a class="text-muted ml-2" href="">bojongloakidul</a>
                                </div>
                            </div>
                            <h4 class="font-weight-bold mb-3">Berita harian</h4>
                            <p>Camat Bojongloa kidul Mendampingi Sekretaris Daerah Kota Bandung melaksanakan monitoring lokasi titik banjir cibaduyut perbatasan Kota dan Kabupaten Bandung</p>
                            <a class="border-bottom border-primary text-uppercase text-decoration-none" href="https://www.instagram.com/p/CkX4BnhBeMe/">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/berita6.png" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                <h4 class="font-weight-bold mb-n1">28</h4>
                                <small class="text-white text-uppercase">Okt</small>
                            </div>
                        </div>
                        <div class="bg-secondary mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/logo.jpg" alt="">
                                    <a class="text-muted ml-2" href="">bojongloakidul</a>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="fa fa-instagram text-primary"></i>
                                    <a class="text-muted ml-2" href="">bojongloakidul</a>
                                </div>
                            </div>
                            <h4 class="font-weight-bold mb-3">Berita harian</h4>
                            <p>Upacara Peringatan Hari Sumpah Pemuda Ke-94 TH Tingkat Kecamatan Bojongloa Kidul di Lapangan Ponpes Nurul Iman</p>
                            <a class="border-bottom border-primary text-uppercase text-decoration-none" href="https://www.instagram.com/p/CkPvy63vCRs/">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center mb-0">
                            <li class="page-item">
                              <a class="page-link" href="PortalBerita1.html" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="PortalBerita1.html">1</a></li>
                            <li class="page-item active"><a class="page-link" href="PortalBerita2.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="PortalBerita3.html">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="PortalBerita3.html" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog Grid End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="bg-secondary" style="padding: 30px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-primary border-primary text-white"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Kategori</h3>
                    <div class="bg-secondary" style="padding: 30px;">
                        <ul class="list-inline m-0">
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Berita harian</a>
                                <span class="badge badge-secondary badge-pill">50</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Berita pusat</a>
                                <span class="badge badge-secondary badge-pill">29</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Acara pemerintah</a>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </li>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Berita Kelurahan</a>
                                <span class="badge badge-secondary badge-pill">6</span>
                            </li>
                            <li class="py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Berita bantuan</a>
                                <span class="badge badge-secondary badge-pill">2</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Recent Post</h3>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/berita1.png" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Tes kebugaran Karyawan/ti Kecamatan Bojongloa kidul
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/berita2.png" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Camat Bojongloa Kidul Menghadiri Peresmian Taman Vandal
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/berita3.png" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Camat Bojongloa Kidul didampingi Kasi Pemas
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/berita4.png" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Bojongloa kidul Melaksanakan Perjanjian Kerjasama Antara STTB
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="img/berita5.png" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            Camat Bojongloa Kidul melakukan monitoring banjir
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-secondary m-1">Design</a>
                        <a href="" class="btn btn-secondary m-1">Development</a>
                        <a href="" class="btn btn-secondary m-1">Marketing</a>
                        <a href="" class="btn btn-secondary m-1">SEO</a>
                        <a href="" class="btn btn-secondary m-1">Writing</a>
                        <a href="" class="btn btn-secondary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="mb-4">Plain Text</h3>
                    <div class="bg-secondary text-center" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Kontak</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Kebon Lega II, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>022-5206478<i></i></p>
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
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
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
				Designed by STT Bandung <a href="#">HTML Codex</a>
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