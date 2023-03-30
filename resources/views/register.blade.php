<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>AduhMas!</title>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/bootstrap-slider.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/css/custom.css">
</head>

<body class="fullpage" style="height: 100%; background-color: #B9E9FC;">
    <div id="form-section" class="container-fluid signin">
        <div class="form-holder">
            <!-- <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="/register">Belum punya akun?</a></li>
                    <li><a class="sign-button" href="/register">Buat akun</a></li>
                </ul>
            </div> -->
            <div class="signin-signup-form">
                <div class="form-items card" style="margin-left: 2%; box-shadow:rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 1%;">
                    <div class="form-title">Buat Akun Pengamas Anda</div>
                    <form action="/register" method="post">
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
                            <input type="text" name="nik" placeholder="NIK" required>
                        </div>
                        <div class="form-text">
                            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-text">
                            <input type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-text">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-text">
                            <select id="jenis_kelamin" name="jenis_kelamin" style="padding-right: 70%; padding-bottom: 10px;">
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                        <input type="hidden" name="role" value="masyarakat">
                        <!-- <div class="form-text">
                            <input type="radio" name="jenis_kelamin" value="Laki-laki" required>
                            <input type="radio" name="jenis_kelamin" value="Perempuan" required>
                        </div> -->
                        <div class="regislink" style="margin-top: -2%; margin-left: -10%;">
                            <p class="link regis">Sudah punya akun?<a href="/login"> Masuk</a></p>
                        </div>
                        <div class="form-button" style="margin-top: -1%;">
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

</html>