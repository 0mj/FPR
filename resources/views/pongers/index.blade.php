@extends('layouts.app')
@section('main')




<h1 class="ml-1">Pongers Database..</h1>
   
    
    <div class="row justify-content-center">
        @foreach ($pongers as $ponger)
            @php
            $identicon = new \Identicon\Identicon();
            $imageDataUri = $identicon->getImageDataUri($ponger->id);
            @endphp

        <section class="col-md-4">
            
            <div class="panel panel-primary">
              <!-- Default panel contents -->
              <div class="panel-heading">{{ $ponger->first_name . ' ' . $ponger->last_name }}</div>
              <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('pongers.show', $ponger) }}">
                            <img class="card-img-top p-2" src="{{ $imageDataUri }}" height="150" width="150" />
                        </a>
                    </li>
                    <li class="list-group-item">{{  $ponger->city . ' ' . $ponger->state }}</li>
                    <li class="list-group-item">{{ $ponger->swing_hand . ' handed. Age: '  . $ponger->age }}</li>
                    <li class="list-group-item">Wins: {{ $ponger->lifetime_win . ' Losses: ' . $ponger->lifetime_loss }}</li>
                    <li class="list-group-item"><a href="{{ route('pongers.show', $ponger) }}"> {{ $ponger->first_name . ' ' . $ponger->last_name }} </a> Lorem ipsum dolor amet godard occupy church-key, williamsburg ugh hammock selvage vape umami af kickstarter adaptogen wayfarers actually. Neutra farm-to-table cornhole, prism 3 wolf moon typewriter occupy listicle scenester franzen iPhone chillwave gentrify live-edge. Snackwave waistcoat twee kale chips, kombucha selvage venmo distillery pinterest street art vape before they sold out flannel photo booth. Truffaut lomo banh mi bicycle rights listicle, hella fixie keytar VHS.</li>
                   

                </ul>
            </div>

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