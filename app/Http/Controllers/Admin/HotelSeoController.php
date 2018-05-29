<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;
use App\Http\Controllers\BaseController;

class HotelSeoController extends BaseController
{
    public function __construct()
    {
        $this->template = 'admin.hotels.forms.';
    }

    public function edit($hotel_id)
    {
        $this->template .= 'seo_edit';

        $hotel = Hotel::find($hotel_id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        return $this->renderOutput();
    }
}
