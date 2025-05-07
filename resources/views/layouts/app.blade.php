{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DapurKita.id</title>
    <link href="" rel="stylesheet">
</head>
<body>
    {{-- <header class="">
        <h1> Selamat Datang di DapurKita.id</h1>
    </header> --}}
    {{-- <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DapurKita.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @include('components.navbar')

    <main class="mt-5">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
