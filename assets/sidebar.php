<!-- Brand Logo -->
<a href="index.php" class="brand-link">
  <img src="logo/pencaksilat.png" alt="Satria Bangsa" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text text-white ml-1">SATRIA BANGSA</span>
</a>

<?php  
  require 'config/active_page.php';
?>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="index.php?halaman=dashboard" class="nav-link text-white <?= $active1; ?>">
          <i class="nav-icon fas fa-th"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?halaman=dt_anggota" class="nav-link text-white <?= $active2; ?>">
          <i class="fas fa-users nav-icon"></i>
          <p>Anggota</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?halaman=dt_cabang" class="nav-link text-white <?= $active3; ?>">
          <i class="fas fa-building nav-icon"></i>
          <p>Cabang</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?halaman=dt_pelatih" class="nav-link text-white <?= $active4; ?>">
          <i class="fas fa-user nav-icon"></i>
          <p>Pelatih</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?halaman=dt_keuangan" class="nav-link text-white <?= $active5; ?>">
          <i class="fas fa-archive nav-icon"></i>
          <p>Keuangan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?halaman=dt_jadwal_pelatihan" class="nav-link text-white <?= $active6; ?>">
          <i class="fas fa-calendar nav-icon"></i>
          <p>Jadwal Pelatihan</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="logout.php" onclick="return confirm('Anda yakin ingin keluar?');" class="nav-link text-white" style="cursor: pointer;">
          <i class="fas fa-power-off nav-icon"></i>
          <p>Log out</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->