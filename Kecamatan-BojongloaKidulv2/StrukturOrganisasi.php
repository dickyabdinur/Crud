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
                            <a href="StrukturOrganisasi.php" class="dropdown-item active">Sturktur organisasi</a>
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
            <h1 class="text-white display-3">Struktur Organisasi</h1>
        </div>
    </div>
    <!-- Header End -->
 
    <!-- Struktur Organisasi start-->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4">Bagan Struktur Organisasi Kecamatan</h1>
            </div>
            <div class="row align-item-center">
                <div class="cold-lg-5">
                    <?php 
                        include 'config/config.php';
                     $data = mysqli_query($conn,"SELECT * from gambar ORDER BY id ASC"); 
                    while($d = mysqli_fetch_array($data)){?>
                    <img style="height: 800px; width: 800px; position: center;" class="img-fluid w-100" align="center" src="Admin/file/<?php echo $d['gambar']; ?>" alt="">
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <!-- Struktur Organisasi end-->

    <!-- Team Start --> 
    <div class="container-fluid pt-5"> 
        <div class="container"> 
            <div class="text-center pb-2"> 
                <!-- <h6 class="text-primary text-uppercase font-weight-bold">Anggota Kecamatan</h6> -->
                <!-- <h1 class="mb-4">Kecamatan Bojongloa Kidul</h1></div> -->
            <div class="row"> <?php include 'config/config.php'; 
                    $no = 1; 
                    $data = mysqli_query($conn,"SELECT * from user ORDER BY id ASC"); 
                    while($d = mysqli_fetch_array($data)){ ?>
    <div class="col-lg-3 col-md-6">
        <div class="team card position-relative overflow-hidden border-0 mb-5">
            <img class="card-img-top" style="height: 380px; border:solid #000; overflow-y:hidden; width: 250px" src="Admin/file/<?php echo $d['file'] ?>"> 
            <br> 
            <div class="card-body text-center p-0">
                <div class="d-flex flex-column justify-content-center bg-secondary">
                    <h5 class="font-weight-bold"><?php echo $d['username'];?></h5>
                    <span><?php echo $d['jabatan']; ?></span>
                </div>
            </div>
        </div>
    </div> <?php }?> 
</div> 
</div> 
</div> 
<!-- Team End -->


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
    <script>
        function PreviewImage() {  
           var oFReader = new FileReader();  
           oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);  
           oFReader.onload = function (oFREvent) {  
           document.getElementById("uploadPreview").src = oFREvent.target.result;  
           };  
              };  
    </script>
</body>

</html>