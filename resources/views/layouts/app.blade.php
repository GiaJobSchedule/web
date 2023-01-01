<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Schedule | {{ $screenName }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/adminlte/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/adminlte/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
    <!-- Navbar -->
    @include('layouts.elements.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.elements.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('layouts.elements.page-header')

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        @yield('content')
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('layouts.elements.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('js/adminlte.min.js') }}"></script>

  <script src="https://use.fontawesome.com/a3c7c34c2e.js"></script>
</body>
</html>
