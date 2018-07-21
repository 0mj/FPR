<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/footer.css')}}">
     <style type="text/css">
        
        .carousel-inner > .item > img {
          width:640px;
          height:360px;
        }
      </style>
</head>
<body>
    <!-- $errors is a global variable which is a collection of errors. -->
    @if(count($errors) > 0 ) 
    <ul>
       @foreach ($errors->all() as $error)
        <li> {{ $error }}</li>
       @endforeach 

    </ul>

    @endif

    <!-- @include('partials.header') -->
    <main class="container pt-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
    </main>

    <div id="app">

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                        <!-- Branding Image -->
                     <!--    <p class="navbar-text nav-vertical-center">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </p> -->
                        <p class="navbar-text nav-vertical-center">     
                            <a class="navbar-link" href="{{ URL::to('/') }}">
                                <img src="{{asset('img/table_tennis_paddle_and_ball.png')}}" height="64" width="64">
                            </a>
                        </p>        
                        <p class="navbar-text nav-vertical-center">
                        <a class="navbar-link" href="{{ route('pongers.index') }}">PONGERS</a>
                        </p>
                        <p class="navbar-text nav-vertical-center">
                        <a class="navbar-link" href="{{ route('leagues.index') }}">LEAGUES</a>
                        </p>
                        <p class="navbar-text nav-vertical-center">
                        <a class="navbar-link" href="{{ URL::to('/test_bracket_build/form/') }}">Create a Bracket (in dev)</a>
                        </p>
                        <p class="navbar-text nav-vertical-center">
                            <a class="navbar-link" href="{{ route('brackets.index') }}">Bracket Builder</a>
                        </p>
                        <p class="navbar-text nav-vertical-center">
                            <a class="navbar-link" href="{{ URL::to('/about/') }}">aBout</a>
                        </p>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            
            
            
                
                @yield('main')
                


            
        </div>
        

        
    </div> 
    <!-- END APP DIV -->


    @include('partials.footer')
    

    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/loremPixel.js')}}"></script>
    
    
    <script>
      
      // jQuery(document).ready(function() { 
        
      //   rndm_lorempixel();
        // UNDERSTAND WHATS GOING ON HERE???
      //   //  X-CSRF-TOKEN ??.
      //   $.ajaxSetup({
      //       headers: {
      //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //       }
      //   });
      // });
    </script>
</body>
</html>
