npm@include('inc.function')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setTitle($page_name ?? 'Alanti Business')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    @livewireStyles
</head>
<body class="font-sans antialiased">
@yield('content')

@livewireScripts
<script src="{{ asset('js/dashboard.js') }}" defer></script>
</body>
</html>
