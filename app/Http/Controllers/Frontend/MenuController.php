<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;


class MenuController extends Controller
{
    public function tampil()
    {
        $menu = Menu::all();
        return view('menus.index', compact('menu'));
    }
}
