<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  @yield('title')

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('client_template/libs/alert/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Vietnamese.json">

  <link rel="stylesheet" href="{{ asset('admin_template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_template/plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_template/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_template/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('publics.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('publics.sidebar')
    <!-- Content Wrapper. Contains page content -->

    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('publics.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('admin_template/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin_template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin_template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin_template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('admin_template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('admin_template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin_template/dist/js/adminlte.min.js') }}"></script>
  <script src="{{ asset('admin_template/plugins/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('admin_template/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('client_template/libs/alert/toastr.min.js') }}"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        language: {
          url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Vietnamese.json'
        },
        "ordering": false
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
    $(function() {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
</body>

</html>