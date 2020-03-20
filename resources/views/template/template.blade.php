<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RedNeeko</title>
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/5a6a0f2989.js" crossorigin="anonymous"></script>
    <script src="{{url('js/readmore.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body style="background-image: url('../img/fondo.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    width: 100%;
    height: 100%;
    ">
<nav class="navbar navbar-light bg-dark" style="position: fixed; top: 0; width: 100%; z-index: 1">
  <a class="navbar-brand" id="txtlogo">
    <span><img src="{{url('img/logo.png')}}" id="logo"></span>RedNeeko
  </a>
</nav>
    @yield('contenido')
</body>
</html>