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
                <!-- Responsive -->
            <link rel="stylesheet" type="text/css" media="(max-width:768px)" href="{{asset('assets/css/responsive-0.css')}}">
            <link rel="stylesheet" type="text/css" media="(min-width:769px) and (max-width:992px)" href="{{asset('assets/css/responsive-768.css')}}">
            <link rel="stylesheet" type="text/css" media="(min-width:993px) and (max-width:1200px)" href="{{asset('assets/css/responsive-992.css')}}">
            <link rel="stylesheet" type="text/css" media="(min-width:1201px)" href="{{asset('assets/css/responsive-1200.css')}}">
            <link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,300italic,400,400italic,700,700italic' rel='stylesheet' type='text/css'>

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
                    </div>
                </div>
                <!-- End  Header meta -->
            </header>
            <!-- End Header -->
            {{-- End header --}}

            {{-- Content Section --}}
            <!-- Section main-content -->
            <section id="login-content">
                <!-- main-content container -->
                <div class="login-container">

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
         @show
        {{-- Footer Assets Section --}}
    </body>
    <!-- End Body -->
</html>
