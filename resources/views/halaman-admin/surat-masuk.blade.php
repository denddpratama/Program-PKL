<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Surat Masuk</title>

  @include('tools-admin.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('tools-admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('tools-admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Surat Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- Search form -->
            <input class="form-control" type="text" id="searchInput" placeholder="Search..">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Nama Instansi</th>
                <th>Tanggal Masuk</th>
                <th>Perihal</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <!-- ... (kode HTML sebelumnya) ... -->
            <tbody id="tableBody">
              @foreach ($srt as $item)
                <tr>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->nama_instansi }}</td>
                  <td>{{ $item->created_at->format('d-m-Y') }}</td>
                  <td>{{ $item->perihal }}</td>
                  <td>{{ $item->status }}</td>
                  <td>
                    <a href="{{ url('tambah-status/'.$item->id) }}" class="btn btn-warning">
                      <i class="fa fa-edit"></i> Edit
                    </a>
                    <a data-toggle="modal" data-target="#data{{$loop->iteration}}" class="btn btn-primary">
                      <i class="fa fa-eye"></i> Lihat Detail
                    </a>
                    <a href="{{ url('print/'.$item->id) }}" class="btn btn-info">
                      <i class="fa fa-print"></i> Print Berita Acara
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <!-- ... (kode HTML lainnya) ... -->
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
  </div>

    @foreach ($srt as $item)
      <div class="modal fade" id="data{{$loop->iteration}}" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <!-- Modal content-->
          <div class="modal-content modal-lg">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"></h5>
            </div>
            <div style="text-align: center;">
              <h5 class="modal-title">Detail Surat</h5>
            </div>
              <div class="modal-body">
              <p><strong>Nama:</strong> {{ $item->nama }}</p>
              <p><strong>Nama Instansi:</strong> {{ $item->nama_instansi }}</p>
              <p><strong>NIP:</strong> {{ $item->nip }}</p>
              <p><strong>Perihal:</strong> {{ $item->perihal }}</p>
              <p><strong>Tanggal Masuk:</strong> {{ $item->created_at->format('d-m-Y') }}</p>
              <p><strong>Alamat Pemohon:</strong> {{ $item->alamat_pemohon }}</p>
              <p><strong>Nomor Telepon:</strong> {{ $item->no_telepon }}</p>
              <p><strong>Lampiran:</strong> <a href="{{ url('lampiran/'.$item->lampiran_surat) }}" target="_blank" rel="noopener noreferrer">Lihat File</a></p>
              <p><strong>Status:</strong> {{ $item->status }}</p>
              <p><strong>Pengambilan:</strong> {{ $item->pengambilan }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('tools-admin.script')

<script>
  // Adding search functionality
  document.getElementById("searchInput").addEventListener("keyup", function() {
    var value = this.value.toLowerCase();
    var rows = document.getElementById("tableBody").getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
      var name = rows[i].getElementsByTagName("td")[0].innerText.toLowerCase();
      var instansi = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();
      var nip = rows[i].getElementsByTagName("td")[2].innerText.toLowerCase();
      var perihal = rows[i].getElementsByTagName("td")[3].innerText.toLowerCase();
      var status = rows[i].getElementsByTagName("td")[4].innerText.toLowerCase();

      if (name.includes(value) || instansi.includes(value) || nip.includes(value) || perihal.includes(value) || status.includes(value)) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  });
</script>

</body>
</html>
