<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="unknow-teams" />
    <meta name="description" content="Marthe & Marie | vente et Location de livres" />
    <meta name="keywords" content="telephonie,tablettes,accessoires,montres,tv,audio," />
    <meta name="robots" content="INDEX,FOLLOW" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', "akylium | plateforme de main-d'œuvre éthique à la demande pour vos projets digitaux.")</title>

    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('images/favicon/site.webmanifest')}}">
  <!-- Scripts --> --}}
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- StyleSheet -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('packages/noty/noty.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/noty_theme.css') }}">

    @yield('extra-css')

</head>
<style>
    body {
        font-family: sp;
        font-size: 18px;
    }

    @font-face {
        font-family: "sp";
        src: url("fonts/TenorSans-Regular.ttf") format("truetype");
    }
</style>

<body>


    <div class="site-wrapper cover blur-in" id="top">
        @include('layouts.partial.header')

        @yield('content')

    </div>
    <hr>
   
    @include('layouts.partial.footer')
   



    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="js/ajax-mail.js"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('library/tiny-slider/tiny-slider.js') }}"></script>
    <script src="js/isotope.min.js"></script>
    <script>
        // Isotope filter
        $(window).on('load', function() {
            var $container = $('.isotope-wrapper');
            $container.isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'masonry'
            });
        });
        $('.isotope_filter').on('click', 'a', 'change', function() {
            var selector = $(this).attr('data-filter');
            $('.isotope-wrapper').isotope({
                filter: selector
            });
        });
    </script>
    {{-- Bootstrap Notifications using Prologue Alerts & PNotify JS --}}
    <script src="{{ asset('packages/noty/noty.js') }}"></script>

    @if (Session::has('alerte'))
        <script type="text/javascript">
            Noty.overrideDefaults({
                layout: 'topRight',
                theme: 'backstrap',
                timeout: 2500,
                closeWith: ['click', 'button'],
            });

            new Noty({
                type: "{{ Session::get('type') }}",
                text: "{!! str_replace('"', "'", Session::get('alerte')) !!}"
            }).show();
        </script>
    @endif

    @yield('extra-js')

</body>

</html>
