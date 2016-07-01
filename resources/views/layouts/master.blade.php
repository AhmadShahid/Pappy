
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

        {{-- Header Section -- }}
            <!-- Styles -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/weather.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-personal.css">
     


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

    </head>

    <body>

        <div id="wrapper">

            {{-- Navigation Section -- }}

            @include("layouts/navigation")

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">@yield('title')</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    {{-- Content Section -- }}
                     @yield('content')

                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
        
         @section('footerAssets')
            {!! Html::script('assets/js/app.js') !!}
         @show
    
    </body>

</html>
