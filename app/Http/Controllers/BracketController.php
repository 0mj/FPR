<?php

namespace App\Http\Controllers;

use App\Bracket;
use Illuminate\Http\Request;


use Auth;
use Gate;
 



class BracketController extends Controller
{
    

    // public function index()
    // {
    //     $title = 'Welcome to the Bracket!!!';
    //     // return view('pongbracket.bracket', compact('title'));
    //     return view('pongbracket.bracket')->with('title',$title);
    // }

    public function about()
    {
        $title = 'About qMatt';
        $features = array(
                        // 'Ponger Family Records.','Ponger Individual Records','Ponger Doubles Records','Ponger Leagues','Ponger Appareal'
                        'Codecademy'
                        ,'Codepen'
                        ,'Github'
                        ,'Linkedin'
                        ,'Pluralsight(CodeSchool)'
                        ,'Resume'
                    );
        // return view('pongbracket.about')->with('title',$title);
        return view('pongbracket.about', compact('title', 'features'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $brackets = Bracket::all();
        // return view( 'brackets.index' , ['brackets' => $brackets] );
        // return view('brackets.index',compact('title', 'features'));
        return view('brackets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('pongbracket.index', ['brackets' => $brackets] );
        // return 'created';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $x = $_POST['amount'];
        if(!is_int($x)){
            $n = self::whatWeNeedToKnow($x);
            $amt_of_rounds = self::get_rounds($n);
            if($amt_of_rounds > 1 ){
                
                $html = '';
                $round =1 ;
                foreach ($n as $key => $value) {
                    
                    $html .= self::printBracket($value, $round);
                    $round++;
                }
                

            }else{
                $html = self::printBracket($x);
            }
            return view('brackets.index', ['html' => $html]);
        } else {
            return 'please provide integer!';
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function show(Bracket $bracket)
    {
        // return view('brackets.show', ['bracket' => $bracket ]);
        return view('pongbracket.index', ['brackets' => $brackets] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function edit(Bracket $bracket)
    {
       return view('brackets.edit', ['bracket' => $bracket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bracket $bracket)
    {
        $bracket->update($request->all());
        return redirect('brackets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bracket $bracket)
    {
        //
    }

    // parameter is an array   containing amount of teams per round.
    public function get_rounds($n){
        if(isset($n['amount_of_teams_seventh_round']) && !is_null($n['amount_of_teams_seventh_round'])){
            $r = 7;
            return $r;
        }
        if(isset($n['amount_of_teams_sixth_round'])  && !is_null($n['amount_of_teams_sixth_round'])){
            $r = 6;
            return $r;
        }
        if(isset($n['amount_of_teams_fifth_round'])  && !is_null($n['amount_of_teams_fifth_round'])){
            $r = 5;
            return $r;
        }
        if(isset($n['amount_of_teams_fourth_round']) && !is_null($n['amount_of_teams_fourth_round'])){
            $r = 4;
            return $r;
        }
        if(isset($n['amount_of_teams_third_round'])  && !is_null($n['amount_of_teams_third_round'])){
            $r = 3;
            return $r;
        }
        if(isset($n['amount_of_teams_second_round']) && !is_null($n['amount_of_teams_second_round'])){
            $r = 2;
            return $r;
        }
    }

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
		// $a = $_POST['amount']; 
		// if(isset($a)) { mypr(whatWeNeedToKnow($a)); } 
	
	public function whatWeNeedToKnow($amount_of_teams){
		
		$return = [];
		$buys = self::amountOfBuys($amount_of_teams);
		$amount_of_teams_first_round = $amount_of_teams -  $buys;
		// $return['amount_of_teams_for_ideal'] = $amount_of_teams + $buys;
		// $return['amount_of_teams_entered'] = $amount_of_teams;
		$return['amount_of_teams_first_round'] = $amount_of_teams_first_round;
		$buys > 0 ? $return['amount_of_teams_first_round_buys'] = $buys : '';
		$return['amount_of_teams_second_round']  = ($amount_of_teams_first_round / 2 ) + $buys;
		($return['amount_of_teams_second_round'] / 2) >= 2 ? $return['amount_of_teams_third_round']   = $return['amount_of_teams_second_round'] / 2 : '';
		($return['amount_of_teams_second_round'] / 4) >= 2 ? $return['amount_of_teams_fourth_round']  = $return['amount_of_teams_second_round'] / 4 : '';
		($return['amount_of_teams_second_round'] / 8) >= 2 ? $return['amount_of_teams_fifth_round']   = $return['amount_of_teams_second_round'] / 8 : '';
		($return['amount_of_teams_second_round'] / 16) >= 2 ? $return['amount_of_teams_sixth_round']   = $return['amount_of_teams_second_round'] / 16 : '';
		($return['amount_of_teams_second_round'] / 32) >= 2 ? $return['amount_of_teams_seventh_round'] = $return['amount_of_teams_second_round'] / 32 : '';
		return $return;
	}
	public function printBracket($amount_of_teams, $round = 1, $buy = false){	
		
		
		$amt_of_games = $amount_of_teams / 2;
		
		if($amount_of_teams > 1){
			// if($buy >= 1 ) {echo '<strong>('.$buy.' buys)</strong>'; }
            // else {echo '('.$amount_of_teams.' teams)';}
            $html = '<ul class="round round-' . $round . '">';
			for ($i = 1; $i <= $amt_of_games; $i++) { 
						$html .='<li class="spacer">&nbsp;</li>
								<li class="game game-top winner"></li>
								<li class="game game-spacer">&nbsp;</li>
								<li class="game game-bottom "></li>';
            }
            $html .='<li class="spacer">&nbsp;</li></ul>';
		}
		return $html;
	}
	
	
	public function amountOfBuys($amount_of_teams){
		
		$ideal = array(8,16,32,64,128);
		if(in_array($amount_of_teams, $ideal))
		{
			return;
		}
		if($amount_of_teams > 4){
            $amount_of_teams >= 5 && $amount_of_teams < 8 ? $first_round_buys = 8 - $amount_of_teams : $x='';
            $amount_of_teams >= 8 && $amount_of_teams < 16 ? $first_round_buys = 16 - $amount_of_teams : $x='';
            $amount_of_teams >= 16 && $amount_of_teams < 32 ? $first_round_buys = 32 - $amount_of_teams : $x='';
            $amount_of_teams >= 32 && $amount_of_teams < 64 ? $first_round_buys = 64 - $amount_of_teams : $x='';
            $amount_of_teams >= 64 && $amount_of_teams < 128 ? $first_round_buys = 128 - $amount_of_teams : $x='';
        }else {
            $first_round_buys = 0;
        }
		
		return $first_round_buys;
	}
	
	public function mypr($x){
		$html = "<pre>";
	    if(is_array($x))$html .=  print_r($x, true);
	    if(is_object($x))$html .= print_r(get_object_vars($x), true);
	    $html .= "</pre>";
	    echo $html;
	}


}
