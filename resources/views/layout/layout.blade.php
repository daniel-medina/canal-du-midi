<!DOCTYPE html>
<html lang="fr">
      <head>
      <meta charset="utf-8">
      <title>@yield('titre')</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/override.css') }}" rel="stylesheet">
      
      <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      </head>

      <body>
      @yield('contenu')
      </body>
</html>