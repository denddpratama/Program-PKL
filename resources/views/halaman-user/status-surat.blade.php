<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Status Surat</title>

  @include('tools-user.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Navbar -->
  @include('tools-user.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('tools-user.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Status Surat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- Search form -->
            <input class="form-control" type="text" id="searchInput" placeholder="Search..">
          </div><!-- /.col -->
          <div class="col-sm-6">
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
                  <tr>
                    <th>Nama</th>
                    <th>Nama Instansi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Pengambilan Tanaman</th>
                    <th>File Surat</th>
                  </tr>
                  </thead>
                  <tbody id="tableBody">
                    @foreach ($srt as $item)
                      <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nama_instansi }}</td>
                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->pengambilan }}</td>
                        <td>
                          <a href="{{ url('tampil/'.$item->id) }}" class="btn btn-info">
                            <i class="fa fa-eye"></i> Lihat 
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    </section>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('tools-user.script')
<script>
  // Adding search functionality
  document.getElementById("searchInput").addEventListener("keyup", function() {
    var value = this.value.toLowerCase();
    var rows = document.getElementById("tableBody").getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
      var instansi = rows[i].getElementsByTagName("td")[0].innerText.toLowerCase();
      var created_at = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();
      var status = rows[i].getElementsByTagName("td")[2].innerText.toLowerCase();

      if (instansi.includes(value) || created_at.includes(value) || status.includes(value)) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  });
</script>
</body>
</html>
