{{--
    Chemin :/resources/views/templates/partials/_head.blade.php
    Description: Templates par default
    Données disponible: -- // --
--}}

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Script public -->
     <script src="{{asset('js/app.js') }}"></script>
    <!-- link animate -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src = {{asset('js/wow.min.js') }}> </script>
	<script src = {{ asset('js/wow.js') }}> </script>
     <!-- link public -->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <link rel="shortcut icon" type="image/png" href="favicon.ico" />
     <title>MayFoot - @yield('title')</title>
 </head>
