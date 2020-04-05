<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      
        {{-- <title>AES_User</title> --}}
      
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

          <!-- icons -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:1000,1200|Material+Icons" /> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

        <link href="{{ asset('material') }}/css/.min.css?v=2.1.1" rel="stylesheet" />


        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        
        <style>
          #dataTable_length {
            display: none;
          }
           hr {
         border-top: 2px solid #6497b1;
          } 
          hr.type_7 {
          border: 0;
          height: 55px;
          background-image: url(img/type_7.png);
          background-repeat: no-repeat;
          }
          

        </style>
      </head>
      
      <body id="page-top">
      
        <!-- Page Wrapper -->
        <div id="wrapper">
      
          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
      
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
              <div class="sidebar-brand-icon">
                <img src="https://upload.wikimedia.org/wikipedia/th/8/80/Logo-ASE_KKU.png" class="mt-5" width="60"
                  height="55">
              </div>
              <div class="sidebar-brand-text mx-6 mt-5">
                <font color=“#f0dd8e”>ระบบจัดการโครงการ</font><br><sub>คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</sub>
              </div>
            </a>
      
            <!-- Divider -->
            <hr class="sidebar-divider my-0 mt-5">
    @guest 
      <!-- Nav Item - Tables -->
      <li class="nav-item">
              <a class="nav-link" href="manual">
                <i class="fa fa-book"></i>
                <span>คู่มือยื่นขออนุมัติโครงการ</span></a>
            </li>
    @else     
      @if (Auth::user()->role == 1)
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="home">
                <i class="fa fa-home"></i>
                <span>หน้าหลัก</span></a>
            </li>
      
            <!-- Divider -->
            <hr class="sidebar-divider">
      
            <!-- Heading -->
            <div class="sidebar-heading">
              Interface
            </div>
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" href="approve">
                <i class="fa fa-list-alt"></i>
                <span>ยื่นขออนุมัติโครงการ</span></a>
            </li>
      
            <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" href="manual">
                <i class="fa fa-book"></i>
                <span>คู่มือยื่นขออนุมัติโครงการ</span></a>
            </li>
      @else
  
                <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="admin">
            <i class="fa fa-home"></i>
          <span>หน้าหลัก ADMIN</span></a>
      </li>
      
            <!-- Divider -->
            <hr class="sidebar-divider">
      
            <!-- Heading -->
            <div class="sidebar-heading">
              Interface
            </div>

            <!-- Nav Item - Charts -->
      <li class="nav-item ">
        <a class="nav-link" href="charts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>ข้อมูลสรุปรายปี</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="newplan">
          <i class="fas fa-fw fa-table"></i>
          <span>นำเข้าแผนใหม่</span></a>
      </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
        <a class="nav-link" href="category">
            <i class="fa fa-th-list"></i>
          <span>หมวดหมู่</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="department">
            <i class="fa fa-tasks"></i>
          <span>ฝ่าย</span></a>
      </li>
      @endif
      @endguest
      
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
      
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
      
          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
  
        </body>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel ">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
