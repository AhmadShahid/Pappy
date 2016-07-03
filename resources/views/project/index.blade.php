@extends('layouts.master')

@section('content')
	<div class="row">
	    <div class="head_title"><h2>Projects</h2></div>
	    <div class="row">
	        <div class="col col_12_of_12">
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

	                	@include('project.partials._show_projects')
	                
	                </tbody>
	            </table>
	        </div>
    </div>
@endsection