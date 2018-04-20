<?php

	
	function printBracket($amount_of_teams){

		$amt_of_games = $amount_of_teams / 2;

		for ($i = 1; $i <= $amt_of_games; $i++) { 
			echo 	'<li class="spacer">&nbsp;</li>
					<li class="game game-top winner"></li>
					<li class="game game-spacer">&nbsp;</li>
					<li class="game game-bottom "></li>';
		}
		echo 	'<li class="spacer">&nbsp;</li>';

	}

	
	function printFirstRoundBracket($amount_of_teams){

		printBracket($amount_of_teams);
	}


	function printSecondRoundBracket($amount_of_teams){

		$no_teams_reamaining = $amount_of_teams / 2;
		printBracket($no_teams_reamaining);
	}

	function printThirdRoundBracket($amount_of_teams)
	{
		$no_teams_reamaining = $amount_of_teams / 4;
		printBracket($no_teams_reamaining);
	}

	function printFourthRound($amount_of_teams)
	{
		$no_teams_reamaining = $amount_of_teams / 8;
		printBracket($no_teams_reamaining);
	}
	

	