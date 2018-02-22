@extends('layouts.app')



@section('title', 'Friends of Pong')

@section('main')
    

    <div class="row">
        <!-- Carousel -->
        <div class="col-md-7">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('img/pongers_flickr/carl_dyer_barca_spain.JPG')}}" >
                        <!-- <div id="lorempixel"></div> -->
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    <div class="item">
                      <img src="{{asset('img/pongers_flickr/dcrescenti.JPG')}}"    >
                      <!-- <div id="lorempixel2"></div> -->
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="{{asset('img/pongers_flickr/Stefan_Hillgruber_bw.JPG')}}" alt="..."   >
                        <!-- <div id="lorempixel3"></div> -->
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-5">
           
            <p>Friends of Pong..</p>
            <ul>
                <li<a href="http://php.net/manual/en/">PHP 7</a>
                    <ul>
                        <li><a href="https://getcomposer.org/">Composer</a></li>
                        <li><a href="https://laravel.com/docs/5.5">Laravel 5.5</a></li>
                    </ul>
                </li>
                <li><a href="https://devcenter.heroku.com/articles/jawsdb">MySQL (JawsDB) Database</a></li>
                <li><a href="http://getbootstrap.com/docs/3.3">Boostrap 3.3</a></li>
                <li><a href="http://heroku.com">Heroku</a></li>
                <li><a href="https://git-scm.com/">Git</a>
                    <ul>
                        <li><a href="https://github.com">GitHub</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h1>Friends of Pong</h1>
            <blockquote>"Ping Pong Tournaments and Standings."</blockquote>
                        
            <p>
                My previous experience building, maintaining and developing web applications has been private.  By private I mean behind firewalls on a company intranet.  So my pants caught fire when I got the news I was loosing my job. Potential employers want to see something! So over the past few months I began work on Friends of Pong.  
            </p>
            
            <h4><code>Friends of Pong -help</code></h4>
            <p>All my code for Friends of Pong is hosted on <a href="https://github.com/0mj/FPR">Github</a>.</p>
            
            <h3>What?</h3>
            <p>Ping Pong <a  href="{{ URL::to('/bracket') }}">Tournament Bracket</a> and standings.</p>
            
            <h3>Why?</h3>
            <p>Every year my family has a big New Years eve party.  At this party we attempt a ping pong tournament.  
                Every year I see my Uncle-in-law Herbie struggle to keep track of it all. So I thought...
                <blockquote>"Wouldn't it be nice if we could do this on someone's phone!?"</blockquote>
                So what a better way to solve this dire need than a web app all while simultaneoulsy displaying some skills.

            </p>
            <h3>How?</h3>
                    I am still in the progress of answering this question.
                    Ideally users will <a href="{{ route('register') }}">register</a> and then create their tournament bracket.
                    Allowing them to save progress as play goes on. 
             
             <h3>When?</h3>         
                <p>Now! I'm continuing work on this application.  Continuing to Learn and build along the way.</p>
            
            <!-- WHAT DO YOU HAVE SO FAR? -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                     <h3>What do you have so far?</h3> 
                        <strong>CRUD</strong> (<strong>C</strong>reate <strong>R</strong>ead <strong>U</strong>pdate <strong>D</strong>elete)<br>
                        
                        See it in action..
                        <ul>
                            <li><strong>select <a  href="{{ route('pongers.index') }}">PONGERS</a></strong></li>
                            <li>scroll to bottom and <strong>select create a new ponger button</strong> OR..</li>
                            <li><strong>select a ponger </strong> to edit</li> 
                            <li><strong>select edit button </strong> on following screen</li>
                            <li>edit or delete <strong></strong> to your preferences.</li>
                            <li><strong>select update </strong> and your done</li>
                            <li><strong>review ponger</strong> to verify changes saved</li>


                        </ul>

                        <strong>Relationships!</strong> My biggest accomplishment with this application is functioning relational data.<br>
                        See it in action..
                        <ol>
                            <li><strong>Select <a href="{{ route('leagues.index') }}">Leagues</a></strong> then <strong>Select a league</strong> to display</li>
                            <li>On following page <strong>select edit button</strong> to modify which pongers belong to that league (bracket)</li>
                            <li><strong>check or uncheck boxes</strong> of the pongers that belong to that league (bracket)
                            <li><strong>select update</strong> to modify the pongers associated with the league (bracket)</li>
                            <li>next <strong>review your changes</strong> to the league you modified verify they saved.</li>

                        </ol>

                        <strong>Registration</strong><br>
                        Registration System is up and running..


                </div>
                

            </div>
           
            <h3>What Next?</h3>
                <ul>
                    <li><strong>bracket is currently my main development focus</strong></li>
                    <li>logic to update the pongers win and loss records as tournaments are saved.</li>
                    <li>Register, login and modify their profile</li>
                    <li>Create bracket</li>
                    <li>Modify bracket </li>
                    <li>Drag and drop to advance </li>
                    <li>save changes as tournament progresses</li>
                    <li>return to tournament and continue modifying</li>
                    <li>etc..</li>
                </ul>


        </div>
        <div class="col-md-5"></div>
    </div>


@endsection

