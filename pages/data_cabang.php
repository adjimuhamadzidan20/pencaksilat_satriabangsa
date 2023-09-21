<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="judul-halaman"><i class="fas fa-building nav-icon mr-1 ikon"></i> Data Cabang</h1>
      </div>
      <div class="col-sm-6">
        <p class="float-sm-right text-secondary ">Tabel Data Cabang</p>
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
            <a href="cetak_pdf/cetak_cabang.php" target="_blank" class="btn btn-dark"><i class="fas fa-file-pdf"></i> Cetak PDF</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tabelCabang" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Cabang</th>
                  <th>Nama Cabang</th>
                  <th>Penanggung Jawab</th>
                  <th>Jumlah Anggota</th>
                  <th>Opsi</th>
                </tr>
              </thead>
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
        <h4 class="modal-title"><i class="fas fa-plus mr-2"></i> Tambah Data Cabang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="fungsi_add/add_dt_cabang.php">
        <div class="modal-body">
          <div class="card-body">
            <div class="form-group">
              <label for="namacabang">Nama Cabang</label>
              <input type="text" class="form-control" id="namacabang" placeholder="Masukan Nama Cabang" name="cabang" required>
            </div>
            <div class="form-group">
              <label for="penanggungjawab">Penanggung Jawab</label>
              <input type="text" class="form-control" id="penanggungjawab" placeholder="Penanggung Jawab" name="penanggungjawab" required>
            </div>
            <div class="form-group">
              <label for="jmlanggota">Jumlah Anggota</label>
              <input type="text" class="form-control" id="jmlanggota" placeholder="Jumlah Anggota" name="jumlahanggota" required>
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