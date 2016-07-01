
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
            {!! Html::style('assets/css/normalize.css') !!}
            {!! Html::style('assets/css/fontawesome.css') !!}
            {!! Html::style('assets/css/colors.css') !!}
            {!! Html::style('assets/css/typography.css') !!}
            {!! Html::style('assets/css/style.css') !!}
            {!! Html::style('assets/css/style-personal.css') !!}
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

                {{-- Navigation Section --}}

                @include("layouts/navigation")

                {{-- End Navigation Section --}}
                <!-- Header meta -->
                <div class="header_meta">
                    <!-- Header meta  Container -->
                    <div class="container">
                        <!-- Weather forecast -->
                        <div class="weather_forecast">
                            <i class="wi wi-day-lightning"></i>
                            <span class="city">London, England</span>
                            <span class="temp">18°C</span>
                        </div><!-- End Weather forecast -->
                    </div>
                     <!-- End Header meta  Container -->
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

        </div>
        <!-- End Page Wrapper -->

        {{-- Footer Assets Section --}}
         @section('footerAssets')
            {!! Html::script('assets/js/jqueryscript.min.js') !!}
            {!! Html::script('assets/js/jqueryuiscript.min.js') !!}
            {!! Html::script('assets/js/easing.min.js') !!}
            {!! Html::script('assets/js/smoothscroll.min.js') !!}
            {!! Html::script('assets/js/magnific.min.js') !!}
            {!! Html::script('assets/js/fitvids.min.js') !!}
            {!! Html::script('assets/js/viewportchecker.min.js') !!}
            {!! Html::script('assets/js/init.js') !!}
         @show
        {{-- Footer Assets Section --}}
    </body>
    <!-- End Body -->
</html>
