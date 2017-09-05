<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parishofficers extends Model
{
    protected $fillable = [
        'name','position','description','user_image'
    ];

    public function organizations()
    {
        return $this->belongsToMany('App\Organization');
    }
    public function getOrganizationListAttribute()
    {
        return $this->organizations->pluck('id')->all();
    }
}
