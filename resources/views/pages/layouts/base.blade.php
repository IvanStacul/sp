<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Municipalidad de Presidencia Roque Sáenz Peña</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" />
  @vite(['resources/css/app.css'])
  @stack('styles')

</head>

<body>
  <header>
    @include('pages.includes.navbar')

    @yield('hero')
  </header>


  @yield('base')

  @include('pages.includes.footer')

  <script src="{{ asset('assets/js/index.js') }}" defer></script>
  @stack('scripts')
</body>

</html>
