<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Home</title>

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
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card-body">
        <p class="text-center" style="font-size: 24px;">SELAMAT DATANG DI WEBSITE </p>
        <p class="text-center" style="font-size: 24px;">DINAS KETAHANAN PANGAN PERTANIAN DAN PERIKANAN</p>
        <p class="text-center" style="font-size: 24px;">BIDANG KONSUMSI KEAMANAN PANGAN</p>
        <div class="login-logo">
          <img src="{{url('https://4.bp.blogspot.com/-VjNbiuPIJqQ/WheX1lYHuwI/AAAAAAAAFW0/CBqhO3dgFwoPhnn-hhMl_L7Zg_KGUcVgACLcBGAs/s400/Kota%2BBanjarmasin.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-0" style="width:420px;height:300px">
        </div>
        </p>
      </div>
    </section>
              <!-- /.card-body -->
    <!-- /.content -->
  </div>

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
@include('tools-user.script')
</body>
</html>
