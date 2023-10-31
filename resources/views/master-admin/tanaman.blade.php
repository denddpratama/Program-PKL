<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Data Tanaman</title>

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
            <h1 class="m-0">Tanaman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- Search form -->
            <input class="form-control" type="text" id="searchInput" placeholder="Search..">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Tabel Data Tanaman</h3>
                <div class="dropdown no-arrow text-right">
                    <a class="btn btn-primary" href="{{ url('tambah-tanaman') }}">
                      Tambah
                    </a>
                </div>
              </div>
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                      <tr>
                          <th>Nama Tanaman</th>
                          <th>Jumlah Tanaman</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody id="tableBody"> <!-- Tambahkan id di sini -->
                      @foreach ($tmn as $item)
                      <tr>
                          <td>{{ $item->nama_tanaman }}</td> <!-- Perbaiki spasi di sini -->
                          <td>{{ $item->jumlah }}</td> <!-- Perbaiki spasi di sini -->
                          <td>
                              <a href="{{ url('ubah-tanaman/'.$item->id) }}" class="btn btn-warning">
                                  <i class="fa fa-edit"></i> Edit </a>
                              <a href="{{ url('hapus-tanaman/'.$item->id) }}" class="btn btn-danger">
                                  <i class="fa fa-trash"></i> Hapus </a>
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
@include('tools-admin.script')
<script>
    // Adding search functionality
    document.getElementById("searchInput").addEventListener("keyup", function() {
        var value = this.value.toLowerCase();
        var rows = document.getElementById("tableBody").getElementsByTagName("tr");

        for (var i = 0; i < rows.length; i++) {
            var nama = rows[i].getElementsByTagName("td")[0].innerText.toLowerCase(); // Ganti name menjadi nama

            if (nama.includes(value)) { // Ganti name menjadi nama
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    });
</script>
</body>
</html>
