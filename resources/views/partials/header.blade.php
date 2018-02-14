
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

		<p class="navbar-text nav-vertical-center">
			<a href="{{ route('login') }}">Login</a>
		</p>
    	
    	<p class="navbar-text nav-vertical-center">
    		<a href="{{ route('register') }}">Register</a>
    	</p>

   </div>
</nav>