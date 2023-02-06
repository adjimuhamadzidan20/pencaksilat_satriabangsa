<?php  
  require 'config/fungsi_tampil_data.php';

  $id = $_GET['id'];
  $jadwal = showingData("SELECT * FROM dt_jadwal_latihan 
  INNER JOIN dt_pelatih ON dt_jadwal_latihan.ID_pelatih = dt_pelatih.ID_pelatih 
  INNER JOIN dt_cabang ON dt_jadwal_latihan.ID_cabang = dt_cabang.ID_cabang
  WHERE ID_latihan = '$id'");

  $pelatih = showingData("SELECT * FROM dt_pelatih");
  $cabang = showingData("SELECT * FROM dt_cabang");

  if (isset($_POST['edit'])) {
    $idJadwal = $_POST['idjadwal'];
    $hariLatihan = htmlspecialchars(ucwords($_POST['hari']));
    $idpelatih = htmlspecialchars($_POST['pelatih']);
    $idcabang = htmlspecialchars($_POST['cabang']);

    $sql = "UPDATE dt_jadwal_latihan SET Hari = '$hariLatihan', ID_pelatih = '$idpelatih', ID_cabang = '$idcabang'
    WHERE ID_latihan = '$idJadwal'";
    mysqli_query($koneksi, $sql);

    echo "<script>
      window.location.assign('index.php?halaman=dt_jadwal_pelatihan');
    </script>";
  }

?>

<!-- Main content -->
<section class="content-header">
  <div class="container-fluid mb-5 mt-1">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-calendar nav-icon mr-1"></i> Edit Jadwal Pelatihan</h3>
      </div>
      <!-- /.card-header -->  
      <div class="card-body">
        <form method="post">
          <?php foreach ($jadwal as $data) { ?>
            <input type="text" class="form-control" id="id" name="idjadwal" value="<?= $data['ID_latihan']; ?>" hidden="hidden">
            <div class="form-group">
              <label for="harilatihan">Hari Latihan</label>
              <input type="text" class="form-control" id="harilatihan" name="hari" value="<?= $data['Hari']; ?>" required>
            </div>
            <div class="form-group">
              <label for="pelatih">Nama Pelatih</label>
              <select class="form-control select2bs4" id="pelatih" name="pelatih" required>
                <option selected value="<?= $data['ID_pelatih']; ?>"><?= $data['Nama_pelatih']; ?></option>
          <?php } ?>

                <?php foreach ($pelatih as $datapelatih) : ?>
                  <option value="<?= $datapelatih['ID_pelatih']; ?>"><?= $datapelatih['Nama_pelatih']; ?></option>
                <?php endforeach; ?>

              </select>
            </div>
            <div class="form-group">
              <label for="cabang">Cabang</label>

              <?php foreach ($jadwal as $data) { ?>
              <select class="form-control select2bs4" id="cabang" name="cabang" required>
                <option selected value="<?= $data['ID_cabang']; ?>"><?= $data['Nama_cabang']; ?></option>
              <?php } ?>

                <?php foreach ($cabang as $datacabang) : ?>
                  <option value="<?= $datacabang['ID_cabang']; ?>"><?= $datacabang['Nama_cabang']; ?></option>
                <?php endforeach; ?>

              </select>
            </div>
          <div class="mt-4 d-flex justify-content-between">
            <a href="index.php?halaman=dt_jadwal_pelatihan" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-left"></i> Kembali</a>
            <button type="submit" class="btn btn-dark" name="edit" onclick="return confirm('Edit data jadwal pelatihan?');"><i class="fas fa-edit"></i> Edit</button>
          </div>
        </form>
      </div>    
    </div>
    <!-- /.card -->
  </div>
</section>