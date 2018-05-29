<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelPhotoType extends Model
{
    protected $table = 'hotel_photo_types';
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany('App\HotelPhoto', 'type_id', 'id');
    }
}
