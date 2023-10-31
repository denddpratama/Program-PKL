<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Data Jabatan</title>

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
            <h1 class="m-0">Jabatan</h1>
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
              <div class="card-header">
                <h3 class="card-title">Tabel Data Jabatan</h3>
                <div class="dropdown no-arrow text-right">
                    <a class="btn btn-primary" href="{{ url('tambah-jabatan') }}">
                      Tambah
                    </a>
                </div>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($jbt as $item)
                  <tr>
                    <td>{{ $item-> nama_jabatan}}</td>
                    <td>
                        <a href="{{ url ('ubah-jabatan/'.$item->id) }}" class="btn btn-warning">
                          <i class="fa fa-edit"></i> Edit </a>
                        <a href="{{ url ('hapus-jabatan/'.$item->id) }}" class="btn btn-danger">
                          <i class="fa fa-trash"></i> Hapus </a>
                    </td>
                  </tr>
                  @endforeach
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
</body>
</html>
