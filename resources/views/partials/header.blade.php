<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
		<img src="{{ asset('img/photo.jpg') }}">


		<p class="navbar-text">
			<a class="navbar-link" href="{{ URL::to('/') }}">/</a>
		</p>

		<p class="navbar-text">
			<a class="navbar-link" href="{{ route('pongers.index') }}">PONGERS</a>
		</p>
		<p class="navbar-text">
        	<a class="navbar-link" href="{{ route('leagues.index') }}">LEAGUES</a>
		</p>
      
		<p class="navbar-text">
        	<a class="navbar-link" href="{{ URL::to('/bracket') }}">BRACKET</a>
		</p>

		<p class="navbar-text">
        	<small><a class="navbar-link" href="{{ URL::to('/about') }}">about</a></small>
		</p>

   </div>
</nav>

