@extends('layouts.app')
@php



@endphp

@section('title', 'Friends of Pong')

@section('main')

    <div class="row">


        <div class="col-md-9">
            
            <h1>Friends of Pong</h1>
            <blockquote>Ping Pong "LEAGUES", "PONGERS", rankings and more.</blockquote>
                        
            <p>Friends of Pong is a demonstration of my full stack capabilities. This site was stood up using Heroku (AWS), Git, Laravel PHP Framework, MySQL, jQuery, and Bootstrap. Code on <a href="https://github.com/0mj/FPR">Github</a>.</p>
            <p>It is fully functional allowing users the ability to create, update, read and delete (CRUD) pongers and leagues.</p>
            <p>Within the "LEAGUES" section you can associate "PONGERS" to a league by selecting the radio box next to their name. Then select the update button at the bottom. Revisit that league again and you will see the changes saved.</p>
            <p>Give it a shot.  Add a ponger.  Then add them to a league.
            Delete them etc.. </p>

            
        </div>
         <div class="col-md-3">
            
                <button type="button" class="btn btn-info btn-lg btn-block">PONGERS</button>
                <button type="button" class="btn btn-default btn-lg btn-block">LEAGUES</button>
                

        </div>


    </div>
@endsection