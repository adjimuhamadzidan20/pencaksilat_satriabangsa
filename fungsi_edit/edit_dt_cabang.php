<?php  
  require 'config/fungsi_tampil_data.php';

  $id = $_GET['id'];
  $cabang = showingData("SELECT * FROM dt_cabang WHERE ID_cabang = '$id'");

  if (isset($_POST['edit'])) {
    $idCabang = $_POST['idcabang'];
    $namaCabang = htmlspecialchars(ucwords($_POST['cabang']));
    $penJawab = htmlspecialchars(ucwords($_POST['penanggungjawab']));
    $jmlanggota = htmlspecialchars(ucwords($_POST['jumlahanggota']));

    $sql = "UPDATE dt_cabang SET Nama_cabang = '$namaCabang', Penanggung_jawab = '$penJawab', Jumlah_anggota = '$jmlanggota'
    WHERE ID_cabang = '$idCabang'";
    mysqli_query($koneksi, $sql);

    echo "<script>
      window.location.assign('index.php?halaman=dt_cabang');
    </script>";
  }
?>

<!-- Main content -->
<section class="content-header">
  <div class="container-fluid mb-5 mt-1">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-building nav-icon mr-1"></i> Edit Data Cabang</h3>
      </div>
      <!-- /.card-header -->  
      <div class="card-body">
        <form method="post">
          <?php foreach ($cabang as $data) { ?>
            <input type="text" class="form-control" id="id" name="idcabang" value="<?= $data['ID_cabang']; ?>" hidden="hidden">
            <div class="form-group">
              <label for="namacabang">Nama Cabang</label>
              <input type="text" class="form-control" id="namacabang" name="cabang" value="<?= $data['Nama_cabang']; ?>" required>
            </div>
            <div class="form-group">
              <label for="penanggungjawab">Penanggung Jawab</label>
              <input type="text" class="form-control" id="penanggungjawab" name="penanggungjawab" value="<?= $data['Penanggung_jawab']; ?>" required>
            </div>
            <div class="form-group">
              <label for="jmlanggota">Jumlah Anggota</label>
              <input type="text" class="form-control" id="jmlanggota" name="jumlahanggota" value="<?= $data['Jumlah_anggota']; ?>" required>
            </div>
            <div class="mt-4 d-flex justify-content-between">
              <a href="index.php?halaman=dt_cabang" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-left"></i> Kembali</a>
              <button type="submit" class="btn btn-dark" name="edit" onclick="return confirm('Edit data cabang?');"><i class="fas fa-edit"></i> Edit</button>
            </div>
          <?php } ?>
        </form>
      </div>    
    </div>
    <!-- /.card -->
  </div>
</section>