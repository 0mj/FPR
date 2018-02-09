<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/loremPixel.js')}}"></script>
    
    
    <script>
      
      jQuery(document).ready(function() { 
        
        rndm_lorempixel();
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

      });


    </script>
  </body>
</html>