<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DB;

class BaseController extends Controller
{
    protected $template;
    protected $vars;
    protected $page_title;

    public function __construct()
    {

    }

    protected function  renderOutput()
    {
        $data = $this->vars;
        $data['page_title'] = $this->page_title;

        return view($this->template, $data);
    }
}