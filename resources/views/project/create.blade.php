@extends('layouts.form')

@section('title', 'Projects')

@section('form_title', isset( $id ) ? 'Edit Project' : 'Add Project'  )

@section('form_content')
    @if( isset ( $id ) )
        {!! Form::model($project,array('method'=>'put' ,'route' => array('projects.update',$id))) !!}
    @else
        {!! Form::model($project,array('method'=>'post','route' => 'projects.store')) !!}
    @endif
        <div class="form-group">
            <label><strong>First give the Project a name</strong> ( e.g. "Things for the meeting" )</label>
            {!! Form::text('title') !!}
            
        </div>

        
        <div class="form-group">
            <label>List description or notes about this Project</label>
            {!! Form::textarea('description') !!}
        </div>

        <div class="form-group">
            <input name="submit" type="submit" id="submit" value="Create this Project" class="btn btn_blue btn-pad"> or 
            <a href="{{route('projects.index')}}">Cancel</a>
        </div>
    </form>
@endsection