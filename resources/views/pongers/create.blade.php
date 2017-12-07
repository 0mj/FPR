@extends('layouts.app')
@section('main')

<div class="input-group">
<form action="{{route('pongers.store') }}" method="post">
	{{ csrf_field() }}

	<label for="first_name">Ponger first_name:</label>
	<input class="form-control" type="text" name="first_name">
	<br>

	<label for="last_name">Ponger last_name: </label>
	<input class="form-control" type="text" name="last_name">
	<br>

	<label for="city">Ponger city:</label>
	<input class="form-control" type="text" name="city">
	<br>

	<label for="state">Ponger state:</label>
	<input class="form-control" type="text" name="state">
	<br>

	<label for="age">Ponger age: </label>
	<input class="form-control" type="text" name="age">
	<br>

	<label for="swing_hand">Ponger swing_hand:</label>
	<input class="form-control" type="text" name="swing_hand">
	<br>

	<label for="lifetime_win">Ponger lifetime_win: </label>
	<input class="form-control" type="text" name="lifetime_win">
	<br>

	<label for="lifetime_loss">Ponger lifetime_loss:</label>
	<input class="form-control" type="text" name="lifetime_loss">
	<br>

	<button class="btn btn-danger" type="submit">Create</button>
</form>










</div>




@endsection












