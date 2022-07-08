<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('menus.index', compact('menu'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
