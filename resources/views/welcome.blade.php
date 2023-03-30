<title>Pengamas Racoon City</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">
<style>
    .btn {
    padding: 18px 34px;
    font-size: 18px;
    font-weight: 700;
    display: inline-block;
    margin-right: 24px;
    margin-bottom: 24px;
    color: #fff;
    background-color: #6b64ec;
    border-color: black;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    line-height: 1.5;
    border-radius: 0.25;
    }
</style>

<body>
    <main class="contents" style="background-image: url({{ asset('foto/racooncity.jpg') }}); background-position: center; background-repeat: no-repeat; background-size: cover; background-color: #B9E9FC;">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.7); margin-top: 23%;">
                    <div class="card-body">
                        <h1 class="card-title">Selamat Datang di Pengaduan Masyarakat Racoon City!</h1>
                        <p class="card-text">Website dimana anda bisa melaporkan semua peristiwa diluar nalar.</p>
                        <a class="btn btn-primary" href="/login" class="btn">Masuk</a>
                        <a class="btn btn-primary" href="/register" class="btn">Registrasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <img src="{{ asset('foto/leon.png')}}" style="height: auto; width:650px; object-fit: cover;">
            </div>
        </div>
    </main>
</body>
</html>