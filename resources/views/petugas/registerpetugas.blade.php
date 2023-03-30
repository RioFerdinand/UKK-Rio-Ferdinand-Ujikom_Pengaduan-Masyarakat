@extends('layout.layout')
@section('content')
<title>Pengamas</title>
<link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/custom.css">
{{-- <body>
    <h2>Form Register</h2>

    <form action="{{ route('regisPetugas')}}" method="post">
        @METHOD('POST')
        @csrf
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="nama_petugas" required>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="telp">Nomor Telepon</label>
        <input type="text" id="telp" name="telp" required>

        <input type="submit" value="Buat">
        @if (session('success'))
        <div class="alert alert-success">
            <strong>{{ session('success') }}</strong>
        </div>
        @endif
    </form>
</body> --}}

<body class="fullpage" style="height: 100%;">
    <div id="form-section" class="container-fluid signin">
        <div class="form-holder">
            <!-- <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="/register">Belum punya akun?</a></li>
                    <li><a class="sign-button" href="/register">Buat akun</a></li>
                </ul>
            </div> -->
            <div class="signin-signup-form">
                <div class="form-items card" style="margin-left: 15%; box-shadow:rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 1%;">
                    <div class="form-title">Form Register Petugas</div>
                    <form action="{{ route('regisPetugas')}}" method="post">
                        @csrf
                        <!-- <div class="row">
                            <div class="col-md-6 form-text">
                                <input type="text" name="firstname" placeholder="Nama depan" required>
                            </div>
                            <div class="col-md-6 form-text">
                                <input type="text" name="lastname" placeholder="Nama belakang" required>
                            </div>
                        </div> -->
                        <div class="form-text" style="margin-top: -10%;">
                            <label for="name" style="margin-right: 100%;">NIK</label>
                            <input type="text" id="nik" name="nik" required>
                        </div><br>
                        <div class="form-text" style="margin-top: -6%;">
                            <label for="name" style="margin-right: 100%;">Nama</label>
                            <input type="text" id="name" name="nama_lengkap" required>
                        </div>
                        <div class="form-text">
                            <label for="username" style="margin-right: 100%;">Username</label>
        <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-text">
                            <label for="password" style="margin-right: 100%;">Password</label>
        <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-text">
                            <label for="telp" style="margin-right: 100%;">Telepon</label>
        <input type="text" id="telp" name="telp" required>
                        </div>
                        <div class="form-text">
                            <label for="jenis_kelamin" style="margin-right: 100%;">Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" style="padding-right: 70%; padding-bottom: 10px; ">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                        <input type="hidden" name="role" value="petugas">
                        <div class="form-button">
                            <input type="submit" value="Register" class="ybtn ybtn-accent-color">
                        </div>
                        @if (session('success'))
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
                        </div>
                        @endif
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>