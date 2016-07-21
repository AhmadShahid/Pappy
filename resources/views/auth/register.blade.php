@extends('layouts.login')

@section('content')
    <div class="row">
            <article class="sheet--sign-in recordable--balloon" data-behavior="sign_in_notice_container">
            
            @if($errors->any())
                <div class="flash-notice" data-behavior="flash_notice">
                    <div class="flash-notice__content">Sorry, we don’t recognize that email or username.</div>
                </div>
            @endif

            <header class="push--bottom centered">
                <h3 class="flush--top push_half--bottom">Happy <time data-localized="true"> {!! date('l') !!}</time>!</h3>

                <p class="flush">
                    Join BinaryBrains on Basecamp 3
                </p>
                
            </header>

            {!! Form::model($user,array('method'=>'post','url' => '/register')) !!}

                {!! csrf_field() !!}
                <input type="hidden" name="id" value="{{$user->id}}">
                <section>

                    <div class="session-fields__attribute">
                        <label class="session-fields__label" for="login_name">Name</label>
                        {{ Form::text('name', null, array('class' => 'input--text u-focusable-input session-fields__email')) }}

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="session-fields__attribute">
                        <label class="session-fields__label" for="login_email">Email address or username</label>
                        {{ Form::text('email', null, array('class' => 'form-control')) }}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="session-fields__attribute">
                        <label class="session-fields__label" for="login_password">Password</label>
                        <input type="password" class="form-control" class="input--text u-focusable-input session-fields__email"  name="password" value="{{ old('password') }}" id="login_password" required="required" autofocus="autofocus" autocapitalize="off" autocorrect="off" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <div class="session-fields__attribute">
                        <label class="session-fields__label" for="login_password">Confirm Password</label>
                        <input type="password" class="form-control" class="input--text u-focusable-input session-fields__email"  name="password_confirmation" value="{{ old('password_confirmation') }}" id="login_password" required="required" autofocus="autofocus" autocapitalize="off" autocorrect="off" >
                        

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                    </div>


                    <input type="submit" name="commit" value="Ok,let's go" id="email-sign-in" class="session-fields__button action_button primary">

                </section>

            </form>

        </article>
    </div>
@endsection
