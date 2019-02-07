@extends('layouts.app')
@section('title', 'Friends of Pong')
@section('main')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/flexBox.css')}}">



<div class="row">
	<div class="col">
		<form action="{{route('brackets.store') }}" method="post">
			{{ csrf_field() }}	
			Enter the amount of competitors (between 4-128): <input type="text" name="amount">
			
			<button class="btn btn-success" type="submit">Build Bracket</button>
		</form>

	</div>
</div>	
<div id="tournament">

@php
	if(isset($html)){ 
		
		
		echo $html;
		
	}
@endphp

</div>


@endsection	

