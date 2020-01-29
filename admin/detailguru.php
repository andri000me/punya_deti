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
            <?php
             include "../config/koneksi.php";
             $r = mysqli_query($conn, 'SELECT * FROM guru WHERE nip="' . $_GET['nip'] . '"');
             $rows = mysqli_fetch_assoc($r);
            ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h4 class="card-title">Detail Guru</h4>
                        <div class="row">
                            <div class="col-lg-12"> 
                                <div class="card">
                                  <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" width="100%">
                                            <thead>
                                                <tr>
                                                    <th width="25%">NIP</th>
                                                    <th width="5%">:</th>
                                                    <th width="70%"><?= $rows['nip']?></th>
                                                </tr>
                                                <tr>
                                                    <th width="25%">NAMA</th>
                                                    <th width="5%">:</th>
                                                    <th width="70%"><?= $rows['nama']?></th>
                                                </tr>
                                                <tr>
                                                    <th width="25%">JENIS KELAMIN</th>
                                                    <th width="5%">:</th>
                                                    <th width="70%"><?= $rows['jenis_kelamin']?></th>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Jabatan</th>
                                                    <th width="5%">:</th>
                                                    <th width="70%"><?= $rows['jabatan']?></th>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Bidang</th>
                                                    <th width="5%">:</th>
                                                    <th width="70%"><?= $rows['bidang']?></th>
                                                </tr>
                                                <tr>
                                                    <th width="25%">Foto</th>
                                                    <th width="5%">:</th>
                                                    <th width="70%"><?= $rows['foto']?></th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="m-t-20">
                                        <button type="submit" value="cancel" class="btn btn-success">Cancel</button>
                                    </div>                                      
                                  </div>
                                </div>
                            </div>
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
    <script type="text/javascript">
      $(document).ready( function () {
          $('#myTable').DataTable();
      });
    </script>
</body>

</html>
<?php mysqli_close($conn); ?>
<!-- end document-->