<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- CSS -->
    @section('css')
      <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    @show

  </head>
  <body>

    <!-- Content -->
    @yield('content')
    
  <!-- JS -->
  @section('js')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  @show

  </body>
</html>
