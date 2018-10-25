<!DOCTYPE html >
<html lang="es" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Api Rest</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    @yield('CSS')

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">API Rest</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="mr-auto">
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('movies.index') }}">Movies</span></a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('movieDetails.index') }}">MovieDetails</span></a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('reviews.index') }}">Reviews</a>
            </li>
          </ul>

        
      </div>
    </nav>
    <div class="content-wrapper">
      @yield('content')

@yield('scripts')

</div>
</body>
</html>
