@extends('layouts.app')
@section('main')



<ul>
	@foreach($leagues as $league)
		<li>
			<a href="{{ route('leagues.show', $league) }}">
				{{ $league->name }}
			</a>
		</li>
	@endforeach
</ul>

{{ $leagues->links() }}


@endsection