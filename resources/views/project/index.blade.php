@extends('layouts.master')

@section('content')
	<div class="row">
		<a class="btn btn_blue alignright" href="{{route('projects.create')}}"><i class="fa fa-plus"></i> Add Project</a>
	</div>
	<div class="row">
	    <div class="head_title"><h2>Projects</h2></div>
	    <div class="row">
	        <div class="col col_12_of_12">
	            <table>
	                <thead>
	                    <tr>
	                        <th>Title</th>
	                        <th>Description</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>

	                	@include('project.partials._show_projects',$projects)
	                
	                </tbody>
	            </table>
	        </div>
	    </div>
    </div>
@endsection