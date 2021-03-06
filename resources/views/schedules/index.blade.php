@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="alignright">
			<a class="btn btn_blue" href="{{route('projects.create')}}"><i class="fa fa-plus"></i> Add Project</a>
		</div>
	</div>
	<div class="row">
	    <div class="head_title"><h2>Schedules</h2></div>
	    <div class="row">
	        <div class="col col_12_of_12">
	            <table>
	                <thead>
	                    <tr>
	                        <th>Title</th>
	                        <th>Who's Responsible</th>
	                        <th>Due Date</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>

	                	@include('project.partials._show_schedules',$schedules)
	                
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
@endsection