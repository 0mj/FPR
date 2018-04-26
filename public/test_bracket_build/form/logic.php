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


	// $a = $_GET['amount']; mypr(whatWeNeedToKnow($a));
		$a = $_POST['amount']; mypr(whatWeNeedToKnow($a));
	


	function whatWeNeedToKnow($amount_of_teams){
		
		$return = [];
		$buys = amountOfBuys($amount_of_teams);
		$amount_of_teams_first_round = $amount_of_teams -  $buys;

		$return['amount_of_teams_for_ideal'] = $amount_of_teams + $buys;
		$return['amount_of_teams_entered'] = $amount_of_teams;
		$return['amount_of_teams_first_round'] = $amount_of_teams_first_round;
		$return['amount_of_teams_first_round_buys'] = $buys;
		$return['amount_of_teams_second_round']  = ($amount_of_teams_first_round / 2 ) + $buys;
		$return['amount_of_teams_third_round']   = $return['amount_of_teams_second_round'] / 2;
		$return['amount_of_teams_fourth_round']  = $return['amount_of_teams_second_round'] / 4;
		$return['amount_of_teams_fifth_round']   = $return['amount_of_teams_second_round'] / 8;
		$return['amount_of_teams_sixth_round']   = $return['amount_of_teams_second_round'] / 16;
		$return['amount_of_teams_seventh_round'] = $return['amount_of_teams_second_round'] / 32;
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
	
		$amount_of_teams >= 5 && $amount_of_teams < 8 ? $first_round_buys = 8 - $amount_of_teams : $x='';
		$amount_of_teams >= 8 && $amount_of_teams < 16 ? $first_round_buys = 16 - $amount_of_teams : $x='';
		$amount_of_teams >= 16 && $amount_of_teams < 32 ? $first_round_buys = 32 - $amount_of_teams : $x='';
		$amount_of_teams >= 32 && $amount_of_teams < 64 ? $first_round_buys = 64 - $amount_of_teams : $x='';
		$amount_of_teams >= 64 && $amount_of_teams < 128 ? $first_round_buys = 128 - $amount_of_teams : $x='';
		// 
		return $first_round_buys;
	}

	
	function printFirstRoundBracket($amount_of_teams){

		printBracket($amount_of_teams);
	}


	function printSecondRoundBracket($amount_of_teams){
		$no_teams_reamaining = $amount_of_teams / 2;
		// $no_teams_reamaining % 2 == 0 ? printBuyBracket() : $x = '';
		printBracket($no_teams_reamaining);
	}

	function printIdealRound($amount_of_teams){
		$no_teams_reamaining = $amount_of_teams / 2;
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