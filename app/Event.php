<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'event_location',
        'event_date'
    ];

    protected $dates = [
    	'published_at'
    ];
    public function scopePublished($query)
    {
    	$query->where('published_at','<=',Carbon::now());
    }
    public function scopeUnpublished($query)
    {
    	$query->where('published_at','>',Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }
    public function getPublishedAtAttribute($date)
    {
    	return Carbon::parse($date)->format('Y-m-d');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
