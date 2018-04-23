<?php
	/*
			ideal bracket numbers: 128,64,32,16,8,4
			ideal bracket - participants = buys
			example: 16 - 13 = 3

			The number of people or teams who should sit out the first round
			should always equal the difference between the number of participants
			and the total number of spaces in the next largest bracket. For
			instance, if thirteen people want to participate in a tournament,
			assume a bracket of sixteen, with three vacant spaces. The difference
			between the number of available spaces and the number of participants
			is three, so three people should sit out the first round.

			The result is exactly the same as if those three people had played
			and won their first-round matches. The other ten participants will be
			reduced to five by the second round, which added to those who received
			a first-round "bye" leaves exactly eight players in the second round,
			which is the ideal number.
			CREDIT: https://thejawaclan.com/topic/6765-how-to-make-tournament-brackets-for-uneven-numbers-of-people/
		*/


	$a = $_GET['amount']; mypr(whatWeNeedToKnow($a));

	function whatWeNeedToKnow($amount_of_teams){
		
		$return = [];
		$buys = amountOfBuys($amount_of_teams);
		$amount_of_teams_first_round = $amount_of_teams -  $buys;

		$return['amount_of_teams_for_ideal'] = $amount_of_teams + $buys;
		$return['amount_of_teams_entered'] = $amount_of_teams;
		$return['amount_of_teams_first_round'] = $amount_of_teams_first_round;
		$return['amount_of_teams_first_round_buys'] = $buys;
		$return['amount_of_teams_second_round'] = ($amount_of_teams_first_round / 2 ) + $buys;
		// $return['amounts_for_ideal_bracket'] = array(128,64,32,16,8,4);
		return $return;
	}


	function teamBuy($amount_of_teams){

		$return = [];
		if($amount_of_teams % 2 == 0 )
		{
			// printBracket();
		}
		else
		{
			// someGetsABuy();
		}
		
		return $return;
	}


	function printBracket($amount_of_teams){	
		$amt_of_games = $amount_of_teams / 2;
		
		# even teams print even style bracket..
		// if($amount_of_teams % 2 == 0)
		// {
			for ($i = 1; $i <= $amt_of_games; $i++) { 
					echo 	'<li class="spacer">&nbsp;</li>
							<li class="game game-top winner"></li>
							<li class="game game-spacer">&nbsp;</li>
							<li class="game game-bottom "></li>';
			}
				echo 	'<li class="spacer">&nbsp;</li>';
		// }
		// else
		// {
		// 	printBuyBracket();
		// }
	}
	
	
	function amountOfBuys($amount_of_teams){
		#amount of teams that get first round buy..
		$first_round_buys = array( 5 => 3, 6 => 2, 7 => 1, 9 => 7, 10 => 6, 11 => 5, 12 => 4, 13 => 3, 14 => 2, 15 => 1, 17 => 15, 18 => 14, 19 => 13, 20 => 12, 21 => 11, 22 => 10, 23 => 9, 24 => 8, 25 => 7, 26 => 6, 27 => 5, 28 => 4, 29 => 3, 30 => 2, 31 => 1, 33 => 31, 34 => 30, 35 => 29, 36 => 28, 37 => 27, 38 => 26, 39 => 25, 40 => 24, 41 => 23, 42 => 22, 43 => 21, 44 => 20, 45 => 19, 46 => 18, 47 => 17, 48 => 16, 49 => 15, 50 => 14, 51 => 13, 52 => 12, 53 => 11, 54 => 10, 55 => 9, 56 => 8, 57 => 7, 58 => 6, 59 => 5, 60 => 4, 61 => 3, 62 => 2, 63 => 1 );

		if (array_key_exists($amount_of_teams, $first_round_buys)) {
			return $first_round_buys["$amount_of_teams"];
		}
	}

	
	function printFirstRoundBracket($amount_of_teams){

		printBracket($amount_of_teams);
	}


	function printSecondRoundBracket($amount_of_teams){
		$no_teams_reamaining = $amount_of_teams / 2;
		// $no_teams_reamaining % 2 == 0 ? printBuyBracket() : $x = '';
		printBracket($no_teams_reamaining);
	}

	function printThirdRoundBracket($amount_of_teams){
		$no_teams_reamaining = $amount_of_teams / 4;
		printBracket($no_teams_reamaining);
	}

	function printFourthRound($amount_of_teams){

		$no_teams_reamaining = $amount_of_teams / 8;
		printBracket($no_teams_reamaining);
	}
	

	function mypr($x){
		$html = "<pre>";
	    if(is_array($x))$html .=  print_r($x, true);
	    if(is_object($x))$html .= print_r(get_object_vars($x), true);
	    $html .= "</pre>";
	    echo $html;
	}












?>	