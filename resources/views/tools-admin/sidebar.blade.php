<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('home-admin')}}" class="brand-link" style="background-color: #FFA500;">
        <img src="{{url('https://4.bp.blogspot.com/-VjNbiuPIJqQ/WheX1lYHuwI/AAAAAAAAFW0/CBqhO3dgFwoPhnn-hhMl_L7Zg_KGUcVgACLcBGAs/s400/Kota%2BBanjarmasin.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-0" style="opacity: .8">
        <span class="brand-text" style="color: #000000;">DKP3 | KKP</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Master Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admin')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Admin</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('jabatan')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Jabatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('tanaman')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tanaman</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('pegawai')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pegawai</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{url('surat-masuk')}}" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>
           <!--<li class="nav-item">
                <a href="{{url('berita-acara')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>Berita Acara</p>
                </a>
            </li>-->
        </ul>

        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>