<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'hoteler_id');
    }

    public function photos()
    {
        return $this->hasMany('App\HotelPhoto');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function rooms()
    {
        return $this->hasMany('App\HotelRoom');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\Feedback');
    }
}
