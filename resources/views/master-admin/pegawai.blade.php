<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Data Pegawai</title>

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
            <h1 class="m-0">Pegawai</h1>
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
                <h3 class="card-title">Tabel Data Pegawai</h3>
                <div class="dropdown no-arrow text-right">
                    <a class="btn btn-primary" href="{{ url('tambah-pegawai') }}">
                      Tambah
                    </a>
                </div>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Pegawai</th>
                    <th>Jabatan Pegawai</th>
                    <th>Nip Pegawai</th>
                    <th>Alamat Pegawai</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                  @foreach ($pgw as $item)
                  <tr>
                    <td>{{ $item-> nama_pegawai}}</td>
                    <td>{{ $item-> jabatan->nama_jabatan}}</td>
                    <td>{{ $item-> nip_pegawai}}</td>
                    <td>{{ $item-> alamat_pegawai}}</td>
                    <td>
                        <a href="{{ url ('ubah-pegawai/'.$item->id) }}" class="btn btn-warning">
                          <i class="fa fa-edit"></i> Edit </a>
                        <a href="{{ url ('hapus-pegawai/'.$item->id) }}" class="btn btn-danger">
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
