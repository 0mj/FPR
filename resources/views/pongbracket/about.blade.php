@extends('layouts.app')

@section('main')

    <div class="row">
        <div class="col">
            
            <h1>{{ $title }}</h1>
            <h3>Featuring..</h3>
            <ul>
	            @if(count($features) > 0 )	
	            	@foreach($features as $feature)
	            		<li>
	            			{{$feature}}
	            		</li>

	            	@endforeach
            	@endif
            </ul>
        </div>

    </div>

@endsection