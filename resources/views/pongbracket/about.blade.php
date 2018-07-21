@extends('layouts.app')

@section('main')

    <div class="row">
        <div class="col">
            
            <h1>{{ $title }}</h1>
            
            <ul class="list-unstyled">
	            @if(count($features) > 0 )	
	            	@foreach($features as $feature)
	            		<li>
	            			{{$feature}}
	            		</li>

	            	@endforeach
            	@endif
            </ul>
        </div>
    
        <div class="col">
            <img src="{{asset('img/ponger_cats.gif')}}">
        </div>

    </div>

@endsection