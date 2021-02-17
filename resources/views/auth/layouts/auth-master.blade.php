<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name') }}</title>
  </head>
  <body class="bg-white">
    <div class="container">
        <div class="row align-items-center py-4" style="min-height: 100vh">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
