<script type="text/javascript">

  // tabel data anggota
  $(document).ready(function() {
    let tabel = $('#tabelAnggota').DataTable({
      paging: true,
      lengthChange: true,
      searching: true,
      ordering: true,
      info: true,
      autoWidth: false,
      pagingType: 'simple',
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: ({
        "url": 'serverside/getAnggota.php',
        "datatype": 'json'
      }),
      columnDefs: [
        {
          "targets": 5,
          "defaultContent": '<div class="d-flex justify-content-center"><button class="btn btn-dark btn-sm mr-1" id="btnEdit"><i class="fas fa-edit"></i> Edit</button> <button class="btn btn-dark btn-sm" id="btnDel"><i class="fas fa-trash"></i> Hapus</button></div>'
        }
      ]
    })

    $('#tabelAnggota tbody').on('click', '#btnEdit', function() {
      let data = tabel.row($(this).parents('tr')).data();
      window.location.href = 'index.php?halaman=edit_dt_anggota&id='+ data[0];
    });

    $('#tabelAnggota tbody').on('click', '#btnDel', function() {
      let data = tabel.row($(this).parents('tr')).data();
      let notice;
      if (confirm("Anda yakin ingin menghapusnya?") == true) {
        window.location.href = 'fungsi_delete/delete_dt_anggota.php?id='+ data[0];
      } else {
        notice = "";
      }
    });
  })

  // tabel data cabang
  $(document).ready(function() {
    let tabel = $('#tabelCabang').DataTable({
      paging: true,
      lengthChange: true,
      searching: true,
      ordering: true,
      info: true,
      autoWidth: false,
      pagingType: 'simple',
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: ({
        "url": 'serverside/getCabang.php',
        "datatype": 'json'
      }),
      columnDefs: [
        {
          "targets": 4,
          "defaultContent": '<div class="d-flex justify-content-center"><button class="btn btn-dark btn-sm mr-1" id="btnEdit"><i class="fas fa-edit"></i> Edit</button> <button class="btn btn-dark btn-sm" id="btnDel"><i class="fas fa-trash"></i> Hapus</button></div>'
        }
      ]
    })

    $('#tabelCabang tbody').on('click', '#btnEdit', function() {
      let data = tabel.row($(this).parents('tr')).data();
      window.location.href = 'index.php?halaman=edit_dt_cabang&id='+ data[0];
    });

    $('#tabelCabang tbody').on('click', '#btnDel', function() {
      let data = tabel.row($(this).parents('tr')).data();
      let notice;
      if (confirm("Anda yakin ingin menghapusnya?") == true) {
        window.location.href = 'fungsi_delete/delete_dt_cabang.php?id='+ data[0];
      } else {
        notice = "";
      }
    });
  })

  // tabel data pelatih
  $(document).ready(function() {
    let tabel = $('#tabelPelatih').DataTable({
      paging: true,
      lengthChange: true,
      searching: true,
      ordering: true,
      info: true,
      autoWidth: false,
      pagingType: 'simple',
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: ({
        "url": 'serverside/getPelatih.php',
        "datatype": 'json'
      }),
      columnDefs: [
        {
          "targets": 5,
          "defaultContent": '<div class="d-flex justify-content-center"><button class="btn btn-dark btn-sm mr-1" id="btnEdit"><i class="fas fa-edit"></i> Edit</button> <button class="btn btn-dark btn-sm" id="btnDel"><i class="fas fa-trash"></i> Hapus</button></div>'
        }
      ]
    })

    $('#tabelPelatih tbody').on('click', '#btnEdit', function() {
      let data = tabel.row($(this).parents('tr')).data();
      window.location.href = 'index.php?halaman=edit_dt_pelatih&id='+ data[0];
    });

    $('#tabelPelatih tbody').on('click', '#btnDel', function() {
      let data = tabel.row($(this).parents('tr')).data();
      let notice;
      if (confirm("Anda yakin ingin menghapusnya?") == true) {
        window.location.href = 'fungsi_delete/delete_dt_pelatih.php?id='+ data[0];
      } else {
        notice = "";
      }
    });
  })

</script>