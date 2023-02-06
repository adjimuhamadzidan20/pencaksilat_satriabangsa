<?php  
  require 'config/fungsi_tampil_data.php';

  $id = $_GET['id'];
  $keuangan = showingData("SELECT * FROM dt_keuangan INNER JOIN dt_anggota ON dt_keuangan.ID_anggota = dt_anggota.ID_anggota 
  WHERE ID_keuangan = '$id'");
  $anggota = showingData("SELECT * FROM dt_anggota");

  if (isset($_POST['edit'])) {
    $idKeuangan = $_POST['idkeuangan'];
    $tglPembayaran = htmlspecialchars($_POST['tglpembayaran']);
    $nominal = htmlspecialchars($_POST['nominal']);
    $keterangan = htmlspecialchars($_POST['keterangan']);
    $idanggota = htmlspecialchars($_POST['idanggota']);

    $sql = "UPDATE dt_keuangan SET Tanggal_Pembayaran = '$tglPembayaran', Nominal = '$nominal', Keterangan = '$keterangan', 
    ID_anggota = '$idanggota' WHERE ID_keuangan = '$idKeuangan'";
    mysqli_query($koneksi, $sql);

    echo "<script>
      window.location.assign('index.php?halaman=dt_keuangan');
    </script>";
  }

?>

<!-- Main content -->
<section class="content-header">
  <div class="container-fluid mb-5 mt-1">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-archive nav-icon mr-1"></i> Edit Data Keuangan</h3>
      </div>
      <!-- /.card-header -->  
      <div class="card-body">
        <form method="post">
          <?php foreach ($keuangan as $data) { ?>
            <div class="form-group">
              <!-- <label for="id">ID Keuangan</label> -->
              <input type="text" class="form-control" id="id" name="idkeuangan" value="<?= $data['ID_keuangan']; ?>" hidden="hidden">
            </div>
            <div class="form-group">
              <label for="tglpembayaran">Tanggal Pembayaran</label>
              <input type="date" class="form-control" id="tglpembayaran" name="tglpembayaran" value="<?= $data['Tanggal_Pembayaran']; ?>" required>
            </div>
            <div class="form-group">
              <label for="nominal">Nominal</label>
              <input type="text" class="form-control" id="nominal" name="nominal" value="<?= $data['Nominal']; ?>" required>
            </div>
            <div class="form-group">
              <!-- <label for="keterangan">Keterangan</label> -->
              <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['Keterangan']; ?>" hidden="hidden">
            </div>
            <div class="form-group">
              <label for="namaanggota">Nama Anggota</label>
              <select class="form-control select2bs4" id="namaanggota" name="idanggota" required>
                <option selected value="<?= $data['ID_anggota']; ?>"><?= $data['ID_anggota']; ?> - <?= $data['Nama_lengkap']; ?></option>
          <?php } ?>
              <?php foreach ($anggota as $nama) : ?>
                <option value="<?= $nama['ID_anggota']; ?>"><?= $nama['ID_anggota']; ?> - <?= $nama['Nama_lengkap']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mt-4 d-flex justify-content-between">
            <a href="index.php?halaman=dt_keuangan" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-left"></i> Kembali</a>
            <button type="submit" class="btn btn-dark" name="edit" onclick="return confirm('Edit data keuangan?');"><i class="fas fa-edit"></i> Edit</button>
          </div>
        </form>
      </div>    
    </div>
    <!-- /.card -->
  </div>
</section>