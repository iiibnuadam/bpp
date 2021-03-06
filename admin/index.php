<?php
session_start();
if (empty($_SESSION)) {
  echo "<script>window.location.href='../index.php'; alert('Harus login!');</script>";
}
if ($_SESSION['role'] != 3) {
  echo "<script>window.location.href='../backend/logout.php'; alert('Harus login!');</script>";
}
$name = trim(strval($_SESSION['name']));
require "../backend/config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin BPP</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?page=manage_admin">
        <div class="sidebar-brand-icon">
          <img src="../assets/img/logo_bpp.png" width="100px" height="50px" class="fas fa-laugh-wink"></i>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <?php
      $linkAdd = "";
      if (!($_GET['page'])) {
        $titledash = "DASHBOARD";
        $linkAdd = "index.php?page=insert_admin";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      }

      if ($_GET['page'] == 'manage_admin') {
        $titledash = " MANAGE ADMIN";
        $linkAdd = "index.php?page=insert_admin";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_fak') {
        $titledash = " MANAGE FAKULTAS";
        $linkAdd = "index.php?page=insert_fak";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_jur') {
        $titledash = " MANAGE JURUSAN";
        $linkAdd = "index.php?page=insert_jur";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_pr') {
        $titledash = " MANAGE PRODI";
        $linkAdd = "index.php?page=insert_pr";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_mhs') {
        $titledash = " MANAGE MAHASISWA";
        $linkAdd = "index.php?page=insert_mhs";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_dsn') {
        $titledash = " MANAGE DOSEN";
        $linkAdd = "index.php?page=insert_dsn";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_kur') {
        $titledash = " MANAGE KURIKULUM";
        $linkAdd = "index.php?page=insert_kur";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_mk') {
        $titledash = " MANAGE MATA KULIAH";
        $linkAdd = "index.php?page=insert_mk";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_sil') {
        $titledash = " MANAGE SILABUS";
        $linkAdd = "index.php?page=insert_sil";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_ba') {
        $titledash = " MANAGE BAHAN AJAR";
        $linkAdd = "index.php?page=insert_ba";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_media') {
        $titledash = " MANAGE MEDIA";
        $linkAdd = "index.php?page=insert_media";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_tgs') {
        $titledash = " MANAGE TUGAS";
        $linkAdd = "index.php?page=insert_tgs";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_pen') {
        $titledash = " MANAGE PENILAIAN";
        $linkAdd = "index.php?page=insert_pen";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_ambil') {
        $titledash = " MANAGE MENGAMBIL";
        $linkAdd = "index.php?page=insert_ambil";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else if ($_GET['page'] == 'manage_ampu') {
        $titledash = " MANAGE MENGAMPU";
        $linkAdd = "index.php?page=insert_ampu";
        $act = "<a href=\"$linkAdd\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-plus fa-sm text-white-50\"></i> Tambah</a>";
      } else {
        $titledash = "DASHBOARD";
        $linkAdd = "index.php?page=insert_admin";
        $act = "";
      }
      ?>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=manage_admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=manage_admin">
          <i class="fas fa-fw fa-cog"></i>
          <span>Super User</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Management</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Main Admin:</h6>
            <a class="collapse-item" href="index.php?page=manage_fak">Fakultas</a>
            <a class="collapse-item" href="index.php?page=manage_jur">Jurusan</a>
            <a class="collapse-item" href="index.php?page=manage_pr">Prodi</a>
            <a class="collapse-item" href="index.php?page=manage_dsn">Dosen</a>
            <a class="collapse-item" href="index.php?page=manage_mhs">Mahasiswa</a>
            <a class="collapse-item" href="index.php?page=manage_kur">Kurikulum</a>
            <a class="collapse-item" href="index.php?page=manage_mk">Mata Kuliah</a>
            <a class="collapse-item" href="index.php?page=manage_sil">Silabus</a>
            <a class="collapse-item" href="index.php?page=manage_ba">Bahan Ajar</a>
            <a class="collapse-item" href="index.php?page=manage_media">Media</a>
            <a class="collapse-item" href="index.php?page=manage_tgs">Tugas</a>
            <a class="collapse-item" href="index.php?page=manage_pen">Penilaian</a>
            <a class="collapse-item" href="index.php?page=manage_ambil">Mengambil</a>
            <a class="collapse-item" href="index.php?page=manage_ampu">Mengampu</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small font-weight-bold"><?= ucwords($name); ?></span>
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-800"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $titledash ?></h1>
            <?= $act ?>
          </div>
          <div class="container-fluid card" style="height:400px;overflow-y: scroll; padding:0;">

            <!-- Content Row -->
            <?php

            $i = isset($_GET['page']) ? $_GET['page'] : null;
            switch ($i) {
              default:
                include "manage_admin.php";
                break;

              case "manage_admin":
                include "manage_admin.php";
                break;

              case "insert_admin":
                include "insert_admin.php";
                break;

              case "edit_admin":
                include "edit_admin.php";
                break;

              case "manage_fak":
                include "manage_fak.php";
                break;

              case "insert_fak":
                include "insert_fak.php";
                break;

              case "edit_fak":
                include "edit_fak.php";
                break;

              case "manage_jur":
                include "manage_jur.php";
                break;

              case "insert_jur":
                include "insert_jur.php";
                break;

              case "edit_jur":
                include "edit_jur.php";
                break;

              case "manage_pr":
                include "manage_pr.php";
                break;

              case "insert_pr":
                include "insert_pr.php";
                break;

              case "edit_pr":
                include "edit_pr.php";
                break;

              case "manage_kur":
                include "manage_kur.php";
                break;

              case "insert_kur":
                include "insert_kur.php";
                break;

              case "manage_mhs":
                include "manage_mhs.php";
                break;

              case "insert_mhs":
                include "insert_mhs.php";
                break;

              case "edit_mhs":
                include "edit_mhs.php";
                break;

              case "manage_dsn":
                include "manage_dsn.php";
                break;

              case "insert_dsn":
                include "insert_dsn.php";
                break;

              case "edit_dsn":
                include "edit_dsn.php";
                break;

              case "manage_mk":
                include "manage_mk.php";
                break;

              case "insert_mk":
                include "insert_mk.php";
                break;

              case "edit_mk":
                include "edit_mk.php";
                break;

              case "manage_sil":
                include "manage_sil.php";
                break;

              case "insert_sil":
                include "insert_sil.php";
                break;

              case "edit_sil":
                include "edit_sil.php";
                break;

              case "manage_ba":
                include "manage_ba.php";
                break;

              case "insert_ba":
                include "insert_ba.php";
                break;

              case "edit_ba":
                include "edit_ba.php";
                break;

              case "manage_media":
                include "manage_media.php";
                break;

              case "insert_media":
                include "insert_media.php";
                break;

              case "edit_media":
                include "edit_media.php";
                break;

              case "manage_tgs":
                include "manage_tgs.php";
                break;

              case "insert_tgs":
                include "insert_tgs.php";
                break;

              case "edit_tgs":
                include "edit_tgs.php";
                break;

              case "manage_pen":
                include "manage_pen.php";
                break;

              case "insert_pen":
                include "insert_pen.php";
                break;

              case "manage_ambil":
                include "manage_ambil.php";
                break;

              case "insert_ambil":
                include "insert_ambil.php";
                break;

              case "manage_ampu":
                include "manage_ampu.php";
                break;

              case "insert_ampu":
                include "insert_ampu.php";
                break;

              case "manage_pres":
                include "manage_pres.php";
                break;
            }
            ?>



          </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="footer mt-auto py-3" style="bottom: 0; position: relative;">
          <div class="container">
            </br>
            <center>
              <span class="text-muted">Copyright &copy; INFORMATICS UNY 2019</span>
            </center>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../backend/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendors/jquery/jquery.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendors/chart.../assets/js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>