<?php
  // jumlah data masing-masing table  
  $anggota = mysqli_query($koneksi, "SELECT * FROM dt_anggota");
  $cabang = mysqli_query($koneksi, "SELECT * FROM dt_cabang");
  $keuangan = mysqli_query($koneksi, "SELECT * FROM dt_keuangan");
  $pelatih = mysqli_query($koneksi, "SELECT * FROM dt_pelatih");
  $jadwal = mysqli_query($koneksi, "SELECT * FROM dt_jadwal_latihan");

  // jumlah gender pada anggota
  $anggotaPria = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Jenis_kelamin = 'Laki-laki'");
  $anggotaPerem = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Jenis_kelamin = 'Perempuan'");

  // jumlah gender pada pelatih
  $pelatihPria = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Jenis_kelamin = 'Laki-laki'");
  $pelatihPerem = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Jenis_kelamin = 'Perempuan'");

  // jumlah warna sabuk pada anggota
  $sabukAnggPutih = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Sabuk = 'Putih'");
  $sabukAnggHijau = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Sabuk = 'Hijau'");
  $sabukAnggOrange = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Sabuk = 'Orange'");
  $sabukAnggBiru = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Sabuk = 'Biru'");
  $sabukAnggMerah = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Sabuk = 'Merah'");
  $sabukAnggCoklat = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Sabuk = 'Coklat'");
  $sabukAnggHitam = mysqli_query($koneksi, "SELECT * FROM dt_anggota WHERE Sabuk = 'Hitam'");

  // jumlah warna sabuk pada pelatih
  $sabukPelPutih = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Sabuk = 'Putih'");
  $sabukPelHijau = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Sabuk = 'Hijau'");
  $sabukPelOrange = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Sabuk = 'Orange'");
  $sabukPelBiru = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Sabuk = 'Biru'");
  $sabukPelMerah = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Sabuk = 'Merah'");
  $sabukPelCoklat = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Sabuk = 'Coklat'");
  $sabukPelHitam = mysqli_query($koneksi, "SELECT * FROM dt_pelatih WHERE Sabuk = 'Hitam'");
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
      <div class="col-sm-6">
        <!-- small box -->
        <div class="small-box bg-dark">
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
      <div class="col-sm-6">
        <!-- small box -->
        <div class="small-box bg-dark">
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
    </div>
    <div class="row">
      <!-- ./col -->
      <div class="col-sm-4">
        <!-- small box -->
        <div class="small-box bg-dark">
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
      <div class="col-sm-4">
        <!-- small box -->
        <div class="small-box bg-dark">
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
      <div class="col-sm-4">
        <!-- small box -->
        <div class="small-box bg-dark">
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
    <div class="row">
      <div class="col-md">
        <!-- BAR CHART -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Gender Pada Anggota</h3>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="myChart-gen-anggota" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md">
        <!-- BAR CHART -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Gender Pada Pelatih</h3>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="myChart-gen-pelatih" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-md">
        <!-- BAR CHART -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Warna Sabuk Pada Anggota</h3>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="myChart-sabuk-anggota" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md">
        <!-- BAR CHART -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Warna Sabuk Pada Pelatih</h3>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="myChart-sabuk-pelatih" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

<!-- chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.min.js" integrity="sha512-zjlf0U0eJmSo1Le4/zcZI51ks5SjuQXkU0yOdsOBubjSmio9iCUp8XPLkEAADZNBdR9crRy3cniZ65LF2w8sRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
  // chart diagram gender anggota
  const genderAnggota = {
    labels: [
      'Laki-laki',
      'Perempuan'
    ],
    datasets: [{
      label: 'Laki-laki',
      data: [
        <?php echo mysqli_num_rows($anggotaPria); ?>, 
        <?php echo mysqli_num_rows($anggotaPerem); ?>
      ],
      backgroundColor: [
        '#1e90ff',
        '#ff4757'
      ],
      hoverOffset: 4
    }]
  };

  const configAnggota = {
    type: 'doughnut',
    data: genderAnggota,
  };

  // chart diagram gender pelatih
  const genderPelatih = {
    labels: [
      'Laki-laki',
      'Perempuan'
    ],
    datasets: [{
      label: 'Laki-laki',
      data: [
        <?php echo mysqli_num_rows($pelatihPria); ?>, 
        <?php echo mysqli_num_rows($pelatihPerem); ?>
      ],
      backgroundColor: [
        '#1e90ff',
        '#ff4757'
      ],
      hoverOffset: 4
    }]
  };

  const configPelatih = {
    type: 'doughnut',
    data: genderPelatih,
  };

  let grafikChart1 = document.getElementById('myChart-gen-anggota');
  let grafikChart2 = document.getElementById('myChart-gen-pelatih');
  const myChart1 = new Chart (grafikChart1, configAnggota)
  const myChart2 = new Chart (grafikChart2, configPelatih)

  // chart diagram warna sabuk anggota
  const sabukAnggota = {
    labels: [
      'Putih',
      'Hijau',
      'Orange',
      'Biru',
      'Merah',
      'Coklat',
      'Hitam'
    ],
    datasets: [{
      label: 'Laki-laki',
      data: [
        <?php echo mysqli_num_rows($sabukAnggPutih); ?>, 
        <?php echo mysqli_num_rows($sabukAnggHijau); ?>,
        <?php echo mysqli_num_rows($sabukAnggOrange); ?>, 
        <?php echo mysqli_num_rows($sabukAnggBiru); ?>,
        <?php echo mysqli_num_rows($sabukAnggMerah); ?>, 
        <?php echo mysqli_num_rows($sabukAnggCoklat); ?>,
        <?php echo mysqli_num_rows($sabukAnggHitam); ?>
      ],
      backgroundColor: [
        '#f1f2f6',
        '#2ed573',
        '#ffa502',
        '#1e90ff',
        '#ff4757',
        '#cd6133',
        '#2f3542'
      ],
      hoverOffset: 4
    }]
  };

  const configSabukAnggota = {
    type: 'doughnut',
    data: sabukAnggota,
  };

  // chart diagram warna sabuk pelatih
  const sabukPelatih = {
    labels: [
      'Putih',
      'Hijau',
      'Orange',
      'Biru',
      'Merah',
      'Coklat',
      'Hitam'
    ],
    datasets: [{
      label: 'Laki-laki',
      data: [
        <?php echo mysqli_num_rows($sabukPelPutih); ?>, 
        <?php echo mysqli_num_rows($sabukPelHijau); ?>,
        <?php echo mysqli_num_rows($sabukPelOrange); ?>, 
        <?php echo mysqli_num_rows($sabukPelBiru); ?>,
        <?php echo mysqli_num_rows($sabukPelMerah); ?>, 
        <?php echo mysqli_num_rows($sabukPelCoklat); ?>,
        <?php echo mysqli_num_rows($sabukPelHitam); ?>
      ],
      backgroundColor: [
        '#f1f2f6',
        '#2ed573',
        '#ffa502',
        '#1e90ff',
        '#ff4757',
        '#cd6133',
        '#2f3542'
      ],
      hoverOffset: 4
    }]
  };

  const configSabukPelatih = {
    type: 'doughnut',
    data: sabukPelatih,
  };

  let grafikChart3 = document.getElementById('myChart-sabuk-anggota');
  let grafikChart4 = document.getElementById('myChart-sabuk-pelatih');
  const myChart3 = new Chart (grafikChart3, configSabukAnggota)
  const myChart4 = new Chart (grafikChart4, configSabukPelatih)
</script>