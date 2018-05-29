<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormsHandlerController extends Controller
{
    public function index(Request $request)
    {
        $arr = $request->all();

        return $request->all();

        if ($arr['form_name'] == 'booking')
        {

            $start = strtotime($request['date_arrival']);
            $end = strtotime($request['date_departure']);
            $arr['days'] = ($end - $start) / (60 * 60 * 24);

            return $arr;
        } elseif ($arr['form_name'] == 'feedbacks')
        {
            return 'feedbacks';
        }
    }
}
