@extends('layouts.app')
@section('main')




<h1 class="ml-1">PONGERS</h1>
    <div class="row justify-content-center">
        @foreach ($pongers as $ponger)
            @php
            $identicon = new \Identicon\Identicon();
            $imageDataUri = $identicon->getImageDataUri($ponger->id);
            @endphp

            <section class="col-md-4 pb-3">
                <div class="card">
                    <a href="{{ route('pongers.show', $ponger) }}">
                    	<img class="card-img-top p-2" src="{{ $imageDataUri }}" height="150" width="150" />
                    </a>
                    <ul class="card-block list-unstyled">
                        <li class="pull-left">
                            <a href="{{ route('pongers.show', $ponger) }}">
                                {{ $ponger->first_name . ' ' . $ponger->last_name }}
                            </a>
                            
                        </li>
                      
                    </ul>
                </div>
            </section>
        @endforeach
        {{ $pongers->links('vendor.pagination.bootstrap-4') }}

        
    </div>
    <div class="row justify-content-center">
		<section class="col">
			<button type="submit" class="btn ">
			<a href="{{route('pongers.create')}} ">Create New Ponger</a></button>
		</section>
	</div>
@endsection