





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - bab_connercter</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/favicon.png') }}">
  <link href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
   <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />

  <!-- Template Main CSS File -->
   <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
  <!-- Vendor CSS Files -->
  <link href="{{ asset('backend/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/assets/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/assets/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/assets/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/assets/remixicon/remixicon.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/assets/simple-datatables/style.css') }}" rel="stylesheet" type="text/css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css') }}" rel="stylesheet" type="text/css" />
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('layouts.header')
  <!-- ======= end Header ======= -->


  <!-- ======= Sidebar ======= -->
  @include('layouts.sidebar')
  <!-- ======= end Sidebar ======= -->

  <main id="main" class="main">


  @yield('content')

  </main>
<!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- ======= end Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
<script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('backend/assets/simple-datatables/simple-datatables.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('backend/assets/js/main.js') }}"></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('backend/assets/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('backend/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/assets/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('backend/assets/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('backend/assets/quill/quill.min.js') }}"></script>
  <script src="{{ asset('backend/assets/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('backend/assets/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('backend/assets/php-email-form/validate.js') }}"></script>




</body>

</html>