<?php

namespace App\Http\Controllers\Ajax;

use App\City;
use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelsSelectHandler extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('city'))
        {
            $city = $request->input('city');
            $hotels = Hotel::where('city', $city)->get();

            return $hotels;
        }

        if ($request->has('address'))
        {
            $address = $request->input('address');
            $hotel = Hotel::where('address', $address)->first();

            return $hotel;
        }

        if ($request->has('country'))
        {
            $country = $request->input('country');

            $cities = Hotel::select('city')->where('country', $country)->distinct()->get();

            return $cities;
        }
    }
}
