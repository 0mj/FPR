@extends('layouts.app')
@section('main')


<div class="row">
    <div class="col-md-4">

	<ul>
		@foreach($pongers as $ponger)
			<li>
				<a href="{{ route('pongers.show', $ponger) }}">
					{{ $ponger->first_name . ' ' . $ponger->last_name . ' ' . $ponger->state }}
				</a>
				<small><a href="{{ route('pongers.edit', $ponger) }}">edit</a></small>
			</li>
		@endforeach
	</ul>

	{{ $pongers->links() }}

	</div>

	<div class="col-md-4"></div>
	<div class="col-md-4">
		
		<a href="{{route('pongers.create')}} ">Create New Ponger</a>
	</div

</div>

@endsection