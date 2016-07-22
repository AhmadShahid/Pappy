
<!DOCTYPE html>
<html lang="en">
    
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="pragma" content="no-cache" />
        <title>Pappy - @yield('title')</title>

        {{-- Header Assets Section --}}

        @section('headerAssets')
            <!-- Bootstrap Core CSS -->
            {!! HTML::style('assets/css/normalize.css') !!}
            {!! HTML::style('assets/css/fontawesome.css') !!}
            {!! HTML::style('assets/css/colors.css') !!}
            {!! HTML::style('assets/css/typography.css') !!}
            {!! HTML::style('assets/css/style.css') !!}
            {!! HTML::style('assets/css/style-personal.css') !!}
            {!! HTML::style('assets/css/jquery.auto-complete.css') !!}
                <!-- Responsive -->
            <link rel="stylesheet" type="text/css" media="(max-width:768px)" href="{{asset('assets/css/responsive-0.css')}}">
            <link rel="stylesheet" type="text/css" media="(min-width:769px) and (max-width:992px)" href="{{asset('assets/css/responsive-768.css')}}">
            <link rel="stylesheet" type="text/css" media="(min-width:993px) and (max-width:1200px)" href="{{asset('assets/css/responsive-992.css')}}">
            <link rel="stylesheet" type="text/css" media="(min-width:1201px)" href="{{asset('assets/css/responsive-1200.css')}}">
            <link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,300italic,400,400italic,700,700italic' rel='stylesheet' type='text/css'>
            <style type="text/css">
                .autocomplete-suggestions { border: 1px solid #999; background: #FFF; cursor: default; overflow: auto; -webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); -moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64); }
                .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
                .autocomplete-no-suggestion { padding: 2px 5px;}
                .autocomplete-selected { background: #F0F0F0; }
                .autocomplete-suggestions strong { font-weight: bold; color: #000; }
                .autocomplete-group { padding: 2px 5px; }
                .autocomplete-group strong { font-weight: bold; font-size: 16px; color: #000; display: block; border-bottom: 1px solid #000; }
   
            </style>

        @show

        {{-- Header Assets Section --}}

    </head>
    <!-- Body -->
    <body>
        <!-- Page Wrapper -->
        <div id="wrapper" class="wide">
            {{-- header --}}
            <!-- Header -->
            <header id="header" role="banner">    

                {{-- Navigation Section --}}

                @include("layouts/navigation")

                {{-- End Navigation Section --}}
                <!-- Header meta -->
                <div class="header_meta">
                    <div class="container">
                        <!-- Weather forecast -->
                        <div class="weather_forecast">
                            <i class="wi wi-day-lightning"></i>
                            <span class="city">London, England</span>
                            <span class="temp">18°C</span>
                        </div><!-- End Weather forecast -->
                        <!-- Top menu -->
                        <nav class="top_navigation" role="navigation">
                            <span class="top_navigation_toggle"><i class="fa fa-reorder"></i></span>
                            <ul class="menu">
                                <li><a href="index.html">My Info</a></li>
                                <li><a href="{{ url('/logout') }}">Sign out</a></li>
                            </ul>
                        </nav><!-- End Top menu -->
                    </div>
                </div>
                <!-- End  Header meta -->
            </header>
            <!-- End Header -->
            {{-- End header --}}

            {{-- Content Section --}}
            <!-- Section main-content -->
            <section id="main-content">
                <!-- main-content container -->
                <div class="container">

                    @yield('content')

                </div>
                 <!-- End main-content container -->
            </section>
            <!-- End Section main-content -->
            {{-- End Content Section --}}

            {{-- Footer --}}
            <!-- Footer -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <p>&copy; 2015 TrendyBlog Template. All rights reserved. <a href="" target="_blank">CodeoStudio</a></p>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
            {{-- End Footer --}}


        </div>
        <!-- End Page Wrapper -->

        {{-- Footer Assets Section --}}
         @section('footerAssets')
            {!! HTML::script('assets/js/jqueryscript.min.js') !!}
            {!! HTML::script('assets/js/jqueryuiscript.min.js') !!}
            {!! HTML::script('assets/js/easing.min.js') !!}
            {!! HTML::script('assets/js/smoothscroll.min.js') !!}
            {!! HTML::script('assets/js/magnific.min.js') !!}
            {!! HTML::script('assets/js/fitvids.min.js') !!}
            {!! HTML::script('assets/js/viewportchecker.min.js') !!}
            {!! HTML::script('assets/js/jquery.autocomplete.js') !!}
            {!! HTML::script('assets/js/init.js') !!}
         @show
        {{-- Footer Assets Section --}}
    </body>
    <!-- End Body -->
</html>
