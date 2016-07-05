@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <div class="row">

            <div class="col col_12_of_12">
                <div class="head_title"><h2>@yield('form_title')</h2></div>
            </div>

            @include("layouts/validation-error")
            <div class="col col_8_of_12">
                
                @yield('form_content')
            
            </div>
            <!-- /.panel -->
        <!-- /.col-lg-6 -->
    </div>

@endsection