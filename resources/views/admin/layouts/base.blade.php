<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @stack('meta')

  <title>Admin | {{ env('APP_NAME') }} </title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}" />

  @vite(['resources/css/app.css'])

  @stack('styles')
</head>

<body>
  <div class="wrapper">
    @yield('base')
  </div>

  <!-- jQuery v3.6.0 -->
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

  <!-- jQuery UI v1.13.0 -->
  <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>

  <!-- Bootstrap v4.6.1 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- AdminLTE v3.2.0 -->
  <script src="{{ asset('admin/js/adminlte.js') }}"></script>

  @vite(['resources/js/app.js'])

  @stack('scripts')
</body>

</html>
