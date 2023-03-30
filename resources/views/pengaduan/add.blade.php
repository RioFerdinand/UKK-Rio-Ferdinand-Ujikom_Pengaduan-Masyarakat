@extends('layout.layout')
@section('content')
<body data-topbar="light" data-layout="horizontal" data-layout-size="boxed">

    <!-- Begin page -->
    <div id="layout-wrapper">   
        <div class="content">
            <div class="row" style="padding-left: 20%; margin-top: 5%; padding-top: 10%; padding-bottom: 26%">
                <h2>Form Pelaporan Masyarakat</h2>
                <form action="/pengaduan" enctype="multipart/form-data" method="post">
                    @METHOD('POST')
                    @csrf
                    <label>ingin melaporkan kejadian apa hari ini?</label>
                    <input type="text" name="isi_laporan" style="margin-left: 5px;"><br>
                    <label>Cantumkan bukti untuk laporan</label>
                    <input type="file" name="foto" id="foto" style="margin-left: 55px;">
                    <div class="form-button" style="margin-top: 20px;">
                        <input type="submit" value="Kirim" class="text-center ybtn ybtn-accent-color">
                    </div>
                    <br>
                    @if (session('success'))
                    <div class="alert alert-success">
                        <strong>{{ session('success') }}</strong>
                    </div>
                    @endif
                </form>
            </div>
            <!-- end row -->
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
    
    