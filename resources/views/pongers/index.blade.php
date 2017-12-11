@extends('layouts.app')
@section('main')



<ul>
	@foreach($pongers as $ponger)
		<li>
			<a href="{{ route('pongers.show', $ponger) }}">
				{{ $ponger->first_name . ' ' . $ponger->last_name . ' ' . $ponger->state }}
			</a>
		</li>
	@endforeach
</ul>

{{ $pongers->links() }}


@endsection