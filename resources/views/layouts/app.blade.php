<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voorkom schulden samen</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="d-flex flex-column">
    
    @include('partials.nav')

    <main class="flex-grow" id="app">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <span class="">De Aan Tafel Sessies zijn ontwikkeld in opdracht van Schouders, een samenwerkingsverband tussen Divosa, Landelijke Cliëntenraad, NVVK, Sociaal Werk Nederland en VNG. Concept programmering en uitvoering door EMB AV &copy; </span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
