<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bracket extends Model
{
    
	protected $fillable = ['created_by_id', 'tournament_name', 'amount_of_competitors', 'amount_of_rounds', 'single_elimination'];











}
