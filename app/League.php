<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = ['name', 'website', 'commisioner'];


    public function pongers()
    {
		return $this->belongsToMany('App\Ponger')->withTimestamps();
    }
}
