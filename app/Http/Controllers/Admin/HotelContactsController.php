<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\BaseController;

class HotelContactsController extends BaseController
{
    public function __construct()
    {
        $this->template = 'admin.hotels.forms.';
    }

    public function edit($hotel_id)
    {
        $this->template .= 'contacts_edit';

        $hotel = Hotel::find($hotel_id);
        $this->vars = array_add($this->vars, 'hotel', $hotel);

        return $this->renderOutput();
    }
}
