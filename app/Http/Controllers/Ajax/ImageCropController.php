<?php

namespace App\Http\Controllers\Ajax;

use App\HotelPhotoType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageCropController extends Controller
{
    public function index(Request $request)
    {
        $type_name = $request->input('type_name');

        $type = HotelPhotoType::where('name', $type_name)->first();

        return $type;
    }
}
