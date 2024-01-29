<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kasir Online</title>

  <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset("assets/dist/modules/bootstrap/css/bootstrap.min.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/dist/modules/fontawesome/css/all.min.css") }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset("assets/dist/modules/bootstrap-social/bootstrap-social.css") }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset("assets/dist/css/style.css") }}">
  <link rel="stylesheet" href="{{ asset("assets/dist/css/components.css") }}">
</head>

<body>
  <div id="app">
    @yield("content")
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset("assets/dist/modules/jquery.min.js") }}"></script>
  <script src="{{ asset("assets/dist/modules/popper.js") }}"></script>
  <script src="{{ asset("assets/dist/modules/tooltip.js") }}"></script>
  <script src="{{ asset("assets/dist/modules/bootstrap/js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("assets/dist/modules/nicescroll/jquery.nicescroll.min.js") }}"></script>
  <script src="{{ asset("assets/dist/modules/moment.min.js") }}"></script>
  <script src="{{ asset("assets/dist/js/stisla.js") }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset("assets/dist/js/scripts.js") }}"></script>
  <script src="{{ asset("assets/dist/js/custom.js") }}"></script>
</body>
</html>