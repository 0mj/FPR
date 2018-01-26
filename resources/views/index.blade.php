@extends('layouts.app')

@section('main')

    <div class="row">
        <div class="col-md-6">
            
            <h1>Friends of Pong</h1>
            <p>Ping Pong "LEAGUES", "PONGERS", rankings and more.</p>
                        
            <p>Friends of Pong is a demonstration of my full stack capabilities.
            This site was stood up using heroku (AWS), Laravel PHP Framework,
            MySQL, jQuery, and bootstrap.</p>

            <p>It is fully functional allowing users the ability to create,
            update, read and delete (CRUD) "PONGERS" and "LEAGUES".</p>

            <p>Within the "LEAGUES" section you can associate "PONGERS" to a league
            by selecting the radio box next to their name and then selecting
            update at the bottom. Revisit that league again and you will see
            the changes saved.</p>

            <p>Give it a shot.  Add a ponger.  Then add them to a league.
            Delete them etc.. </p>

            
        </div>

    </div>

@endsection