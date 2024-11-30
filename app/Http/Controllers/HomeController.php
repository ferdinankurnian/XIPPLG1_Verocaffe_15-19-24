<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('menus')->get();

        $menus = Menu::all();   
        return view('index', compact('categories', 'menus'));
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
