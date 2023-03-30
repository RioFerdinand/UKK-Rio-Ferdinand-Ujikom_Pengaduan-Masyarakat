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

<body class="fullpage" style="height: 100%;  background-color: #B9E9FC;">
    <div id="form-section" class="container-fluid signin">
        <div class="form-holder">
            <!-- <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="/register">Belum punya akun?</a></li>
                    <li><a class="sign-button" href="/register">Buat akun</a></li>
                </ul>
            </div> -->
            <div class="signin-signup-form">
                <div class="form-items card" style="margin-left: 2%; box-shadow:rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 1%; margin-top: 60px;">
                    <div class="form-title">Masuk Ke Akun Anda</div>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-text" style="margin-top: -10%;">
                            <input type="text" name="username" placeholder="Masukkan Username anda..." required>
                        </div>
                        <div class="form-text">
                            <input type="password" name="password" placeholder="Masukkan Password anda..." required>
                        </div>
                        <div class="regislink" style="margin-top: -1%; margin-left: -10%;">
                            <p class="link regis">Belum punya akun?<a href="/register"> Buat akun</a></p>
                        </div>
                        <div class="form-button" style="margin-top: -1%;">
                            <input type="submit" value="Login" class="ybtn ybtn-accent-color">
                        </div>
                            @if (session('fail'))
                            <div class="alert alert-danger">
                                <strong>{{ session('fail') }}</strong>
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