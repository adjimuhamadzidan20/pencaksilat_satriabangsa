<?php  
  require 'config/koneksi_db.php';
  session_start();

  // mencegah ke halaman login dari url
  if (!isset($_SESSION['login_dashboard'])) {
    header('Location: login.php');
    exit;
  } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Satria Bangsa | Dashboard</title>

  <?php require 'assets/header.php'; ?>

  <!-- custom warna button paginasi -->
  <style type="text/css">
    .dataTables_paginate .paginate_button.page-item.active a {
      background-color: #343A40;
      border-color: #343A40;
    }

    .dataTables_paginate .paginate_button.page-item:not(.active) a {
      color: #343A40;
    }  
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
    <?php require 'assets/navbar.php'; ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-3">
    <?php require 'assets/sidebar.php'; ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php require 'config/halaman.php'; ?>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php require 'assets/footer.php'; ?>
</body>
</html>
