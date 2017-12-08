<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponger extends Model
{
   protected $fillable = ['first_name', 'last_name', 'city', 'state', 'age', 'swing_hand', 'lifetime_win', 'lifetime_loss'];


	public function leagues()
	{
		return $this->belongsToMany('App\League')->withTimestamps();
	}
}
