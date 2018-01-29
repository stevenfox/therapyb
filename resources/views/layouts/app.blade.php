<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hackathon') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.background')
        
                        <!-- Authentication Links -->
                        @guest
                            @yield('register')
                        @else
        <div class="row">
                <div class="col">
                    <img class="avatar" src="/img/{{ Auth::user()->avatar }}">
                    </div>
                 <div class="title-head col">
                     Good day {{ Auth::user()->username }}
                      </div>

            
                     <a id="btn-logout" class="pull-right btn col" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    Logout
                        </a></div>
                @yield('content')

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                                   
                            
                        @endguest

    
                            
    </div>
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
