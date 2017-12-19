@extends('layouts.app')
@section('main')

<div class="input-group">
	
	<h1>{{ $league->name}}</h1>
	<p>Update the players that belong to {{ $league->name}} league.</p>
	<form action="{{ url('leagues', $league) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('patch') }}
		
		@foreach ($pongers as  $ponger)
		 	<div class="form-check col-md-6">
                <label class="form-check-label" for="{{ $ponger }}">
                  <input type="checkbox" name="pongers[]" value="{{ $ponger->id }}"
                    {{ $league->pongers()->allRelatedIds()->contains($ponger->id) ? "checked" : "" }}>
                  {{ $ponger->first_name . ' ' . $ponger->last_name }}
                </label>
              </div>
		 @endforeach

		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>




@endsection












