<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Diamond') }}</title>     

     
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    
    
</head>
<body>
    <div class="">
        <div id="preloder">
            <div class="loader"></div>
        </div>
        @yield('content')
    </div>
   
    @livewireScripts

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('js/jplayer.playlist.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/audioInit-1.js') }}"></script>
    <script src="{{ asset('js/videoInit.js') }}"></script>
</body>
</html>
