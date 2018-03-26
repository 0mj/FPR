@extends('layouts.app')
@section('main')



<ul>
	@foreach($brackets as $bracket)
		<li>
			<a href="{{ route('brackets.show', $bracket) }}">
				{{ $bracket->tournament_name }}
			</a>
			<small>
			 	<!-- <a href="{{ route('brackets.edit', $bracket)}}">edit</a> -->
			 </small>
		</li>
	@endforeach
</ul>




@endsection