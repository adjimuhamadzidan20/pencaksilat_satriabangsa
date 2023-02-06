<?php  
  require 'config/fungsi_tampil_data.php';
  $pelatih = showingData("SELECT * FROM dt_pelatih");
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><i class="fas fa-user nav-icon mr-1"></i> Data Pelatih</h1>
      </div>
      <div class="col-sm-6">
        <p class="float-sm-right text-secondary ">Tabel Data Pelatih</p>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i> Tambah Data</button>
            <a href="cetak_pdf/cetak_pelatih.php" target="_blank" class="btn btn-dark"><i class="fas fa-file-pdf"></i> Cetak PDF</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Pelatih</th>
                  <th>Nama Pelatih</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Sabuk</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pelatih as $data) : ?>
                  <tr>
                    <td><?= $data['ID_pelatih'];?></td>
                    <td><?= $data['Nama_pelatih'];?></td>
                    <td><?= $data['Tanggal_lahir'];?></td>
                    <td><?= $data['Jenis_kelamin'];?></td>
                    <td><?= $data['Sabuk'];?></td>
                    <td class="text-center">
                      <a href="index.php?halaman=edit_dt_pelatih&id=<?= $data['ID_pelatih']; ?>" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> Edit</a>
                      <a href="fungsi_delete/delete_dt_pelatih.php?id=<?= $data['ID_pelatih']; ?>" class="btn btn-dark btn-sm" onclick="return confirm('Anda yakin ingin menghapusnya?');"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>  

<!-- form tambah data -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-plus mr-2"></i> Tambah Data Pelatih</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="fungsi_add/add_dt_pelatih.php">
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="namapelatih">Nama Pelatih</label>
              <input type="text" class="form-control" id="namapelatih" placeholder="Masukan Nama Pelatih" name="pelatih" required>
            </div>
            <div class="form-group">
              <label for="tgllahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
            </div>
            <div class="form-group">
              <label for="jeniskelamin">Jenis Kelamin</label>
              <select class="form-control select2bs4" id="jeniskelamin" name="jen_kelamin" required>
                <option selected disabled>-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="sabuk">Warna Sabuk</label>
              <select class="form-control select2bs4" id="sabuk" name="sabuk" required>
                <option selected disabled>-- Pilih Sabuk --</option>
                <option value="Putih">Putih</option>
                <option value="Hijau">Hijau</option>
                <option value="Orange">Orange</option>
                <option value="Biru">Biru</option>
                <option value="Merah">Merah</option>
                <option value="Coklat">Coklat</option>
                <option value="Hijau">Hitam</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-angle-left"></i> Kembali</button>
          <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->