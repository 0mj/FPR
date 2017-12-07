@extends('layouts.app')
@section('main')



<ul>
	
	@foreach($pongers as $ponger)

		<li>
			<a href="{{ route('pongers.show', $ponger) }}">    {{ $ponger->first_name }}  </a>
		</li>

	@endforeach
</ul>



@endsection