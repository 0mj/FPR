@extends('layouts.app')
@section('title', 'Friends of Pong')
@section('main')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/flexBox.css')}}">



<div class="row">
	<div class="col">
		<form action="{{route('brackets.store') }}" method="post">
			{{ csrf_field() }}	
			Enter the amount of competitors (between 4-128): <input type="text" name="amount">
			
			<button class="btn btn-success" type="submit">Build Bracket</button>
		</form>

	</div>
</div>	
<div class="bracketframe">
@php
	if(isset($_POST['amount'])){
		$amount_of_teams = $_POST['amount'];
		echo 'amount entered: ' . $amount_of_teams . '<br>';
		$amt_of_games = $amount_of_teams / 2;

		if($amount_of_teams > 1){
			
			for ($i = 1; $i <= $amt_of_games; $i++) { 
						echo 	'<li class="spacer">&nbsp;</li> <li class="game game-top winner"></li>
								 <li class="game game-spacer">&nbsp;</li>
								 <li class="game game-bottom "></li>';
			}
			echo '<li class="spacer">&nbsp;</li>';	
			
		}
	}
@endphp
</div>

<div id="tournament">
	<ul class="round round-1">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>79</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">NC A&T <span>48</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Colo St <span>84</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Missouri <span>72</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Oklahoma St <span>55</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Oregon <span>68</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Saint Louis <span>64</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">New Mexico St <span>44</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Memphis <span>54</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">St Mary's <span>52</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Mich St <span>65</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Valparaiso <span>54</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Creighton <span>67</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Cincinnati <span>63</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Duke <span>73</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Albany <span>61</span></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-2">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>82</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Colo St <span>56</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Oregon <span>74</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Saint Louis <span>57</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Memphis <span>48</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Mich St <span>70</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Creighton <span>50</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Duke <span>66</span></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-3">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>77</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Oregon <span>69</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Mich St <span>61</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Duke <span>71</span></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-4">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">Lousville <span>85</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Duke <span>63</span></li>
		
		<li class="spacer">&nbsp;</li>
	</ul>		
</div>



<!-- <button onclick="myFunction2()" class="button">BUILD BRACKET</button> -->
<!-- <button onclick="buildCompleteBracket()" class="button">buildCompleteBracket</button>



  <div class="inner"></div> -->


@endsection	

