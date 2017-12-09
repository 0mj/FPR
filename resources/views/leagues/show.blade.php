@extends('layouts.app')
@section('main')

<h1>{{ $league->name }}</h1>
	
	<ul>
 		<li> {{ $league->name }} </li>
 		<li> {{ $league->commisioner }}</li>
	</ul>

<span>
	<a href="{{ route('leagues.edit', $league) }}" class="btn btn-primary">Edit</a>
</span>
@endsection 