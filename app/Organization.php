<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name','description'
    ];
    public function parishofficers()
    {
    	return $this->belongsToMany('App\Parishofficers')->withTimestamps();
    }
}
