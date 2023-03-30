<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Pengamas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
</head>

<body data-topbar="dark">

    @php
        use App\Models\Pengaduan;
    @endphp

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                   
                    <div class="navbar-brand-box">
                        <h3 style="color:white; margin-top: 10px;">Pengamas Racoon City</h3>   
                    </div>
                </div>

                <div class="d-flex" style="margin-top: 10px;">

                </div>
            </div>
        </header>



        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="/dashboard" class="waves-effect">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @if (Auth::user()->role != 'petugas')
                            
                        
                        <li>
                            <a href="/pengaduan">
                                <i class="mdi mdi-send"></i>
                                <span>Pengaduan</span>
                            </a>
                        </li>
                        @endif

                        @if (Auth::user()->role != 'masyarakat')

                        <li>
                            <a href="/tanggapan">
                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                <span>Tanggapan</span>
                                @php
                                    $notif = Pengaduan::where('status', 'proses')->count()
                                @endphp
                                <span class="badge bg-danger rounded-pill">{{ $notif }}</span>
                            </a>
                        </li>
                        @endif

                        @if (Auth::user()->role == 'admin')
                            
                        <li>
                            <a href="/laporan">
                                <i class="mdi mdi-download"></i>
                                <span>Unduh Laporan</span>
                            </a>
                        </li>

                        <li class="menu-title">Extras</li>

                        <li>
                            <a href="/regispetugas">
                                <i class="mdi mdi-account-plus"></i>
                                <span>Register Petugas</span>
                            </a>
                        </li>
                        @endif<li>
                            <a href="/logout">
                                <i class="mdi mdi-arrow-left-bold-hexagon-outline"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->

            </div>

        </div>
        <!-- Left Sidebar End -->

        <div class="content" id="result">
            <div>
                @yield('content')
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="{{asset('assets/js/ajax.js')}}"></script>
</body>

</html>