<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Canal du Midi - @yield('titre')</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/override.css') }}" rel="stylesheet">
  </head>

  <body>
      @yield('contenu')

      <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
