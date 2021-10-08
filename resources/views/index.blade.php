@extends('layouts.app')




@section('title', 'Qmatt password')

@section('main')


<div class="row">
    <!-- Carousel -->
    <div class="col-md-7">

    </div>
    <div class="row">
        <div class="">
            <h1>qMatt</h1>
            <blockquote>PHP, Ruby, Javascript</blockquote>
            <p>Create and edit player records, associate them with a league, create / edit  leagues and create a tournament bracket.</p>
        </div>
        
    </div>

</div>

<div class="row">
    <section class="col-md-6">
        <div class="panel panel-info">
            <!-- Default panel contents -->
            <div class="panel-heading">Fullstack</div>
            <div class="panel-body">
                <ul>
                    <li>Cloud: <a href="http://heroku.com">Heroku</a></li>
                    <li>Domain: <a href="https://domains.google.com">google</a></li>
                    <li>Backend: <a href="http://php.net/manual/en/">PHP 7</a>
                    <li>Framework: <a href="https://laravel.com/docs/5.5">Laravel 5.5</a></li>
                    <li>Database: <a href="https://devcenter.heroku.com/articles/jawsdb">MySQL (JawsDB/Heroku) </a></li>
                    <li>Frontend: <a href="http://getbootstrap.com/docs/3.3"> Boostrap 3.3</a></li>
                    <li>Code: <a href="https://github.com/0mj/FPR"> GitHub</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="col-md-6">
        <div class="panel panel-info">
            <!-- Default panel contents -->
            <div class="panel-heading">What</div>
            <div class="panel-body">
                <ul>
                    <li>Create / Edit Pongers</li>
                    <li>Create / Edit Leagues</li>
                    <li>Account creation / login</li>
                    <li>Bracket builder</li>



                </ul>
            </div>
        </div>
    </section>
</div>
<div class="row">
    <section class="col-md-6">
        <!-- embed google photo code generated from https://ctrlq.org/google/photos/ -->
        <a href='https://photos.google.com/share/AF1QipOI41W20x8xnGIagp2J3nKOxwgLJlL-fbdPuqRpvgJ64O24teYnOM6mI0KINCe_dQ?key=dGVmcnl3MWVKY2JrMVgzRzUwYTdhd0JFRlhCSC1n&source=ctrlq.org'>
            <img src='https://lh3.googleusercontent.com/Cm8tKEjyZu2vrcx8S83E3Iqlvg5J_TbcMa1HZuBLHdneKGwIam7HKHMB1a9zrsHPXQMde7iDaV9rYArKWg-DYjkRg6uuXOU54LLQCauNvxo1aJ3rYg49sc6lEH5mXQqSjl19TM_mQCc=w2400' 
            width="600" height="400"
            />
        </a>
    </section>
</div>

@endsection