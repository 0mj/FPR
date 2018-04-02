@extends('layouts.app')
@section('main')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/flexBox.css')}}">


<ul>
	@foreach($brackets as $bracket)
		<li>
			<a href="{{ route('brackets.show', $bracket) }}">
				{{ $bracket->tournament_name }}
			</a>
			<small>
			 	<!-- <a href="{{ route('brackets.edit', $bracket)}}">edit</a> -->
			 </small>
		</li>
	@endforeach
</ul>



<!-- <button onclick="myFunction2()" class="button">BUILD BRACKET</button> -->
<button onclick="buildCompleteBracket()" class="button">buildCompleteBracket</button>



  <div class="inner"></div>


@endsection	