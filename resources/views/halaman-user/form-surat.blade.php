<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Form Surat</title>

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
            <h1 class="m-0">Form Surat Permohonan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="container-fluid">
        <div class="card card-teal">
              <div class="card-header">
                <h3 class="card-title">Form Surat Permohonan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{ url('simpan-formsurat') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Instansi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="Nama Instansi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nip</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nip" name="nip" placeholder="Nip">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Perihal</label>
                    <div class="col-sm-10">
                      <select type="text" name="perihal" id="perihal" class="form-control" name="perihal">
                        <option>Tanaman Toga</option>
                        <option>Tanaman Hias</option>
                        <option>Bibit Sayuran</option>
                        <option>Bibit Tanaman Toga</option>
                        <option>Bibit Tanaman Hias</option>
                        <option>Tanaman Toga dan Tanaman Hias</option>
                        <option>Tanaman Toga dan Bibit Sayuran</option>
                        <option>Tanaman Toga dan Bibit Tanaman Toga</option>
                        <option>Tanaman Toga dan Bibit Tanaman Hias</option>
                        <option>Tanaman Hias dan Bibit Sayuran</option>
                        <option>Tanaman Hias dan Bibit Tanaman Toga</option>
                        <option>Tanaman Hias dan Bibit Tanaman Hias</option>
                        <option>Bibit Sayuran dan Bibit Tanaman Toga</option>
                        <option>Bibit Sayuran dan Bibit Tanaman Hias</option>
                        <option>Bibit Tanaman Toga dan Bibit Tanaman Hias</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" placeholder="Alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomer Telepon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Nomor telepon">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">File input</label>
                    <div class="col-sm-10">
                      <div class="custom-file">
                        <input type="file" class="form-control" name="lampiran_surat" id="lampiran_surat">
                      </div>
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
@include('tools-user.script')
</body>
</html>
