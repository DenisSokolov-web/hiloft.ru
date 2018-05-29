<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Hotel;
use App\HotelPhoto;
use App\HotelPhotoType;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class HotelController extends BaseController
{
    public function __construct()
    {
        $this->template = 'site.pages.';
    }

    public function show($address)
    {
        $this->template .= 'template';

        $hotel = Hotel::where('slug', $address)->first();
        if (!$hotel)
            abort(404);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        $photos = $hotel->photos;
        $main_photo = HotelPhotoType::where('name', 'main')->first()->photos()->where('hotel_id', $hotel->id)->first();
        $this->vars = array_add($this->vars, 'main_photo', $main_photo);

        $rooms = $hotel->rooms;
        $this->vars = array_add($this->vars, 'rooms', $rooms);

        $gallery = HotelPhoto::where('hotel_id', $hotel->id)->get();
        $this->vars = array_add($this->vars, 'gallery', $gallery);

        $feedbacks = $hotel->feedbacks()->latest()->limit(6)->get();
        $this->vars = array_add($this->vars, 'feedbacks', $feedbacks);

        $params = array(
            'geocode' => $hotel->city . ',' . $hotel->address, // адрес
            'format'  => 'json',                          // формат ответа
            'results' => 1,                               // количество выводимых результатов
            'key'     => '...',                           // ваш api key
        );
        $response = json_decode(file_get_contents('http://geocode-maps.yandex.ru/1.x/?' . http_build_query($params, '', '&')));

        if ($response->response->GeoObjectCollection->metaDataProperty->GeocoderResponseMetaData->found > 0)
        {
            $hotel_coord = ($response->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos);
            $hotel_coord = explode(' ', $hotel_coord);
            //dd($hotel_coord);
            $this->vars = array_add($this->vars, 'hotel_coord', $hotel_coord);
        }

        /** массив room-type для модуля бронирования */
        $this->vars = array_add($this->vars, 'room_types', [1 => 67103, 3 => 67100]);

        return $this->renderOutput();
    }
}
