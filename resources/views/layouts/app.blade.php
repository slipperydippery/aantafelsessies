<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voorkom schulden samen @if (isset($title))
        - {{ $title }}
    @endif</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93563705-7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-93563705-7');
    </script>

</head>

<body class="d-flex flex-column">

    @include('partials.nav')

    <main class="flex-grow" id="app">
        @yield('content')

        <portal-target name="modals"></portal-target>

    </main>

    @hasSection('prevnext')
        <div class="container">
            @yield('prevnext')
            @include('partials.progressbar')
        </div>
    @endif

    @include('partials.instructie')

    <footer class="footer">
        <div class="container">
            <span class="">De Digitale Gesprekshulp is in opdracht van Schouders Eronder door Ecorys en EMB AV &copy; ontwikkeld. Schouders Eronder is een samenwerkingsverband tussen Divosa, Landelijke Cliëntenraad, NVVK, Sociaal Werk Nederland en VNG.</span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('additional-scripts')
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>

</body>
</html>
