@extends('layout.layout')
@php
    use App\Models\Tanggapan;
@endphp
@section('content')
<body data-topbar="light" data-layout="horizontal" data-layout-size="boxed">

    <!-- Begin page -->
    <div id="layout-wrapper">   
        <div class="content">
            <div class="page-content">
                <div class="container-fluid">

                    <h2 style="margin-left: 30%;">Silahkan unduh laporan yang sudah tersedia</h2><br>
                    <div class="row" style="padding-left: 20%; margin-bottom: 20%;">
                        <a href="/generate-pdf" class="btn btn-primary">Download</a>
                        {{-- <h4>Hanya Laporan Selesai</h4>
                        <a href="/selesai-pdf" class="btn btn-primary">Download</a> --}}
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('assets/libs/morris.js/morris.min.js')}}"></script>
    <script src="{{ asset('assets/libs/raphael/raphael.min.js')}}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js')}}"></script>
</body>
@endsection