<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('menus')->get();
        $menus = Menu::with('promo')->get();
        $banner = Banner::all();
        return view('index', compact('categories', 'menus', 'banner'));
    }


    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Simpan ke database
        Contact::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }

    public function getMenu($id)
    {
        $menu = Menu::with('promo')->findOrFail($id); // Ambil menu dan promos terkait
        return response()->json($menu);
    }

    public function addPromoToMenu(Request $request)
    {
        $menuId = $request->input('menu_id');
        $promoId = $request->input('promo_id');

        // Validasi data
        $menu = Menu::findOrFail($menuId);
        $promo = Promo::findOrFail($promoId);

        // Tambahkan promo ke menu
        $menu->promos()->attach($promoId);

        return response()->json(['message' => 'Promo added successfully!']);
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
