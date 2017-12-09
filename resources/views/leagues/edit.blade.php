@extends('layouts.app')
@section('main')

<div class="input-group">
	<form action="{{ route('pongers.update', $league) }}" method="post">
		 {{ method_field('patch') }}



		 @foreach ($pongers as $id => $ponger)
		 	<div class="form-check col-md-6">
                <label class="form-check-label" for="{{ $ponger }}">
                  <input type="checkbox" name="leagues[]" value="{{ $id }}"
                    {{ $ponger->leagues()->allRelatedIds()->contains($id) ? "checked" : "" }}>
                  {{ $ponger }}
                </label>
              </div>


		 @endforeach









	…
	</form>




</div>




@endsection












