@extends('layouts.form')

@section('title', 'Projects')

@section('form_title', isset( $id ) ? 'Invite Users' : 'Invite Users'  )

@section('container_class', 'col_12_of_12' )

@section('form_content')
    <div class="row">
        @if($errors->any())
                <div class="flash-notice" data-behavior="flash_notice">
                    <div class="flash-notice__content"><span class="flash-notice__icon"></span> Make sure you’ve provided a name , email and organization for all new people.</div>
                </div>
        @endif
    </div>

    <div class="row">
        <div class="project-header txtC">
            <h1 class="flush--bottom">Who has access to this Project?</h1>
            <p class="flush--top">The people below can log in and participate fully on <strong>{{$project->title}}</strong>.</p>
        </div>
    </div>

    <div class="row">
        <div class="col col_12_of_12">
            <div class="form-group txtC">
                <label>Add people one-by-one or</label>
                <select class="w45p form-control select-org" placeholder="Choose from an organization" data-suggestion="{{$autoOrgs }}">
                    <option>Choose from an organization</option>
                    @foreach($orgs as $key => $org)
                        <option value="{{$key}}">{{$org}}</option>
                    @endforeach
                </select>
            </div>
        </div>   
    </div>

    <div class="row">
        <div class="alignleft">
            <a class="btn btn_blue cloneRow" href=""><i class="fa fa-plus"></i> Add Row</a>
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
                <input type="hidden" name="project_id" value="{{$project->id}}">
                <input type="hidden" id="remove_user" name="remove_user" value="">
                <div class="person-form-bulk person-form-bulk--fixed form-group append-to" data-role="user_rows_container">
                    @if(isset($inviteUsers) && count($inviteUsers) > 0 )
                        @foreach($inviteUsers as $key => $user)
                            <div class="person-form-bulk__person clone-html" data-role="existing_user_row" data-user-id="4781518" data-persisted="">
                                <input type="hidden" name="invite[{{$key}}][id]" id="" value="{{$user['id']}}" class="person-form__field input--text" >
                                <label class="person-form-bulk__attribute">
                                    <input type="text" readonly="readonly" name="invite[{{$key}}][name]" id="" value="{{$user['name']}}" class="person-form__field input--text" >
                                </label>

                                  <label class="person-form-bulk__attribute">
                                    <input type="email" readonly="readonly" id="" name="invite[{{$key}}][email]" value="{{$user['email']}}" class="person-form__field input--text" pattern="^\S+@\S+\.[A-Za-z0-9-]{2,23}$">
                                  </label>

                                  <label class="person-form-bulk__attribute">
                                    <input type="text" readonly="readonly" id="" value="" name="invite[{{$key}}][title]" class="person-form__field input--text" value="{{$user['designation']}}">
                                  </label>

                                  <label class="person-form-bulk__attribute person-form-bulk__attribute--company">
                                    <input type="text" readonly="readonly" id="ss" value="{{ $user['organization']['org_name'] }}" name="invite[{{$key}}][organization]" class="person-form__field person_orgs input--text" >
                                  </label>
                                  @if(auth()->user()->id != $user['id'] )
                                  <div class="person-form-bulk__attribute person-form-bulk__attribute--remove">
                                    <span class="person-form-bulk__remove-target" data-behavior="revoke_user_row">
                                        <span user-id = "{{$user['id']}}" class="emoji" style="font-size: 0.8rem;">❌</span> 
                                    </span>
                                  </div>
                                  @endif
                            </div>
                        @endforeach
                    @endif
                    <?php
                        $key = isset($inviteUsers) ? count($inviteUsers) : 0; 
                    ?>

                    <div class="person-form-bulk__person clone-html" data-role="existing_user_row" data-user-id="4781518" data-persisted="">
                        <input type="hidden"  name="invite[{{$key}}][id]" id="" value="" class="person-form__field input--text" >
                        <label class="person-form-bulk__attribute">
                            <input type="text" name="invite[{{$key}}][name]" id="" value="" class="person-form__field input--text" >
                        </label>

                          <label class="person-form-bulk__attribute">
                            <input type="email" id="" name="invite[{{$key}}][email]" value="" class="person-form__field input--text" pattern="^\S+@\S+\.[A-Za-z0-9-]{2,23}$">
                          </label>

                          <label class="person-form-bulk__attribute">
                            <input type="text" id="" value="" name="invite[{{$key}}][title]" class="person-form__field input--text">
                          </label>

                          <label  class="person-form-bulk__attribute person-form-bulk__attribute--company">
                            <input  type="text"  id="" value="" name="invite[{{$key}}][organization]" class="person-form__field  person_orgs input--text">
                          </label>

                          <div class="person-form-bulk__attribute person-form-bulk__attribute--remove">
                            <span class="person-form-bulk__remove-target" data-behavior="revoke_user_row">
                                <span class="emoji" style="font-size: 0.8rem;">❌</span> 
                            </span>
                          </div>
                    </div>
                </div>



                <div class="form-group">
                    <input type="submit" id="submit" value="Send Invitation" class="btn btn_blue btn-pad"> or 
                    <a href="{{route('projects.index')}}">Cancel</a>
                </div>
            </form>
         </div>
    </div>

@endsection

@section('footerAssets')
    @parent
    {!! HTML::script('assets/js/invite-script.js') !!}
@endsection