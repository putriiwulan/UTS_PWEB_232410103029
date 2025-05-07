{{-- @extends('layouts.layout')

@section('content') <section style="margin-top: 100px"> <div class="container py-5"> <h3 class="fw-bold mb-3">Halaman Dashboard</h3> </div> </section>
@endsection --}}

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DapurKita.id</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ ('assets/css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-bg-subtle py-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo (3).png') }}" height="50" width="50" alt="Logo" class="me-2">
                DapurKita.id
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('pengelolaan')}}">Pengelolaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('profile')}}">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

      <section id="hero" class="bg-beige text-white mt-4 pt-3 pb-2">
        <div class="container text-center text-dark">
            <div class="hero-content">
                <h1 class='display-4 fw-bold mb-4'>Selamat Datang Putri</h1>
                <h2 class="display-5 mb-4">Di DapurKita.id</h2>
                <p class="lead">Memasak jadi lebih mudah!</p>
            </div>
        </div>
      </section>

      <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Temukan Resep Populer</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/soto.jpeg')}}" class="card-img-top" alt="Resep Soto Ayam">
                        <div class="card-body">
                            <h5 class="card-title">Soto Ayam Special</h5>
                            <p class="card-text">Resep Soto Ayam Special Khas Lamongan</p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/rendang.jpeg')}}" class="card-img-top" alt="Resep Rendang">
                        <div class="card-body">
                            <h5 class="card-title">Rendang Daging</h5>
                            <p class="card-text">Resep Rendang Daging Asli Sumatra Barat</p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/sate padang.jpeg')}}" class="card-img-top" alt="Resep Sate Padang">
                        <div class="card-body">
                            <h5 class="card-title">Sate Padang</h5>
                            <p class="card-text">Resep Sate Padang Sederhana, Gurih, dan Nikmat. </p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/bolu kemojo.jpeg')}}" class="card-img-top" alt="Resep Bolu Kemojo">
                        <div class="card-body">
                            <h5 class="card-title">Bolu Kemojo</h5>
                            <p class="card-text">Resep Bolu Kemojo Pandan Khas Riau</p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/bakso.jpeg')}}" class="card-img-top" alt="Resep Bakso Sapi">
                        <div class="card-body">
                            <h5 class="card-title">Bakso Sapi</h5>
                            <p class="card-text">Resep Bakso Sapi yang Kuahnya Segar, Gurih, dan Bikin Nagih</p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/ayam betutu.jpeg')}}" class="card-img-top" alt="Resep Ayam Betutu">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Betutu</h5>
                            <p class="card-text">Resep Ayam Betutu Bali ala Rumahan</p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/rawon.jpeg')}}" class="card-img-top" alt="Resep Rawon">
                        <div class="card-body">
                            <h5 class="card-title">Rawon</h5>
                            <p class="card-text">Resep Rawon Daging Khas Jawa Timur ala Rumahan</p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card recipe-card">
                        <img src="{{('images/pempek.jpeg')}}" class="card-img-top" alt="Resep Pempek Palembang">
                        <div class="card-body">
                            <h5 class="card-title">Pempek Palembang</h5>
                            <p class="card-text">Resep Pempek Ikan Tenggiri dengan Kuah Cuko</p>
                            <a href="#" class="btn btn-primary">Lihat Resep Lengkap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
