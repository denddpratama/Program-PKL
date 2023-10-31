<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 |  KKP Admin | Dashboard</title>

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
          <div class="col-sm-3">
            <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{ $jumlahSurat }}</h3>
                    <p>Jumlah Surat Masuk</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i><i class="nav-icon far fa-envelope"></i>
                  </div>
                  <a href="{{url('surat-masuk')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{ $jumlahUser }}</h3>
                    <p>Jumlah Admin</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i><i class="nav-icon far fa-user"></i>
                  </div>
                  <a href="{{url('admin')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
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
