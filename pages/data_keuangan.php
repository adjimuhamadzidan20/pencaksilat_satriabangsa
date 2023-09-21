<?php
  require 'config/fungsi_tampil_data.php';
  $keuangan = showingData("SELECT * FROM dt_keuangan INNER JOIN dt_anggota ON dt_keuangan.ID_anggota = dt_anggota.ID_anggota");
  $anggota = showingData("SELECT * FROM dt_anggota");

?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="judul-halaman"><i class="fas fa-archive nav-icon mr-1 ikon"></i> Data Keuangan</h1>
      </div>
      <div class="col-sm-6">
        <p class="float-sm-right text-secondary ">Tabel Data Keuangan</p>
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
            <a href="cetak_pdf/cetak_keuangan.php" target="_blank" class="btn btn-dark"><i class="fas fa-file-pdf"></i> Cetak PDF</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Keuangan</th>
                  <th>Tanggal Pembayaran</th>
                  <th>Nominal</th>
                  <th>Keterangan</th>
                  <th>Nama Anggota</th>
                  <th>ID Anggota</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($keuangan as $data) : ?>
                  <tr>
                    <td><?= $data['ID_keuangan'];?></td>
                    <td><?= $data['Tanggal_Pembayaran'];?></td>
                    <td><?= $data['Nominal'];?></td>
                    <td><?= $data['Keterangan'];?></td>
                    <td><?= $data['Nama_lengkap'];?></td>
                    <td><?= $data['ID_anggota'];?></td>
                    <td class="text-center">
                      <a href="index.php?halaman=edit_dt_keuangan&id=<?= $data['ID_keuangan']; ?>" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> Edit</a>
                      <a href="fungsi_delete/delete_dt_keuangan.php?id=<?= $data['ID_keuangan']; ?>" class="btn btn-dark btn-sm" onclick="return confirm('Anda yakin ingin menghapusnya?');"><i class="fas fa-trash"></i> Hapus</a>
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
        <h4 class="modal-title"><i class="fas fa-plus mr-2"></i> Tambah Data Keuangan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="fungsi_add/add_dt_keuangan.php">
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="tglpembayaran">Tanggal Pembayaran</label>
              <input type="date" class="form-control" id="tglpembayaran" name="tglpembayaran" required>
            </div>
            <div class="form-group">
              <label for="nominal">Nominal</label>
              <input type="text" class="form-control" id="nominal" placeholder="Masukan Angka Nominal" name="nominal" required>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <select class="form-control select2bs4" id="keterangan" name="keterangan" required>
                <option selected disabled>-- Keterangan --</option>
                <option value="Sudah Membayar">Sudah Membayar</option>
              </select>
            </div>
            <div class="form-group">
              <label for="namaanggota">Nama Anggota</label>
              <select class="form-control select2bs4" id="namaanggota" name="idanggota" required>
                <option selected disabled>-- Nama Anggota --</option>
                <?php foreach ($anggota as $nama) : ?>
                  <option value="<?= $nama['ID_anggota']; ?>"><?= $nama['ID_anggota']; ?> - <?= $nama['Nama_lengkap']; ?></option>
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