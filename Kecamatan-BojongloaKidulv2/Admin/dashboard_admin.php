<?php
    include '../config/config.php';    
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a class="navbar-brand mx-2 mb-2">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Bojongloa kidul</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <h3><i class="fa fa-user"></i></h3>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard_admin.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Input Data</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="pegawai.php" class="dropdown-item">Anggota</a>
                            <a href="online.php" class="dropdown-item">Informasi Layanan Online</a>
                            <a href="berita.php" class="dropdown-item">Berita</a>
                            <a href="galeri.php" class="dropdown-item">Galeri</a>
                            <a href="video.php" class="dropdown-item">Video</a>
                            <a href="artikel_.php" class="dropdown-item">Artikel</a>
                        </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Sarana Prasarana</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="bank.php" class="dropdown-item">1.Bank</a>
                            <a href="banksampah.php" class="dropdown-item">2.Bank Sampah</a>
                            <a href="tk.php" class="dropdown-item">3.Fasilitas Pendidikan (TK)</a>
                            <a href="biopori.php" class="dropdown-item">4.Biopori</a>
                            <a href="drainase.php" class="dropdown-item">5.Drainase</a>
                            <a href="kesehatan.php" class="dropdown-item">6.Fasilitas Kesehatan</a>
                            <a href="olahraga.php" class="dropdown-item">7.Fasilitas Olahraga</a>
                            <a href="sosial.php" class="dropdown-item">8.Fasilitas Sosial</a>
                            <a href="halte.php" class="dropdown-item">9.Halte</a>
                            <a href="hotel.php" class="dropdown-item">10.Hotel</a>
                            <a href="jalan.php" class="dropdown-item">11.Terminal</a>
                            <a href="radio.php" class="dropdown-item">12.Stasiun Radio</a>
                            <a href="kerb.php" class="dropdown-item">13.UMKM</a>
                            <a href="komunal.php" class="dropdown-item">14.Toko</a>
                            <a href="odf.php" class="dropdown-item">15.Perguruan Tinggi</a>
                            <a href="pasar.php"class="dropdown-item">16.Pasar Tradisonal</a>
                            <a href="paud.php" class="dropdown-item">17.Fasilitas Pendidikan (PAUD)</a>
                            <a href="rbk.php" class="dropdown-item">18.Ruang Terbuka Hijau (RBK)</a>
                            <a href="makan.php" class="dropdown-item">19.Rumah Makan</a>
                            <a href="rutilahu.php" class="dropdown-item">20.Rutilahu</a>
                            <a href="sd.php" class="dropdown-item">21.Fasilitas Pendidikan (SD)</a>
                            <a href="smp.php" class="dropdown-item">22.Fasilitas Pendidikan (SMP)</a>
                            <a href="sma.php" class="dropdown-item">23.Fasilitas Pendidikan (SMA)</a>
                            <a href="stunting.php" class="dropdown-item">24.Stasiun TV</a>
                            <a href="sumur.php" class="dropdown-item">25.Tempat Pembuangan Sampah</a>
                            <a href="sungai.php" class="dropdown-item">26.Sungai</a>
                            <a href="taman.php" class="dropdown-item">27.Taman</a>
                            <a href="hiburan.php" class="dropdown-item">28.Tempat Hiburan</a>
                            <a href="tutup.php" class="dropdown-item">29.Tutup</a>
                            <a href="modern.php" class="dropdown-item">30.Pasar modern</a>
                            <a href="komunal.php" class="dropdown-item">31.Tempat Pembuangan</a>
                            <a href="minimarket.php" class="dropdown-item">32.Minimarket</a>
                            <a href="ibadah.php" class="dropdown-item">33.Tempat Ibadah</a>
                        </div>
                </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="dashboard_admin.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-user"></i><span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            
                            <a href="../login/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Anggota</p>
                                <?php
                    include '../config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM user");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                                <h6 class="mb-0"><?php echo $jumlah; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-globe fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Totaln Berita</p>
                                <?php
                    include '../config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM berita");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                                <h6 class="mb-0"><?php echo $jumlah; ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-frown fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Keluhan</p>
                                <?php
                    include '../config/config.php';
                     
                    // mengambil data barang
                    $data_barang = mysqli_query($conn,"SELECT * FROM keluhan");
                     
                    // menghitung data barang
                    $jumlah = mysqli_num_rows($data_barang);
                    ?>
                                <h6 class="mb-0"><?php echo $jumlah; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
    

            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">KELUHAN</h6> 
                                    <form method="POST" action="save.php">
                            <!-- Button trigger modal -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="dukkan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Admin Anggota</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-gorup">
                                                <style>
                                                    .left { text-align: left;}
                                                    .right { text-align: right;}
                                                    .center { text-align: center;}
                                                    .justify { text-align: justify;}
                                                </style>
                                        <h5 class="left">NIP</h5>
                                            <input type="number" class="form-control" name="nip">
                                        <br>
                                        <h5 class="left">Username</h5>
                                            <input type="text" class="form-control" name="username">
                                        <br>
                                        <h5 class="left">Password</h5>
                                            <input type="password" class="form-control" name="password">
                                        <br>
                                        <h5 class="left">Hak Akses</h5>
                                        <select class="form-control" name="hak_akses">
                                            <option value="admin">Admin</option>
                                            <option value="pegawai">Pegawai</option>
                                        </select>
                                    </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                              <thead class="table-primary">
                                <tr>
                                  <th scope="col">NO</th>  
                                  <th scope="col">NAMA</th>
                                  <th scope="col">NO WhatsApp</th>
                                  <th scope="col">DESKRIPSI</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                include "../config/config.php";
                $halaman = 10; /* page halaman*/
                $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
                
                $result    =mysqli_query($conn,"SELECT * FROM keluhan");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                
                $tampilMas    =mysqli_query($conn,"SELECT * FROM keluhan LIMIT $mulai, $halaman");
                $no    =$mulai+1;
                while($d    =mysqli_fetch_array($tampilMas)){
            ?>
                                <tr>
                                  <th scope="col"><?php echo $no++;?></th>  
                                  <th scope="col"><?php echo $d['nama']; ?></th>
                                  <th scope="col"><a href="https://wa.me/<?php echo $d['nohp']; ?>"><?php echo $d['nohp']; ?></a></th>
                                  <th scope="col"><?php echo $d['deskripsi']; ?></th>
                                  <th>
                                <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="deletekeluhan.php?id=<?php echo $d['id']; ?>">
                                <button class="btn btn-danger"><i class="mdi mdi-close"></i>Hapus</button>
                                </a>
                              </th>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $d['nip']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form role="form" action="update.php" method="post">
                                        <?php
                                        $nama = $d['nama']; 
                                        $query_edit = mysqli_query($conn,"SELECT * FROM keluhan WHERE id='$id'");
                                        //$result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($query_edit)) {  
                                        ?>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <font><h5>NIP</h5></font>
                                            <input type="number" class="form-control" name="nip" value="<?php echo $row['nip']; ?>">
                                        <font><h5>Username</h5></font>
                                            <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
                                        <font><h5>Password</h5></font>
                                            <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
                                        <font><h5>Jabatan</h5></font>
                                        <select class="form-control" name="hak_akses">
                                            <option value="<?php echo $row['hak_akses']; ?>"><?php echo $row['hak_akses']; ?></option>
                                            <option value="admin">Admin</option>
                                            <option value="pegawai">Pegawai</option>
                                        </select>
                                          </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                  <?php }?>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                    <?php }?>
                              </tbody>
                            </table>
                            <br />
                            
    <div style="font-weight:bold;">
        Paging
        <?php
            for ($i=1; $i<=$pages ; $i++){
        ?>
            <a href="dashboard_admin.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
        <?php
            }
        ?>
    </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->
            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">VISI & MISI</h6> 
                                    <form method="POST" action="visimisi.php" enctype="multipart/form-data">
                            <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#visimisi">
                                    TAMBAH VISI & MISI
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="visimisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">TAMBAH VISI & MISI</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-gorup">
                                                <style>
                                                    .left { text-align: left;}
                                                    .right { text-align: right;}
                                                    .center { text-align: center;}
                                                    .justify { text-align: justify;}
                                                </style>
                                        <h5>Gambar</h5>
                                        <input type="file" name="foto" class="form-control" required>
                                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
                                          <br>
                                        <h5 class="left">MISI</h5>
                                            <textarea name="visi" class="form-control" cols="40" rows="5" required="required"/> </textarea>
                                            <br>
                                    </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                              <thead class="table-primary">
                                <tr>
                                  <th scope="col">GAMBAR</th>
                                  <th scope="col">VISI</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                include '../config/config.php';
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * from visimisi");
                                while($d = mysqli_fetch_array($data)){
                                    ?>
                                <tr>
                                  <th scope="col"><img src="file/<?php echo $d['gambar'] ?>" width="35" height="40"></th>
                                  <th scope="col"><?php echo $d['visi']; ?></th>
                                  <th>
                                <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="deletevisimisi.php?id=<?php echo $d['id']; ?>">
                                <button class="btn btn-danger"><i class="mdi mdi-close"></i>Hapus</button>
                                </a>
                              </th>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $d['nip']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <?php }?>
                              </tbody>
                            </table>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->
            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">MISI</h6> 
                                    <form method="POST" action="misi.php" enctype="multipart/form-data">
                            <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#misi">
                                    TAMBAH MISI
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="misi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">TAMBAH MISI</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <div class="form-gorup">
                                                <style>
                                                    .left { text-align: left;}
                                                    .right { text-align: right;}
                                                    .center { text-align: center;}
                                                    .justify { text-align: justify;}
                                                </style>
                                        <h5 class="left">MISI 1</h5>
                                            <input type="text" class="form-control" name="m1">
                                            <br>
                                        <h5 class="left">MISI 2</h5>
                                            <input type="text" class="form-control" name="m2">
                                            <br>
                                        <h5 class="left">MISI 3</h5>
                                            <input type="text" class="form-control" name="m3">
                                            <br>
                                        <h5 class="left">MISI 4</h5>
                                            <input type="text" class="form-control" name="m4">
                                            <br>
                                        <h5 class="left">MISI 5</h5>
                                            <input type="text" class="form-control" name="m5">
                                            <br>
                                        <h5 class="left">MISI 6</h5>
                                            <input type="text" class="form-control" name="m6">
                                            <br>
                                        <h5 class="left">MISI 7</h5>
                                            <input type="text" class="form-control" name="m7">
                                            <br>
                                        <h5 class="left">MISI 8</h5>
                                            <input type="text" class="form-control" name="m8">
                                            <br>
                                        <h5 class="left">MISI 9</h5>
                                            <input type="text" class="form-control" name="m9">
                                            <br>
                                        <h5 class="left">MISI 10</h5>
                                            <input type="text" class="form-control" name="m10">
                                            <br>
                                    </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </form>
                            </div>
                            <table class="table">
                              <thead class="table-primary">
                                <tr>
                                  <th scope="col">MISI 1</th>
                                  <th scope="col">MISI 2</th>
                                  <th scope="col">MISI 3</th>
                                  <th scope="col">MISI 4</th>
                                  <th scope="col">MISI 5</th>
                                  <th scope="col">MISI 6</th>
                                  <th scope="col">MISI 7</th>
                                  <th scope="col">MISI 8</th>
                                  <th scope="col">MISI 9</th>
                                  <th scope="col">MISI 10</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                include '../config/config.php';
                                $no = 1;
                                $data = mysqli_query($conn,"SELECT * from misi");
                                while($d = mysqli_fetch_array($data)){
                                    ?>
                                <tr>
                                  <th scope="col"><?php echo $d['m1']; ?></th>
                                  <th scope="col"><?php echo $d['m2']; ?></th>
                                  <th scope="col"><?php echo $d['m3']; ?></th>
                                  <th scope="col"><?php echo $d['m4']; ?></th>
                                  <th scope="col"><?php echo $d['m5']; ?></th>
                                  <th scope="col"><?php echo $d['m6']; ?></th>
                                  <th scope="col"><?php echo $d['m7']; ?></th>
                                  <th scope="col"><?php echo $d['m8']; ?></th>
                                  <th scope="col"><?php echo $d['m9']; ?></th>
                                  <th scope="col"><?php echo $d['m10']; ?></th>
                                  <th>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $d['id']; ?>">Edit</button>
                                <a onclick="return confirm('Anda yakin ingin menghapus data ini?')" href="deletemisi.php?id=<?php echo $d['id']; ?>">
                                <button class="btn btn-danger"><i class="mdi mdi-close"></i>Hapus</button>
                                </a>
                              </th>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $d['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form role="form" action="updatemisi.php" method="post">
                                        <?php
                                        $id = $d['id']; 
                                        $query_edit = mysqli_query($conn,"SELECT * FROM misi WHERE id='$id'");
                                        //$result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($query_edit)) {  
                                        ?>
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <font><h5>MISI 1</h5></font>
                                            <input type="text" class="form-control" name="m1" value="<?php echo $row['m1']; ?>">
                                        <br>
                                        <font><h5>MISI 2</h5></font>
                                            <input type="text" class="form-control" name="m2" value="<?php echo $row['m2']; ?>">
                                        <br>
                                        <font><h5>MISI 3</h5></font>
                                            <input type="text" class="form-control" name="m3" value="<?php echo $row['m3']; ?>">
                                        <br>
                                        <font><h5>MISI 4</h5></font>
                                            <input type="text" class="form-control" name="m4" value="<?php echo $row['m4']; ?>">
                                        <br>
                                        <font><h5>MISI 5</h5></font>
                                            <input type="text" class="form-control" name="m5" value="<?php echo $row['m5']; ?>">
                                        <br>
                                        <font><h5>MISI 6</h5></font>
                                            <input type="text" class="form-control" name="m6" value="<?php echo $row['m6']; ?>">
                                        <br>
                                        <font><h5>MISI 7</h5></font>
                                            <input type="text" class="form-control" name="m7" value="<?php echo $row['m7']; ?>">
                                        <br>
                                        <font><h5>MISI 8</h5></font>
                                            <input type="text" class="form-control" name="m8" value="<?php echo $row['m8']; ?>">
                                        <br>
                                        <font><h5>MISI 9</h5></font>
                                            <input type="text" class="form-control" name="m9" value="<?php echo $row['m9']; ?>">
                                        <br>
                                        <font><h5>MISI 10</h5></font>
                                            <input type="text" class="form-control" name="m10" value="<?php echo $row['m10']; ?>">
                                        <br>
                                          </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                      </div>
                                  <?php }?>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                    <?php }?>
                              </tbody>
                            </table>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>