<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Tambah Data Jabatan</title>

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
            <h1 class="m-0">Ubah Status</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Status</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ url('simpan-status/'.$tmb->id) }}" method="post">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_jabatan" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <select type="text" name="status" class="form-control">
                        <option value="">{{$tmb->status}}</option>
                        <option>Surat Diterima</option>
                        <option>Pemeriksaan Surat</option>
                        <option>Surat Ditolak</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_tanaman" class="col-sm-2 col-form-label">Pengambilan</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="pengambilan" name="pengambilan" placeholder="pengambilan">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="submit" class="btn btn-danger">Batal</button>
                </div>
                <!-- /.card-footer -->
              </form>
        </div>
      </div>
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
