<style type="css">
  
p.nav-vertical-center {
    display: table-cell;
    vertical-align: middle;
    padding: 10px;
}

</style>
<nav class="navbar navbar-default navbar-static-top">
  
  <div class="container">
		


		<p class="navbar-text nav-vertical-center">
			<a class="navbar-link" href="{{ URL::to('/') }}">
				<img src="{{asset('img/table_tennis_paddle_and_ball.png')}}" height="64" width="64">
			</a>
		</p>

		<p class="navbar-text nav-vertical-center">
			<a class="navbar-link" href="{{ route('pongers.index') }}">PONGERS</a>
		</p>
		<p class="navbar-text nav-vertical-center">
        	<a class="navbar-link" href="{{ route('leagues.index') }}">LEAGUES</a>
		</p>
      
		<p class="navbar-text nav-vertical-center">
        	<a class="navbar-link" href="{{ URL::to('/bracket') }}">BRACKET</a>
		</p>


   </div>
</nav>


<!--  FROM 
		GETBOOTSTRAP.COM VERSION 33
	view-source:http://getbootstrap.com/docs/3.3/examples/starter-template/ -->
<!--  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      <!-- </div>
    </nav> --> 