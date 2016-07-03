@extends('layouts.login')

@section('content')
    <div class="row">

        <article class="sheet--sign-in recordable--balloon" data-behavior="sign_in_notice_container">
        
            <div class="flash-notice" data-behavior="flash_notice">
                <div class="flash-notice__content">Sorry, we don’t recognize that email or username.</div>
            </div>

            <header class="push--bottom centered">
                <h3 class="flush--top push_half--bottom">Happy <time data-localized="true">Thursday</time>!</h3>

                <p class="flush">
                    Just enter your email address or username and we’ll get you right into Basecamp.
                </p>
                
            </header>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

                {!! csrf_field() !!}

                <section>

                    <div class="session-fields__attribute">
                        <label class="session-fields__label" for="login_email">Email address or username</label>
                        <input type="email" class="form-control" class="input--text u-focusable-input session-fields__email"  name="email" value="{{ old('email') }}" id="login_email" placeholder="julie@widgetco.com" required="required" autofocus="autofocus" autocapitalize="off" autocorrect="off" >
                    </div>

                    <div class="session-fields__attribute">
                        <label class="session-fields__label" for="login_password">Password</label>
                        <input type="password" class="form-control" class="input--text u-focusable-input session-fields__email"  name="password" value="{{ old('password') }}" id="login_password" required="required" autofocus="autofocus" autocapitalize="off" autocorrect="off" >
                    </div>

                    <div class="session-fields__attribute">
                        <div class="checkbox">
                            <label class="session-fields__label">
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>

                    <input type="submit" name="commit" value="Log in" id="email-sign-in" class="session-fields__button action_button primary">

                </section>

            </form>

        </article>

    </div>
@endsection
