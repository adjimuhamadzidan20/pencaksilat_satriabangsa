<?php  
  require 'config/fungsi_tampil_data.php';

  $id = $_GET['id'];
  $pelatih = showingData("SELECT * FROM dt_pelatih WHERE ID_pelatih = '$id'");

  if (isset($_POST['edit'])) {
    $idPelatih = $_POST['idpelatih'];
    $namaPelatih = htmlspecialchars(ucwords($_POST['pelatih']));
    $tglLahir = htmlspecialchars($_POST['tgllahir']);
    $jenKelamin = htmlspecialchars($_POST['jen_kelamin']);
    $sabuk = htmlspecialchars($_POST['sabuk']);

    $sql = "UPDATE dt_pelatih SET Nama_pelatih = '$namaPelatih', Tanggal_lahir = '$tglLahir', Jenis_kelamin = '$jenKelamin', 
    Sabuk = '$sabuk' WHERE ID_pelatih = '$idPelatih'";
    mysqli_query($koneksi, $sql);

    echo "<script>
      window.location.assign('index.php?halaman=dt_pelatih');
    </script>";
  }

?>

<!-- Main content -->
<section class="content-header">
  <div class="container-fluid mb-5 mt-1">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-user nav-icon mr-1"></i> Edit Data Pelatih</h3>
      </div>
      <!-- /.card-header -->  
      <div class="card-body">
        <form method="post">
          <?php foreach ($pelatih as $data) { ?>
            <input type="text" class="form-control" id="id" name="idpelatih" value="<?= $data['ID_pelatih']; ?>" hidden="hidden">
            <div class="form-group">
              <label for="namapelatih">Nama Pelatih</label>
              <input type="text" class="form-control" id="namapelatih" name="pelatih" value="<?= $data['Nama_pelatih']; ?>" required>
            </div>
            <div class="form-group">
              <label for="tgllahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?= $data['Tanggal_lahir']; ?>" required>
            </div>
            <div class="form-group">
              <label for="jeniskelamin">Jenis Kelamin</label>
              <select class="form-control select2bs4" id="jeniskelamin" name="jen_kelamin" required>
                <option selected value="<?= $data['Jenis_kelamin']; ?>"><?= $data['Jenis_kelamin']; ?></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="sabuk">Warna Sabuk</label>
              <select class="form-control select2bs4" id="sabuk" name="sabuk" required>
                <option selected value="<?= $data['Sabuk']; ?>"><?= $data['Sabuk']; ?></option>
                <option value="Putih">Putih</option>
                <option value="Hijau">Hijau</option>
                <option value="Orange">Orange</option>
                <option value="Biru">Biru</option>
                <option value="Merah">Merah</option>
                <option value="Coklat">Coklat</option>
                <option value="Hijau">Hitam</option>
              </select>
            </div>
          <?php } ?>
          <div class="mt-4 d-flex justify-content-between">
            <a href="index.php?halaman=dt_pelatih" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-left"></i> Kembali</a>
            <button type="submit" class="btn btn-dark" name="edit" onclick="return confirm('Edit data pelatih?');"><i class="fas fa-edit"></i> Edit</button>
          </div>
        </form>
      </div>    
    </div>
    <!-- /.card -->
  </div>
</section>