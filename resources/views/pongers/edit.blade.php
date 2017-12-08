@extends('layouts.app')
@section('main')




<form action="{{ url('pongers', $ponger) }}" method="post">
	{{ csrf_field() }}
	{{ method_field('patch') }}

	<label for="first_name">Ponger First Name</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->first_name }}">

	<label for="last_name">Ponger Last Name</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->last_name }}">

	<label for="city">Ponger City</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->city }}">

	<label for="state">Ponger State</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->state }}">

	<label for="age">Ponger Age</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->age }}">

	<label for="swing_hand">Ponger Swing Hand</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->swing_hand }}">

	<label for="lifetime_win">Ponger Life time wins</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->lifetime_win }}">

	<label for="lifetime_loss">Ponger Life time Losses</label>
	<input type="text" class="form-control" name="name" value="{{ $ponger->lifetime_loss }}">

	<button type="submit" class="btn btn-primary">
	    Update
	</button>

</form>









@endsection












