@extends('layouts.app')
@section('main')


<h1>get All Pongers</h1>






<div class="row">
    <div class="col-md-4 table-responsive">
    	<!-- http://getbootstrap.com/docs/3.3/css/#tables -->
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>Name</th>
			<th>City</th>
			<th>State</th>
			<th></th>

		</tr>
		@foreach($pongers as $ponger)
			<tr>

				<td>
					<a href="{{ route('pongers.show', $ponger) }}">
						{{ $ponger->first_name . ' ' . $ponger->last_name }}
					</a>

				</td>
				
				<td>
					
					{{  $ponger->city }}
				</td>
				<td>
					
					{{  $ponger->state }}
				</td>
				<td>
					<small><a href="{{ route('pongers.edit', $ponger) }}">edit</a></small>
				</td>
			
			</tr>
		@endforeach
	</table>

	

	</div>

	<div class="col-md-4"></div>
	<div class="col-md-4">
		
		<a href="{{route('pongers.create')}} ">Create New Ponger</a><br>
		
	</div>

</div>
	

@endsection