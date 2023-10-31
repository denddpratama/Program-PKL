<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Tambah Data Pegawai</title>

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
            <h1 class="m-0">Tambah Pegawai</h1>
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
                <h3 class="card-title">Form Tambah Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ url('simpan-perubahanpegawai/'.$pgw->id) }}" method="post">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama" value="{{$pgw->nama_pegawai}}">
                    </div>
                  </div>
                  <div class="form-group row">
                        <label for="id_jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <select name="id_jabatan" id="id_jabatan" class="form-control">
                                <option value="" disabled selected>Pilih Jabatan</option>
                                @foreach($jbt as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                  <div class="form-group row">
                    <label for="nip_pegawai" class="col-sm-2 col-form-label">Nip Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nip_pegawai" name="nip_pegawai" placeholder="Nip Pegawai" value="{{$pgw->nip_pegawai}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat_pegawai" class="col-sm-2 col-form-label">Alamat Pegawai</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai" placeholder="Alamat Pegawai" value="{{$pgw->alamat_pegawai}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="reset" class="btn btn-danger">Batal</button>
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
