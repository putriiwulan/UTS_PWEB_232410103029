{{-- {{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", 'Custom Auth Laravel')</title>
    <link href="" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <body>
    @yield('content')
    <script src="" ></script>
  </body>
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>
