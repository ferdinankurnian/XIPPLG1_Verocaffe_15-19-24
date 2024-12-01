<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('menus')->get();
        $menus = Menu::all();   
        $banner = Banner::all();
        return view('index', compact('categories', 'menus', 'banner'));
    }

    public function filterMenus($category_id)
    {
        if ($category_id == 0) {
            $menus = Menu::all();
        } else {
            $menus = Menu::where('category_id', $category_id)->get();
        }

        return response()->json($menus);
    }
}
