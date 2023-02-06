<?php  
  $dt_anggota = "SELECT * FROM dt_anggota";
  $dt_cabang = "SELECT * FROM dt_cabang";
  $dt_keuangan = "SELECT * FROM dt_keuangan";
  $dt_pelatih = "SELECT * FROM dt_pelatih";
  $dt_jadwal = "SELECT * FROM dt_jadwal_latihan";

  $anggota = mysqli_query($koneksi, $dt_anggota);
  $cabang = mysqli_query($koneksi, $dt_cabang);
  $keuangan = mysqli_query($koneksi, $dt_keuangan);
  $pelatih = mysqli_query($koneksi, $dt_pelatih);
  $jadwal = mysqli_query($koneksi, $dt_jadwal);

?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h5 class="m-0">SISTEM INFORMASI PERGURUAN PENCAK SILAT SATRIA BANGSA</h5>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
     <!-- Info boxes -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h4 class="font-weight-bold">Total <?php echo mysqli_num_rows($anggota); ?></h4>
            <p>Anggota</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="index.php?halaman=dt_anggota" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h4 class="font-weight-bold">Total <?php echo mysqli_num_rows($cabang); ?></h4>
            <p>Cabang</p>
          </div>
          <div class="icon">
            <i class="fas fa-building"></i>
          </div>
          <a href="index.php?halaman=dt_cabang" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h4 class="font-weight-bold">Total <?php echo mysqli_num_rows($pelatih); ?></h4>
            <p>Pelatih</p>
          </div>
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
          <a href="index.php?halaman=dt_pelatih" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h4 class="font-weight-bold">Total <?php echo mysqli_num_rows($keuangan); ?></h4>
            <p>Keuangan</p>
          </div>
          <div class="icon">
            <i class="fas fa-archive"></i>
          </div>
          <a href="index.php?halaman=dt_keuangan" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h4 class="font-weight-bold">Total <?php echo mysqli_num_rows($jadwal); ?></h4>
            <p>Jadwal Pelatihan</p>
          </div>
          <div class="icon">
            <i class="fas fa-calendar"></i>
          </div>
          <a href="index.php?halaman=dt_jadwal_pelatihan" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>