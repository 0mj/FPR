@extends('layouts.app')
@section('main')



<section class="col-md-5">
	<form action="{{ url('brackets', $bracket) }}" method="post">
		
		{{ csrf_field() }}
		{{ method_field('patch') }}

		<label for="tournament_name">Tournament Name</label>
		<input type="text" class="form-control" name="tournament_name" value="{{ $bracket->tournament_name }}">

		

		<button type="submit" class="btn btn-primary">
		    Update
		</button>

	</form>
</section>




@endsection












