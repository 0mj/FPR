@extends('layouts.app')
@section('main')


<!-- <div class="row">
    <div class="col-md-4">

	<ul>
		@foreach($pongers as $ponger)
			<li>
				<a href="{{ route('pongers.show', $ponger) }}">
					{{ $ponger->first_name . ' ' . $ponger->last_name . ' ' . $ponger->state }}
				</a>
				<small><a href="{{ route('pongers.edit', $ponger) }}">edit</a></small>
			</li>
		@endforeach
	</ul>

	{{ $pongers->links() }}

	</div>

	<div class="col-md-4"></div>
	<div class="col-md-4">
		
		<a href="{{route('pongers.create')}} ">Create New Ponger</a><br>
		
	</div>

</div> -->


    <h1 class="ml-1">PONGERS</h1>
    <div class="row justify-content-center">
        @foreach ($pongers as $ponger)
            <section class="col-md-4 pb-3">
                <div class="card">
                    <img class="card-img-top p-2" src="{{ asset('img/ponger_image_na.png') }}" height="100" width="100" />
                    <ul class="card-block list-unstyled">
                        <li class="pull-left">
                            <a href="{{ route('pongers.show', $ponger) }}">
                                {{ $ponger->first_name }}
                            </a>
                        </li>
                        <li class="pull-right">
                            <a href="{{ route('pongers.edit', $ponger) }}"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                        </li>
                        <li class="pull-right">
                            <form action="{{ route('pongers.destroy', $ponger) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button class="fa fa-trash btn-link text-danger" type="submit"></button>
                          </form>
                        </li>
                    </ul>
                </div>
            </section>
        @endforeach
        {{ $pongers->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection