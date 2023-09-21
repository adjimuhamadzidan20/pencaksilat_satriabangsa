<?php  
  require 'config/fungsi_tampil_data.php';

  $id = $_GET['id'];
  $anggota = showingData("SELECT * FROM dt_anggota WHERE ID_anggota = '$id'");

  if (isset($_POST['edit'])) {
    $idAnggota = $_POST['idanggota'];
    $namaAnggota = htmlspecialchars(ucwords($_POST['nama_anggota']));
    $jenisKelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $alamat = htmlspecialchars(ucwords($_POST['alamat']));
    $sabuk = htmlspecialchars($_POST['sabuk']);

    $sql = "UPDATE dt_anggota SET Nama_lengkap = '$namaAnggota', Jenis_kelamin = '$jenisKelamin', Alamat = '$alamat', Sabuk = '$sabuk'
    WHERE ID_anggota = '$idAnggota'";
    mysqli_query($koneksi, $sql);

    echo "<script>
      window.location.assign('index.php?halaman=dt_anggota');
    </script>";
  }
  
?>
<!-- Main content -->
<section class="content-header">
  <div class="container-fluid mb-5 mt-1">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-users nav-icon mr-1"></i> Edit Data Anggota</h3>
      </div>
      <!-- /.card-header -->  
      <div class="card-body">
        <form method="post">
          <?php foreach ($anggota as $data) { ?>
            <input type="text" class="form-control" id="id" name="idanggota" value="<?= $data['ID_anggota']; ?>" hidden="hidden">
            <div class="form-group">
              <label for="namalengkap">Nama Lengkap</label>
              <input type="text" class="form-control" id="namalengkap" name="nama_anggota" value="<?= $data['Nama_lengkap']; ?>" required>
            </div>
            <div class="form-group">
              <label for="jeniskelamin">Jenis Kelamin</label>
              <select class="form-control select2bs4" id="jeniskelamin" name="jenis_kelamin" required>
                <option selected value="<?= $data['Jenis_kelamin']; ?>"><?= $data['Jenis_kelamin']; ?></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['Alamat']; ?>" required>
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
                <option value="Hitam">Hitam</option>
              </select>
            </div>
            <div class="mt-4 d-flex justify-content-between">
              <a href="index.php?halaman=dt_anggota" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-left"></i> Kembali</a>
              <button type="submit" class="btn btn-dark" name="edit" onclick="return confirm('Edit data anggota?');"><i class="fas fa-edit" ></i> Edit</button>
            </div>
          <?php } ?>
        </form>
      </div>    
    </div>
    <!-- /.card -->
  </div>
</section>