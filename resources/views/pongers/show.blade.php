@extends('layouts.app')
@section('main')

<h1>{{ $ponger->first_name }}</h1>
	<ul>
		<li>Ponger first_name: {{ $ponger->first_name }}</li>
		<li>Ponger last_name: {{ $ponger->last_name }}</li>
		<li>Ponger city: {{ $ponger->city }}</li>
		<li>Ponger state: {{ $ponger->state }}</li>
		<li>Ponger age: {{ $ponger->age }}</li>
		<li>Ponger swing_hand: {{ $ponger->swing_hand }}</li>
		<li>Ponger lifetime_win: {{ $ponger->lifetime_win }}</li>
		<li>Ponger lifetime_loss: {{ $ponger->lifetime_loss }}</li>
	</ul>

@endsection 