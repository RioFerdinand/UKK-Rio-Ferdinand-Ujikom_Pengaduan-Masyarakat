@extends('layout.layout')
@section('content')

<body data-topbar="light" data-layout="horizontal" data-layout-size="boxed">

    <!-- Begin page -->
    <div id="layout-wrapper">   
        <div class="content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-3 col-sm-2" style="margin-left: 100px; margin-bottom: 100px;">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Total pengaduan</h6>
                                        <h2 class="mb-4 text-white">{{ $total }}</h2>
                                       <span class="">Laporan </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-2" style="margin-left: 10px; margin-bottom: 100px;">
                            <div class="card mini-stat bg-success">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Pengaduan Selesai</h6>
                                        <a href="/laporsai"><h2 class="mb-4 text-white">{{ $selesai }}</h2></a>
                                       <span class="">Laporan </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-2">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Pending Laporan</h6>
                                        <a href="/prosessai"><h2 class="mb-4 text-white">{{ $proses }}</h2></a>
                                        <span>Laporan </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- MODAL -->
                     
    {{-- <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" id="mediumBody">
                <div>
                    @php
use App\Http\Controllers\TanggapanController;
@endphp
                    <!-- the result to be displayed apply here -->
                    <div class="row" style="margin-top: 5%; padding-top: 5%;">
                        <table class="table table-bordered" style="margin-left: 11%;">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Bukti</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengaduan as $p)
                                <tr>
                                    <td>{{ $p->id_pengaduan }}</td>
                                    <td><img src="{{ asset('storage/'.$p->foto)}}" alt="" style="width:300px;"></td>
                                    <td>{{ $p->status }}</td>
                                    @if ($p->status == 'proses')
                                    <td><a href="{{ route('show',$p->id_pengaduan) }}" class="show">Beri Tanggapan</a></td>
                                    @elseif ($p->status == 'selesai')
                                    <td><a href="{{ route('show',$p->id_pengaduan) }}" class="show">Show</a></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
                    {{-- <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Orders</h6>
                                        <h2 class="mb-4 text-white">1,587</h2>
                                        <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous
                                            period</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-buffer float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Revenue</h6>
                                        <h2 class="mb-4 text-white">$46,782</h2>
                                        <span class="badge bg-danger"> -29% </span> <span class="ms-2">From previous
                                            period</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-tag-text-outline float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Average Price</h6>
                                        <h2 class="mb-4 text-white">$15.9</h2>
                                        <span class="badge bg-warning"> 0% </span> <span class="ms-2">From previous
                                            period</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card mini-stat bg-primary">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-briefcase-check float-end"></i>
                                    </div>
                                    <div class="text-white">
                                        <h6 class="text-uppercase mb-3 font-size-16 text-white">Product Sold</h6>
                                        <h2 class="mb-4 text-white">1890</h2>
                                        <span class="badge bg-info"> +89% </span> <span class="ms-2">From previous
                                            period</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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

    <script>
         // display a modal (medium modal)
         $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
    </script>
</body>
@endsection