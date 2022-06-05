<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAW | Dashboard</title>

 @include('layouts.core.stylesheet')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    {{-- @include('sweetalert::alert') --}}
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('') }}asset/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

@include('layouts.partials.navbar')

   @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('layouts.header')

    <!-- Main content -->
   <section class="content">
       @yield('container')

   </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

@include('layouts.core.script')
</body>
</html>
