@extends('layouts.app')
@section('main')

<h1>{{ $bracket->tournament_name }}</h1>
	
	<ul>
		<li> {{ $bracket->created_by_id }} </li>
		<li> {{ $bracket->tournament_name }} </li>
		<li> {{ $bracket->amount_of_competitors }} </li>
		<li> {{ $bracket->amount_of_rounds }} </li>
		<li> {{ $bracket->single_elimination }} </li>

	</ul>

<span>
	<!-- <a href="{{ route('brackets.edit', $bracket) }}" class="btn btn-primary">Edit</a> -->
</span>
@endsection 