@extends('layouts.app')
@section('main')



<ul>
	@foreach($leagues as $league)
		<li>
			<a href="{{ route('leagues.show', $league) }}">
				{{ $league->name }}
			</a>
			<small>
			 	<a href="{{ route('leagues.edit', $league)}}">edit</a>
			 </small>
		</li>
	@endforeach
</ul>

{{ $leagues->links() }}


@endsection