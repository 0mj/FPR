@extends('layouts.app')
@section('main')


<form action="{{route('pongers.store') }}" method="post">
	{{ csrf_field() }}

	<label for="first_name">Ponger first_name:</label>
	<input type="text" name="first_name">
	<br>

	<label for="last_name">Ponger last_name: </label>
	<input type="text" name="last_name">
	<br>

	<label for="city">Ponger city:</label>
	<input type="text" name="city">
	<br>

	<label for="state">Ponger state:</label>
	<input type="text" name="state">
	<br>

	<label for="age">Ponger age: </label>
	<input type="text" name="age">
	<br>

	<label for="swing_hand">Ponger swing_hand:</label>
	<input type="text" name="swing_hand">
	<br>

	<label for="lifetime_win">Ponger lifetime_win: </label>
	<input type="text" name="lifetime_win">
	<br>

	<label for="lifetime_loss">Ponger lifetime_loss:</label>
	<input type="text" name="lifetime_loss">
	<br>

	<button type="submit">Create</button>
</form>
@endsection












