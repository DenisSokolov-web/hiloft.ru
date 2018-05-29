<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Hotel;
use App\Project;
use Illuminate\Http\Request;

class PagesController extends BaseController
{
    public function __construct()
    {
        $this->template = 'site.pages.';
    }

    public function home()
    {
        $this->template .= 'home';

        $hotels = Hotel::select('country')->distinct()->get();
        $this->vars = array_add($this->vars, 'hotels', $hotels);

        $projects = Project::all();
        $this->vars = array_add($this->vars, 'projects', $projects);

        $menu = [
            '<a href="#primary-screen" class="link_no-decor header__menu-link">начало</a>',
            '<a href="#booking" class="link_no-decor header__menu-link">бронирование</a>',
            '<a href="#contacts" class="link_no-decor header__menu-link">контакты</a>',
            '<a href="http://franchising.hiloft.ru" class="link_no-decor header__menu-link">франшиза</a><span class="icon-external-link icon_inline-right icon_inline-sm"></span>',
            '<a href="' . route('partnership') . '" class="link_no-decor header__menu-link">арендаторам</a><span class="icon-external-link icon_inline-right icon_inline-sm"></span>'
        ];
        $this->vars = array_add($this->vars, 'menu', $menu);

        return $this->renderOutput();
    }

    public function partnership()
    {
        $this->template .= 'partnership';

        $menu = [
            '<a href="#primary-screen" class="link_no-decor header__menu-link">начало</a>',
            '<a href="#cta-partner" class="link_no-decor header__menu-link">заявка</a>',
            '<a href="#contacts" class="link_no-decor header__menu-link">контакты</a>',
            '<a href="' . route('home') . '" class="link_no-decor header__menu-link">главная</a><span class="icon-external-link icon_inline-right icon_inline-sm"></span>',
            '<a href="http://franchising.hiloft.ru" class="link_no-decor header__menu-link">франшиза</a><span class="icon-external-link icon_inline-right icon_inline-sm"></span>'
        ];
        $this->vars = array_add($this->vars, 'menu', $menu);

        return $this->renderOutput();
    }
}
