<!DOCTYPE html>
<html lang="en">
<head>
  <title>DKP3 | KKP | Login</title>
  @include('tools-admin.head')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{url('https://4.bp.blogspot.com/-VjNbiuPIJqQ/WheX1lYHuwI/AAAAAAAAFW0/CBqhO3dgFwoPhnn-hhMl_L7Zg_KGUcVgACLcBGAs/s400/Kota%2BBanjarmasin.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-0" style="width:180px;height:150px">
    <h3>Dinas Ketahanan Pangan Pertanian dan Perikanan</h3>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Admin Bidang Konsumsi Keamanan Pangan</p>
      <form class="user" action="{{ url('post-login') }}" method="post">
      {{ csrf_field() }}
        <div class="input-group mb-4">
          <input type="email"  class="form-control" id="email" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-4">
          <input type="password"  class="form-control" id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="social-auth-links text-center mb-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
      </form>

      <!--<p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
      <a href="register.html" class="text-center">Register a new membership</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
@include('tools-admin.script')
</body>
</html>