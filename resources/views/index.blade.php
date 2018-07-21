@extends('layouts.app')



@section('title', 'Friends of Pong')

@section('main')
    

    <div class="row">
        <!-- Carousel -->
        <div class="col-md-7">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000" keyboard="true">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('img/pongers_flickr/carl_dyer_barca_spain.JPG')}}" class="img-reponsive" >
                        <!-- <div id="lorempixel"></div> -->
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    <div class="item">
                      <img src="{{asset('img/pongers_flickr/dcrescenti.JPG')}}"   class="img-reponsive" >
                      <!-- <div id="lorempixel2"></div> -->
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="{{asset('img/pongers_flickr/Stefan_Hillgruber_bw.JPG')}}" alt="..." class="img-reponsive"  >
                        <!-- <div id="lorempixel3"></div> -->
                        <div class="carousel-caption">

                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-5">
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h1>Friends of Pong</h1>
            <blockquote>"Ping Pong Tournaments and Standings."</blockquote>
                        
            <p>
                The links above show leagues and associated pongers.  The bracket link allows you to create your own tournament bracket. 
            </p>
            
            
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                     

                </div>
                

            </div>
           
            

        </div>
        <div class="col-md-5"></div>
    </div>


@endsection

