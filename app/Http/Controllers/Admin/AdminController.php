<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Controllers\BaseController;
use Auth;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->template = 'admin.';
    }

    public function index()
    {
        $user = Auth::user();
        $hotels = Hotel::where('hoteler_id', $user->id)->get();

        if($user->can('hoteler'))
            return redirect()->route('hotels.index');

        $this->template .= 'index';

        return $this->renderOutput();
    }

    public function login()
    {
        $this->template = 'site.pages.login';

        return $this->renderOutput();
    }
}
