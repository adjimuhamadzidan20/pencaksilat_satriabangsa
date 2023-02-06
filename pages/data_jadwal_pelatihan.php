<?php 
  require 'config/fungsi_tampil_data.php';
  $jadwal = showingData("SELECT * FROM dt_jadwal_latihan 
  INNER JOIN dt_pelatih ON dt_jadwal_latihan.ID_pelatih = dt_pelatih.ID_pelatih 
  INNER JOIN dt_cabang ON dt_jadwal_latihan.ID_cabang = dt_cabang.ID_cabang");

  $pelatih = showingData("SELECT * FROM dt_pelatih");
  $cabang = showingData("SELECT * FROM dt_cabang");

?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><i class="fas fa-calendar nav-icon mr-1"></i> Data Jadwal Pelatihan</h1>
      </div>
      <div class="col-sm-6">
        <p class="float-sm-right text-secondary ">Tabel Jadwal Pelatihan</p>
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
            <a href="cetak_pdf/cetak_jadwal.php" target="_blank" class="btn btn-dark"><i class="fas fa-file-pdf"></i> Cetak PDF</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Latihan</th>
                  <th>Hari Latihan</th>
                  <th>Nama Pelatih</th>
                  <th>ID Pelatih</th>
                  <th>Cabang</th>
                  <th>ID Cabang</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($jadwal as $data) : ?>
                  <tr>
                    <td><?= $data['ID_latihan'];?></td>
                    <td><?= $data['Hari'];?></td>
                    <td><?= $data['Nama_pelatih'];?></td>
                    <td><?= $data['ID_pelatih'];?></td>
                    <td><?= $data['Nama_cabang'];?></td>
                    <td><?= $data['ID_cabang'];?></td>
                    <td class="text-center">
                      <a href="index.php?halaman=edit_jadwal_pelatihan&id=<?= $data['ID_latihan']; ?>" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> Edit</a>
                      <a href="fungsi_delete/delete_jadwal_pelatihan.php?id=<?= $data['ID_latihan']; ?>" class="btn btn-dark btn-sm" onclick="return confirm('Anda yakin ingin menghapusnya?');"><i class="fas fa-trash"></i> Hapus</a>
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
        <h4 class="modal-title"><i class="fas fa-plus mr-2"></i> Tambah Jadwal Pelatihan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="fungsi_add/add_jadwal_pelatihan.php">
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="harilatihan">Hari Latihan</label>
              <input type="text" class="form-control" id="harilatihan" placeholder="Masukan Hari" name="hari" required>
            </div>
            <div class="form-group">
              <label for="pelatih">Nama Pelatih</label>
              <select class="form-control select2bs4" id="pelatih" name="pelatih" required>
                <option selected disabled>-- Nama Pelatih --</option>
                <?php foreach ($pelatih as $datapelatih) : ?>
                  <option value="<?= $datapelatih['ID_pelatih']; ?>"><?= $datapelatih['ID_pelatih']; ?> - <?= $datapelatih['Nama_pelatih']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="sabuk">Cabang</label>
              <select class="form-control select2bs4" id="sabuk" name="cabang" required>
                <option selected disabled>-- Pilih Cabang --</option>
                <?php foreach ($cabang as $datacabang) : ?>
                  <option value="<?= $datacabang['ID_cabang']; ?>"><?= $datacabang['ID_cabang']; ?> - <?= $datacabang['Nama_cabang']; ?></option>
                <?php endforeach; ?>
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