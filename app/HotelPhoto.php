<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelPhoto extends Model
{
    protected $table = 'hotel_photos';
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo('App\HotelPhotoType');
    }
}
