<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('corona/template/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('corona/template/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('corona/template/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('corona/template/assets/images/favicon.png')}}">
  </head>
  <body>
@yield('content')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('corona/template/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('corona/template/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('corona/template/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('corona/template/assets/js/misc.js')}}"></script>
    <script src="{{asset('corona/template/assets/js/settings.js')}}"></script>
    <script src="{{asset('corona/template/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    @include('sweetalert::alert')
  </body>
</html>