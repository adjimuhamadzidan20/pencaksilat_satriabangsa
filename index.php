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
    .main-sidebar {
      background-color: #2c3e50;
    }

    .btn-dark {
      background-color: #2c3e50;
    }

    .small-box {
      background-color: #2c3e50;
      color: white;
    }

    .judul-halaman, .ikon {
      color: #2c3e50;
    }

    .dataTables_paginate .paginate_button.page-item.active a {
      background-color: #2c3e50;
      border-color: #2c3e50;
    }

    .dataTables_paginate .paginate_button.page-item:not(.active) a {
      color: #2c3e50;
    }  
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
    <?php require 'assets/navbar.php'; ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-3">
    <?php require 'assets/sidebar.php'; ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php require 'config/halaman.php'; ?>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <?php require 'assets/footer.php'; ?>

  <?php require 'serverside/datatable_script.php'; ?>
</body>
</html>
