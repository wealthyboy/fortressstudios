<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Leave these as they are -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/gif" sizes="16x16">
    @include('layouts.front.partials._seo')

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{ asset('css/bg.css') }}" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('css/colors/yellow.css') }}" type="text/css" id="colors">

    <!-- revolution slider -->
    <link rel="stylesheet" href="{{ asset('rs-plugin/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/rev-settings.css') }}" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="column">Working Hours Monday - Friday <span
                                    class="id-color"><strong>08:00-18:00</strong></span></div>
                            <div class="column">Phone <span class="id-color"><strong>{{$websiteInfo->phone}}</strong></span>
                            </div>
                            <!-- social icons -->
                            <div class="column social">
                                <a href="{{$websiteInfo->facebook_link}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$websiteInfo->x_link}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$websiteInfo->instagram}}"><i class="fa fa-instagram"></i></a>
                                <a href="{{$websiteInfo->linked_in}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$websiteInfo->contact_email}}"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-flex">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{ route('home') }}">
                                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo for {{$websiteInfo->name}}">
                                </a>
                            </div>
                            <!-- logo close -->

                            <!-- small button begin -->
                            <span id="menu-btn"></span>
                            <!-- small button close -->

                            <!-- mainmenu begin -->
                            <div class="md-flex-col">
                                <nav class="md-flex">
                                    <ul id="mainmenu">
                                        <li><a href="{{ route('home') }}">Home<span></span></a>

                                        </li>
                                        <li><a href="{{ route('about') }}">About Us</a>

                                        </li>

                                        <li><a href="{{ route('services') }}">Services</a>
                                            <ul>
                                                @foreach($services as $index => $service)
                                                <li><a href="{{ route('service.show', $service) }}">{{ $service->title }}</a></li>

                                                @endforeach
                                            </ul>
                                        </li>
                                        @if (count($films) > 0)
                                        <li><a href="{{ route('projects') }}">Projects</a>

                                        </li>
                                        @endif
                                       
                                    </ul>
                                </nav>
                                <!-- mainmenu close -->
                            </div>

                            <div class="md-flex-col col-extra">
                                <a href="{{ route('contact') }}" class="btn-on-header btn-line">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        @yield('subheader')

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div class="v-text">
                <a href="{{$websiteInfo->facebook_link}}">facebook</a>
                <a href="{{$websiteInfo->x_link}}">twitter</a>
                <a href="{{$websiteInfo->instagram}}">instagram</a>
            </div>
            @yield('content')

        </div>

        <!-- footer begin -->
        @include('layouts.front.footer')
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>
    <script src="{{ asset('js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('js/jquery.twentytwenty.js') }}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script>
        $(function() {
            // --------------------------------------------------
            // revolution slider
            // --------------------------------------------------
            var revapi;

            revapi = jQuery('#revolution-slider').revolution({
                delay: 15000,
                startwidth: 1170,
                startheight: 500,
                hideThumbs: 10,
                fullWidth: "on",
                fullScreen: "on",
                fullScreenOffsetContainer: "",
                touchenabled: "on",
                navigationType: "none",
                dottedOverlay: ""
            });
        });
    </script>

    <script>
        $(window).on("load", function() {
            $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
                default_offset_pct: 0.5
            });
            $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
                default_offset_pct: 0.5,
                orientation: 'vertical'
            });
        });
    </script>

    @yield('scripts')


</body>

</html>
