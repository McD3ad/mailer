<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

{!! file_get_contents(url('images/icons.svg')) !!}

<div class="layout row collapse">
    @include('partials.navigation')

    <div id="app" class="column">

        @yield('content')

    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

@yield('scripts')

</body>
</html>
