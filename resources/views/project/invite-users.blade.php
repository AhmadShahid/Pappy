@extends('layouts.form')

@section('title', 'Projects')

@section('form_title', isset( $id ) ? 'Edit Project' : 'Add Project'  )

@section('container_class', 'col_12_of_12' )

@section('form_content')
    <div class="row">
        <div class="project-header txtC">
            <h1 class="flush--bottom">Who has access to this Project?</h1>
            <p class="flush--top">The people below can log in and participate fully on <strong>Project Description</strong>.</p>
        </div>
    </div>

    <div class="row">
        <div class="col col_12_of_12">
            <div class="form-group txtC">
                <label>Add people one-by-one or</label>
                <select class="w45p form-control" placeholder="Choose from an organization">
                    <option>Choose from an organization</option>
                </select>
            </div>
        </div>   
    </div>
    <div class="row">
         <div class="col col_12_of_12">
            <div class="person-form-bulk__sticky-header">
                <div class="person-form-bulk person-form-bulk--fixed">
                    <div class="person-form-bulk__header ">
                        <div class="person-form-bulk__label">Name</div>
                        <div class="person-form-bulk__label">Email</div>
                        <div class="person-form-bulk__label">Job title <span class="person-form__optional">optional<span></span></span></div>
                        <div class="person-form-bulk__label">Organization <span class="person-form__optional">optional<span></span></span></div>
                        <div class="person-form-bulk__label person-form-bulk__label--remove"></div>
                    </div>
                </div>
            </div> 
                      
            {!! Form::open(array('files' => true, 'route' => 'invitation_send')) !!}

                <div class="person-form-bulk person-form-bulk--fixed form-group" data-role="user_rows_container">
                    <div class="person-form-bulk__person" data-role="existing_user_row" data-user-id="4781518" data-persisted="">
                        <label class="person-form-bulk__attribute">
                            <div class="person-form-bulk__label">Name</div>
                            <input type="text" name="invite[name]" id="" value="" class="person-form__field input--text" >
                        </label>

                          <label class="person-form-bulk__attribute">
                            <div class="person-form-bulk__label">Email</div>
                            <input type="email" id="" name="invite[email]" value="" class="person-form__field input--text" pattern="^\S+@\S+\.[A-Za-z0-9-]{2,23}$">
                          </label>

                          <label class="person-form-bulk__attribute">
                            <div class="person-form-bulk__label">Job title</div>
                            <input type="text" id="" value="" name="invite[title]" class="person-form__field input--text">
                          </label>

                          <label class="person-form-bulk__attribute person-form-bulk__attribute--company">
                            <div class="person-form-bulk__label">Organization</div>
                            <input type="text" id="" value="" name="invite[organization]" class="person-form__field input--text">
                          </label>

                          <div class="person-form-bulk__attribute person-form-bulk__attribute--remove">
                          </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" id="submit" value="Create this Project" class="btn btn_blue btn-pad"> or 
                    <a href="{{route('projects.index')}}">Cancel</a>
                </div>
            </form>
         </div>
    </div>

@endsection