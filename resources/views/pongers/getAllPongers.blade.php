@extends('layouts.app')
@section('main')



		@foreach($pongers as $ponger)
			<li>
				<a href="{{ route('pongers.show', $ponger) }}">
					{{ $ponger->first_name . ' ' . $ponger->last_name . ' ' . $ponger->state }}
				</a>
				<small><a href="{{ route('pongers.edit', $ponger) }}">edit</a></small>
			</li>
			 
		
		@endforeach
	

@endsection