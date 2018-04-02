@extends('layouts.app')
@section('main')

<div class="input-group">
	<form action="{{route('brackets.store') }}" method="post">
		{{ csrf_field() }}

		<label for="tournament_name">Tournament Name:</label>
		<input class="form-control" type="text" name="tournament_name">


		<br>
		<label for="amount_of_competitors">Amount of Competitors:</label>
		<input class="form-control" type="text" name="amount_of_competitors">
<!-- 
created_by_id
amount_of_competitors
amount_of_rounds
single_elimination


$table->integer('created_by_id');
$table->string('tournament_name')->unique();
$table->integer('amount_of_competitors');
$table->integer('amount_of_rounds');
$table->string('single_elimination');
-->	

		<button class="btn btn-danger" type="submit">Create Bracket</button>
	</form>


</div>




@endsection












