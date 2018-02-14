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

    @include('partials.header')
    <main class="container pt-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('main')
    </main>
@include('partials.footer')
    <div id="app">
        

        
    </div>

    <!-- Scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/loremPixel.js')}}"></script>
    
    
    <script>
      
      jQuery(document).ready(function() { 
        
        rndm_lorempixel();
        
        //  X-CSRF-TOKEN ??.
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      });
    </script>
</body>
</html>
