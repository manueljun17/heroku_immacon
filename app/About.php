<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
    	'mission',
    	'vision',
    	'history'
    ];
    public static $rules = array(
        'mission' => 'required',
        'vision' => 'required',
        'history' => 'required'
    );

}
