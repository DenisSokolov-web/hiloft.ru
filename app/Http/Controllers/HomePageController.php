<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Hotel;
use App\Project;
use Illuminate\Http\Request;

use App\Http\Controllers\BaseController;

class HomePageController extends BaseController
{
    public function __construct()
    {
        $this->template = 'site.pages.';
    }

    public function index()
    {
        $this->template .= 'home';

        $hotels = Hotel::select('country')->distinct()->get();
        $this->vars = array_add($this->vars, 'hotels', $hotels);

        $projects = Project::all();
        $this->vars = array_add($this->vars, 'projects', $projects);

        return $this->renderOutput();
    }
}
