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
        <nav class="navbar navbar-expand-lg navbar-dark --bs-bg-primary-bg-subtle py-3 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{('images/logo (3).png')}}" height="50" width="50" alt="Logo" class="me-2">
                    DapurKita.id
                </a>

                <div class="d-flex ms-auto">
                    <a href="{{ route('login') }}" class="btn btn-info">Login</a>
                </div>
            </div>
        </nav>

        <section id="hero" class="text-white mt-4 pt-5 pb-5" style="background-image: url('{{ ('images/bg2.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
            <div class="container text-center" style="color: #fff;">
                <div class="hero-content">
                    <h1 class='display-4 fw-bold mb-4'>Selamat Datang</h1>
                    <h2 class="display-5 mb-4">Di DapurKita.id</h2>
                    <p class="lead">"Temukan cara baru untuk menciptakan hidangan istimewa tanpa ribet! Memasak kini lebih praktis, efisien, dan tentu saja sangat lezat."</p>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
</html>
