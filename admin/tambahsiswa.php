<?php  
session_start();
if (is_null(@$_SESSION['user'])) {
    header('location:../index.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>SDN 2 SETIAMULYA</title>

    <!-- Fontfaces CSS-->
    <link href="../assets_admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets_admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets_admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets_admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets_admin/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="../assets_admin/vendor/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h3>SDN 2 Setiamulya</h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Master</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="siswa.php">Siswa</a>
                                </li>
                                <li>
                                    <a href="guru.php">Guru</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-pencil-square-o"></i>Transaksi</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="nilaisiswa.php">Nilai Siswa</a>
                                </li>
                                <li>
                                    <a href="absen.php">Absensi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-print"></i>Laporan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="">Siswa</a>
                                </li>
                                <li>
                                    <a href="">Nilai Siswa</a>
                                </li>
                                <li>
                                    <a href="">Absensi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-print"></i>Raport</a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-users"></i>Profile Guru</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h3>SDN 2 Setiamulya</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Master</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="siswa.php">Siswa</a>
                                </li>
                                <li>
                                    <a href="guru.php">Guru</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-pencil-square-o"></i>Transaksi</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="nilaisiswa.php">Nilai Siswa</a>
                                </li>
                                <li>
                                    <a href="absen.php">Absensi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-folder"></i>Laporan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="">Siswa</a>
                                </li>
                                <li>
                                    <a href="">Nilai Siswa</a>
                                </li>
                                <li>
                                    <a href="">Absensi</a>
                                </li>   
                             </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-print"></i>Raport</a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-users"></i>Profile Guru</a>
                        </li>     
                    </ul>    
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="form-header"></div>
                            <div class="header-button">
                                <div>
                                    <div>
                                        <div>
                                            <div class="js-arrow" href="#">
                                            <i class="fas fa-fw fa-user"></i>
                                            <a style="color: black" href="logout.php">Logout</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h4 class="card-title">Insert Siswa</h4>
                        <hr class="bg-primary">
                        <div class="row">
                            <div class="col-lg-12"> 
                                <div class="card">
                                  <div class="card-body">
                                    <form action="../admin/simpantmbhsis.php" method="POST" enctype="multipart/form-data">
                                      <div class="row">
                                          <div class="col-lg-6">
                                                <div class="m-t-20">
                                                    <h5><b>NIS (Nomor Induk Siswa)</b></h5>
                                                    <input type="text" class="form-control" maxlength="50" name="nis" id="alloptions" placeholder="NIS" required>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>NISN (Nomor Induk Siswa Nasional)</b></h5>
                                                    <input type="text" class="form-control" maxlength="50" name="nisn" id="alloptions" placeholder="NISN" required>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Nama Siswa</b></h5>
                                                    <input type="text" class="form-control" maxlength="50" name="nama" id="alloptions" placeholder="Namasiswa" required>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Tempat</b></h5>
                                                    <input type="text" class="form-control" maxlength="50" name="tempat" id="alloptions" placeholder="Tempat" required>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Tanggal Lahir</b></h5>
                                                    <input type="date" class="form-control" maxlength="40" name="tanggal_lahir" id="alloptions" placeholder="tanggal_lahir" required>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Jenis Kelamin</b></h5>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Laki-Laki" name="jenis_kelamin" checked>
                                                        <label for="inlineRadio1"> Laki-Laki </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="Perempuan" name="jenis_kelamin">
                                                        <label for="inlineRadio2"> Perempuan </label>
                                                    </div>
                                                </div>
                                                <!-- 
                                                    Provinsi    = Jaw Barat
                                                    Kota        = Tasikmalaya
                                                -->
                                                <div class="m-t-20">
                                                    <h5><b>Agama</b></h5>
                                                    <select class="form-control select" name="agama">
                                                        <option value="">Pilih Agama</option>
                                                        <?php
                                             include "../config/koneksi.php";
                                             $r = mysqli_query($conn, 'SELECT * FROM agama');
                                             if (mysqli_num_rows($r) > 0) {
                                                while ($rows = mysqli_fetch_assoc($r)) {
                                                 ?>
                                                    <option value="<?php echo $rows['nama'];?>"><?php echo $rows['nama'];?></option>
                                             <?php } ?>
                                             <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Pendidikan Sebelumnya</b></h5>
                                                    <input type="text" class="form-control" maxlength="40" name="pendidikan_sebelumnya" id="alloptions" placeholder="pendidikan_sebelumnya" required>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Alamat Siswa</b></h5>
                                                    <textarea class="form-control" name="alamat_siswa" style="margin-top: 10px" placeholder="Alamat"></textarea>
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Kelas</b></h5>
                                                    <select class="form-control select" name="kelas">
                                                        <option value="">Pilih Kelas</option>
                                                     <?php
                                             include "../config/koneksi.php";
                                             $r = mysqli_query($conn, 'SELECT * FROM kelas');
                                             if (mysqli_num_rows($r) > 0) {
                                                while ($rows = mysqli_fetch_assoc($r)) {
                                                 ?>
                                                    <option value="<?php echo $rows['kelas'];?>"><?php echo $rows['kelas'];?></option>
                                             <?php } ?>
                                             <?php } ?>
                                                    </select>        
                                                </div>
                                                <div class="m-t-20">
                                                    <h5><b>Semester</b></h5>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio1" value="Ganjil" name="semester" checked>
                                                        <label for="inlineRadio1"> Ganjil </label>
                                                    </div>
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio2" value="Genap" name="semester">
                                                        <label for="inlineRadio2"> Genap </label>
                                                    </div>
                                                </div>
                                          </div>
                                          <div class="col-lg-6">
                                            <div class="m-t-20">
                                                <h5><b>Nama Orang Tua : </b></h5>
                                                 <input type="text" class="form-control" maxlength="40" name="na_ayah" id="alloptions" placeholder="ayah" required>
                                                 <input type="text" class="form-control" style="margin-top: 10px" maxlength="40" name="na_ibu" id="alloptions" placeholder="ibu" required>
                                            </div>
                                            <div class="m-t-20">
                                                <h5><b>Pekerjaan Orang Tua : </b></h5>
                                                <input type="text" class="form-control" maxlength="40" name="pek_ayah" id="alloptions" placeholder="Ayah" required>
                                                <input type="text" class="form-control" style="margin-top: 10px" maxlength="40" name="pek_ibu" id="alloptions" placeholder="Ibu" required>
                                            </div>
                                            <div class="m-t-20">
                                                <h5><b>Wali Siswa : </b></h5>
                                                <input type="text" class="form-control" maxlength="40" name="na_wali" id="alloptions" placeholder="Nama">
                                                <input type="text" class="form-control" style="margin-top: 10px" maxlength="40" name="pek_wali" id="alloptions" placeholder="Pekerjaan">
                                                <textarea class="form-control" name="alamat_wali" style="margin-top: 10px" placeholder="Alamat"></textarea>
                                            </div>
                                            <div class="m-t-20">
                                                <h5><b>Foto</b></h5>
                                                <input type="file" class="dropify" data-default-file="assets/images/persis.jpg" name='foto'  />
                                            </div>
                                            <div class="m-t-20">
                                                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                                 &nbsp; 
                                                <button type="reset" value="Cancel" class="btn btn-success">Cancel</button>
                                            </div>
                                          </div>
                                      </div>
                                    </form>
                                  </div>
                            </div>
                            <div class="col-lg-6"></div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../assets_admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets_admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets_admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets_admin/vendor/slick/slick.min.js">
    </script>
    <script src="../assets_admin/vendor/wow/wow.min.js"></script>
    <script src="../assets_admin/vendor/animsition/animsition.min.js"></script>
    <script src="../assets_admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets_admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets_admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets_admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets_admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets_admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets_admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets_admin/js/main.js"></script>
    <script type="text/javascript" src="../assets_admin/vendor/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets_admin/vendor/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script> -->
</body>

</html>
<!-- end document-->