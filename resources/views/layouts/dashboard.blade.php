<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('admin/img/logo.jpg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/magnific-popup.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/tailwind.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom.css') }}">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Coder Dairy</title>
  <!-- ckeditor  script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    @yield('style')
</head>
<body class="bg-gray-100">

@include('admin.components.navigation')



<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">

   @include('admin.components.sidebar')

  <!-- strat content -->
  <div class="bg-gray-100 flex-1 p-6 md:mt-16">
    @include('layouts.messages')
    @yield('content')

  </div>
  <!-- end content -->

</div>
<!-- end wrapper -->

<!-- script -->
{{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
<script src="{{ asset('admin/js/jquery.magnific-popup.min.js') }}"></script>
{{-- frondend --}}
<script src="{{ asset('admin/js/wow.min.js') }}"></script>
<script src="{{ asset('admin/js/main.js') }}"></script>
{{-- end frontend --}}
<script src="{{ asset('admin/js/customscripts.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<!-- end script -->
@yield('scripts')

</body>
</html>
