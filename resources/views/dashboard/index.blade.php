@extends('layouts.master')

@section('content')
@if ( \Session::has('message') )
<div class="row">
    <div class="flash-notice success" data-behavior="flash_notice">
        <div class="flash-notice__content"><span class="flash-notice__icon"></span> 
            {{ \Session::get('message') }}
        </div>
    </div>
</div>
@endif

    <div class="dashboard-container">
        <div class="row">
            <section class="content-header">
                <h1>
                    Dashboard
                </h1>
            </section>
        </div>
        <div class="row">
           <div class="col col_6_of_12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Schedule</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                        <tr>
                                            <th>2014</th>
                                            <th>Chrome</th>
                                            <th>Safari</th>
                                            <th>Opera</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>November</td>
                                            <td>60.1 %</td>
                                            <td>3.7 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>October</td>
                                            <td>60.4 %</td>
                                            <td>3.9 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>September</td>
                                            <td>59.6 %</td>
                                            <td>3.6 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>August</td>
                                            <td>24.7 %</td>
                                            <td>3.7 %</td>
                                            <td>1.8 %</td>
                                        </tr>
                                        <tr>
                                            <td>July</td>
                                            <td>59.8 %</td>
                                            <td>3.5 %</td>
                                            <td>1.7 %</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix" style="display: block;">
                      <a href="javascript:void(0)" class="btn btn_blue pull-left">Place New To do</a>
                      <a href="javascript:void(0)" class="btn btn_grey pull-right">View All To do</a>
                    </div>
                     <!-- /.box-footer -->
                </div>
           </div>
           <div class="col col_6_of_12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest To do</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                        <tr>
                                            <th>2014</th>
                                            <th>Chrome</th>
                                            <th>Safari</th>
                                            <th>Opera</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>November</td>
                                            <td>60.1 %</td>
                                            <td>3.7 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>October</td>
                                            <td>60.4 %</td>
                                            <td>3.9 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>September</td>
                                            <td>59.6 %</td>
                                            <td>3.6 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>August</td>
                                            <td>24.7 %</td>
                                            <td>3.7 %</td>
                                            <td>1.8 %</td>
                                        </tr>
                                        <tr>
                                            <td>July</td>
                                            <td>59.8 %</td>
                                            <td>3.5 %</td>
                                            <td>1.7 %</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix" style="display: block;">
                      <a href="javascript:void(0)" class="btn btn_blue pull-left">Place New Schedule</a>
                      <a href="javascript:void(0)" class="btn btn_grey pull-right">View All Schedule</a>
                    </div>
                     <!-- /.box-footer -->
                </div>
           </div>
           <div class="col col_6_of_12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest To do</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                        <tr>
                                            <th>2014</th>
                                            <th>Chrome</th>
                                            <th>Safari</th>
                                            <th>Opera</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>November</td>
                                            <td>60.1 %</td>
                                            <td>3.7 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>October</td>
                                            <td>60.4 %</td>
                                            <td>3.9 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>September</td>
                                            <td>59.6 %</td>
                                            <td>3.6 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>August</td>
                                            <td>24.7 %</td>
                                            <td>3.7 %</td>
                                            <td>1.8 %</td>
                                        </tr>
                                        <tr>
                                            <td>July</td>
                                            <td>59.8 %</td>
                                            <td>3.5 %</td>
                                            <td>1.7 %</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix" style="display: block;">
                      <a href="javascript:void(0)" class="btn btn_blue pull-left">Place New Schedule</a>
                      <a href="javascript:void(0)" class="btn btn_grey pull-right">View All Schedule</a>
                    </div>
                     <!-- /.box-footer -->
                </div>
           </div>
           <div class="col col_6_of_12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest To do</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: block;">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                        <tr>
                                            <th>2014</th>
                                            <th>Chrome</th>
                                            <th>Safari</th>
                                            <th>Opera</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>November</td>
                                            <td>60.1 %</td>
                                            <td>3.7 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>October</td>
                                            <td>60.4 %</td>
                                            <td>3.9 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>September</td>
                                            <td>59.6 %</td>
                                            <td>3.6 %</td>
                                            <td>1.6 %</td>
                                        </tr>
                                        <tr>
                                            <td>August</td>
                                            <td>24.7 %</td>
                                            <td>3.7 %</td>
                                            <td>1.8 %</td>
                                        </tr>
                                        <tr>
                                            <td>July</td>
                                            <td>59.8 %</td>
                                            <td>3.5 %</td>
                                            <td>1.7 %</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix" style="display: block;">
                      <a href="javascript:void(0)" class="btn btn_blue pull-left">Place New Schedule</a>
                      <a href="javascript:void(0)" class="btn btn_grey pull-right">View All Schedule</a>
                    </div>
                     <!-- /.box-footer -->
                </div>
           </div>
        </div>
    </div>
@endsection