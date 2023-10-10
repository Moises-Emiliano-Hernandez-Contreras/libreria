<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    {{-- <link rel="stylesheet" href="./css/main.css"> --}}
    <link rel="stylesheet" href="{!! asset('/css/main.css')!!}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    @include('layouts/sidebar')
    <p>@yield("contenido")</p>


    <script src="{!! asset('./js/jquery-3.1.1.min.js')!!}"></script>
    <script src="{!! asset('./js/sweetalert2.min.js')!!}"></script>
    <script src="{!! asset('./js/bootstrap.min.js')!!}"></script>
    <script src="{!! asset('./js/material.min.js')!!}"></script>
    <script src="{!! asset('./js/ripples.min.js')!!}"></script>
    <script src="{!! asset('./js/jquery.mCustomScrollbar.concat.min.js')!!}"></script>
    <script src="{!! asset('./js/main.js')!!}"></script>
    <script>
      $.material.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>