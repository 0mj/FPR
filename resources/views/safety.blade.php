@extends('layouts.app')



@section('title', 'Friends of Pong')

@section('main')
    
    <div class="row">
        <div class="col-md-6">
            <h1>Friends of Pong</h1>
            <blockquote>Pthis is safety</blockquote>
                        
            <p>Friends of Pong is a demonstration of my full stack capabilities. This site was stood up using Heroku (AWS), Git, Laravel PHP Framework, MySQL, jQuery, and Bootstrap. Code on <a href="https://github.com/0mj/FPR">Github</a>.</p>
            <p>It is fully functional allowing users the ability to create, update, read and delete (CRUD) pongers and leagues.</p>
            <p>Within the "LEAGUES" section you can associate "PONGERS" to a league by selecting the radio box next to their name. Then select the update button at the bottom. Revisit that league again and you will see the changes saved.</p>
            <p>Give it a shot.  Add a ponger.  Then add them to a league.
            Delete them etc.. </p>
        </div>
        <div class="col-md-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('img/pongers_icons/boyPonger.png')}}" >
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    <div class="item">
                      <img src="{{asset('img/pongers_icons/game-table-clipart-1.png')}}"    >
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="{{asset('img/pongers_icons/ping-pong-clip-art-4.png')}}" alt="..."   >
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

