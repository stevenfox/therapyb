<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hackathon</title>

        <!-- Style -->
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        @include('inc.background')
        <div class="container">
                <div class="title-head">
                    Hackathon
                </div>
            @if (Route::has('login'))
                    @auth
                      <script type="text/javascript">
                        window.location = "{{ url('/home') }}";
                    </script>>
                    @else
                    <form class="form-horizontal form-main" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                        <div class="col-md-4 offset-md-4 form-group text-white{{ $errors->has('username') ? ' has-error' : '' }}">

                                <input id="username" type="username" class="formfields" name="username" placeholder="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-4 offset-md-4{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="formfields" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                        <div class="row">
                        <div class="form-group col-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>

                        <div class="form-group col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-forms">
                                    Login
                                </button>

                                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                
              
                    
                    
                    
            <div id="footer-signup">
                    <p class="text-white">New to the hackathon? &nbsp;</p>
                    <a class="text-link" href="{{ route('register')}}">Sign Up</a>
                    </div> 
                    @endauth
            @endif
        </div> 
    </body>
</html>
